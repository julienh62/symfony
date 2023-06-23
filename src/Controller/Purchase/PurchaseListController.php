<?php

namespace App\Controller\Purchase;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Twig\Environment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class PurchaseListController extends AbstractController
{
 /**
     * @Route("/purchase", name="app_purchase")
     * @IsGranted ("ROLE_USER", message ="Vous devez être connecté pour  accéder vos commandes" )
     */
    public function index()
    {
        //il faut verifier que le user est bien connecté
        //grace à la classe security
        /** @var User */
        $user = $this->getUser();

      

        return $this->render('purchase/index.html.twig', [
            'purchases' => $user->getPurchases()
         
        ]);

    }
}

