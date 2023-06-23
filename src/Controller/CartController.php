<?php

namespace App\Controller;

use App\Form\CartConfirmationType;
use App\Repository\CalendarRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class CartController extends AbstractController
{
  /**
     * @var CartService
     */
    protected $cartService;

    /**
     * @var CalandarRepository
     */
    protected $calendarRepository;

    public function __construct(Cartservice $cartService, CalendarRepository $calendarRepository)
    {
        $this->cartService = $cartService;
        $this->calendarRepository = $calendarRepository;

    }
   

       /**
     * @Route("/cart/add/{id<[0-9]+>}", name="cart_add", requirements={"id":"\d+"})
     */
    public function add($id, Request $request)
    {
      // 0 est ce que le produit existe
      $calendar = $this->calendarRepository->find($id);

      if (!$calendar) {
          throw $this->createNotFoundException("l activité demandée n'existe pas");
      }
      
      $this->cartService->add($id);

      $this->addFlash('success', "L activité a bien été ajoutée au panier");
 
     if ($request->query->get('returnToCart')) {
        return $this->redirectToRoute('cart_index');
    }


    return $this->redirectToRoute('cart_index');
}

 /**
     * @Route("/cart", name="cart_index")
     */
public function index(CartService $cartService)
{
   $form = $this->createForm(CartConfirmationType::class);
   $detailedCart = $this->cartService->getDetailedCartItems();
   $total = $this->cartService->getTotal();

    return $this->render('cart/index.html.twig', [
        'items' => $detailedCart, 
        'total' => $total,
        'confirmationForm' => $form->createView()
    ]);
}


/**
     *
     * @Route("/cart/delete/{id<[0-9]+>}", name="cart_delete", requirements={"id":"\d+"})
     */
    public function delete($id)
    {
        $calendar = $this->calendarRepository->find($id);

        if (!$calendar) {
            throw $this->createNotFoundException("l activitée $id demandée n'existe pas");
        }

        $this->cartService->remove($id);


        //   dd($this->cartService);
        return $this->redirectToRoute('cart_index');

     
    }


    /**
     *
     * @Route("/cart/decrement/{id<[0-9]+>}", name="cart_decrement",
     *     requirements={"id": "\d+"})
     */
    public function decrement($id)
    {
        $calendar = $this->calendarRepository->find($id);

        if (!$calendar) {
            throw $this->createNotFoundException("l activité $id demandée n'existe pas
            et ne peut etre décrémenté");
        }

        $this->cartService->decrement($id);

   
        return $this->redirectToRoute('cart_index');


    }





   /**
    * @Route("/cart/deleteAll", name="cart_delete_all")
    */
    public function deleteAll()
    {
       $this->cartService->removeAll();



        return $this->redirectToRoute('cart_index');
    }



}








