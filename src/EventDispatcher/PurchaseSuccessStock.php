<?php

namespace App\EventDispatcher;


use App\Repository\CalendarRepository;
use App\Entity\Purchase;
use App\Entity\PurchaseItem;
use App\Entity\User;
use App\Event\PurchaseSuccessEventStock;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;

class PurchaseSuccessStock implements EventSubscriberInterface
{
    protected $security;
    protected $em;

    public function __construct(Security $security, EntityManagerInterface $em)
    {
        $this->security = $security;
        $this->em = $em;

    }
   public static function getSubscribedEvents() :array
    {
      //je dis au dispatcher ; à tout moment si tu reçois 
      //l'évnmnt purchase.successstock alors tu appelles  calculStock
       return [
         'purchase.successStock' => 'calculStock'
       ];
    }
   public function calculStock(PurchaseSuccessEventStock $purchaseSuccessEventStock)
   {
     // je recupere la quantité commandée par le client
     $quantityPurchase = $purchaseSuccessEventStock->getPurchase()
        ->getPurchaseItems()->getValues()[0]->getQuantity();
  // dd($quantityPurchase);
      // decrementer stock
     
      //je récupere le stock du produit concerné par la commande
   $recupStock = $purchaseSuccessEventStock->getPurchase()->getPurchaseItems()->getValues()[0]->getCalendar()->getStock();
     //  $recupStock = $purchaseSuccessEventStock->getPurchase()->getPurchaseItems()->getValues()[0];
    // dd($recupStock);

   // calcul du nouveaustock : je soustraie la quantité demandée  du stock
     $newStock = $recupStock - $quantityPurchase;
    // dd($newStock);

       //recuperer le id de l'activité du calendrier
   //    $id = $purchaseSuccessEventStock->getPurchase()->getPurchaseItems()->getValues()[0]->getCalendar()->getId();
       // dd($id);

       $calendar = $purchaseSuccessEventStock->getPurchase()->getPurchaseItems()->getValues()[0]->getCalendar()->setStock($newStock);
//dd($calendar);
     $this->em->persist($calendar);

     $this->em->flush();


   }

  // public function newStock() {
         

//}



}