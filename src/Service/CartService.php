<?php 

namespace App\Service;

use App\Repository\CalendarRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\CartItem;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\SessionInterface;





class CartService 
{
    protected $session;
    protected $calendarRepository;
    protected $requestStack;

    public function __construct(CalendarRepository $calendarRepository, RequestStack $requestStack, SessionInterface $session ) {
        $this->session = $session;
        $this->calendarRepository = $calendarRepository;
        $this->requestStack = $requestStack;
    }

    protected function getCart() : array {
        return $this->session->get('cart', []);
    }

    protected function saveCart(array $cart)
    {
        return $this->session->set('cart', $cart);
    }

    public function empty() {
        $this->saveCart([]);
    }

    public function add(int $id) {
      //1 retrouver le panier dans la session
       //2 tableau vide si pas existant
       $cart = $this->getCart();
   
       //3 voir si le produit id existe

       //4 si oui augmenter quantité

       //5 Sinon  quantité 1
       if (!array_key_exists($id, $cart)) {
        $cart[$id] = 0;
    }
        $cart[$id]++;


       //6 enregisterr le tableua dans la session
       $this->saveCart($cart);
    }
      

       public function remove(int $id)
       {
           // on récupère le panier actuel
           $cart = $this->getCart();
   
           unset($cart[$id]);
   
           $this->saveCart($cart);
       }
   
       public function decrement(int $id)
       {
           $cart = $this->getCart();
   
           if (!array_key_exists($id, $cart)) {
               return;
           }
   
           //si le calendar est à 1 alors on supprime
           if ($cart[$id] === 1) {
               $this->remove($id);
               return;
           }
           //sinon on le decremente
           $cart[$id]--;
   
           $this->saveCart($cart);
       }
    

    public function getTotal():int {
      $total = 0;
  
      foreach($this->getCart() as $id => $quantity) {
        $calendar = $this->calendarRepository->find($id);

        if(!$calendar) {
            continue;
        }

         $total += $calendar->getPrice() * $quantity;
  //dd($total);
       }
         return $total;
    }


    /**
     * @return CartItem[]
     */
    public function getDetailedCartItems(): array {
        $detailedCart = [];

        foreach ($this->getCart() as $id => $quantity) {
            $calendar = $this->calendarRepository->find($id);
         // si un calendar est supprimé, on continue la boucle
            if(!$calendar) {
                continue;
            }


           // dd($detailedCart);
            $detailedCart[] = new CartItem($calendar, $quantity);
        
        }
        //dd($detailedCart);
        return $detailedCart;
    }

    public function removeAll()
    {
        $this->session->set("cart", []);
    }
}

