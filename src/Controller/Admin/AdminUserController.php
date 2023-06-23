<?php

namespace App\Controller\Admin;

use App\Entity\PurchaseItem;
use App\Entity\User;
use App\Form\CalendarType;
use App\Repository\UserRepository;
use App\Repository\PurchaseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;



class AdminUserController extends AbstractController
{
    #[Route('admin/user', name: 'admin_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        $user = $userRepository->getAll();

        return $this->render('admin/user/index.html.twig', [
        
         'users' => $user

        ]);
    }



    #[Route('admin/user/{id}', name: 'admin_user_show', methods: ['GET'])]
    public function show(UserRepository $userRepository, $id, User $user): Response
    {

        return $this->render('admin/user/show.html.twig', [
          //  'user' => $userRepository->findOneBy($id),
         //   'purchases' => $user->getPurchases()
         'user' => $user,
         'purchases' => $user->getPurchases()

        ]);
    }

    #[Route('search/{searchItem}', name: 'user_search')]
    public function searchUser(  UserRepository $userRepository,  $searchItem = null):JsonResponse
    {
      //
    $user = $userRepository->getByEmail($searchItem);

// 200 c'est le statut http attendu
//etape 3
        return $this->json( $user, 200, [], ['groups' => 'user:read']
        );
    }


    #[Route('searchname/{searchItemName}', name: 'user_searchname')]
    public function searchUserName(  UserRepository $userRepository,  $searchItemName = null):JsonResponse
    {
      //
    $user = $userRepository->getByName($searchItemName);

// 200 c'est le statut http attendu
//etape 3
        return $this->json( $user, 200, [], ['groups' => 'user:read']
        );
    }

}