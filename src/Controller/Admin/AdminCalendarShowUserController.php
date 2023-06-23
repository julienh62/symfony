<?php

namespace App\Controller\Admin;


use App\Entity\Calendar;
use App\Entity\Customer;
use App\Form\CustomerType;
use App\Repository\CalendarRepository;
use App\Repository\PurchaseItemRepository;
use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\Common\Collections\ArrayCollection;

//#[Route('admin/calendar')]
class AdminCalendarShowUserController extends AbstractController
{

    #[Route('admin/calendarshowuser/{id}', name: 'admin_calendar_show_user', methods: ['GET'])]
    public function showuser( CalendarRepository $calendarRepository,   Calendar $calendar , $id,
                              Request $request, CustomerRepository $customerRepository,
                              PurchaseItemRepository $purchaseItemRepository): Response
    {
       $calendarName = $calendar->getPurchaseItems($id)->getValues();
//Si pas de commande, pas de purchaseitem alors
       if ($calendarName === []) {
        $calendarName = "Pas de client";
   }
    // sinon je recupere le nom de l'utilisateur/client
    else {
        $calendarName = $calendar->getPurchaseItems($id)->getValues()[0]->getPurchase()->getUser()->getFullName();
    }

// dd($calendarName);


// je recupere les valeurs de la commandes
$calendarQuantityClient = $calendar->getPurchaseItems()->getValues();
    
//si la quantité comandée est nulle 
//je donne 0 à la valeur quantity 
if ($calendarQuantityClient === []) {
$calendarQuantityClient = [
 "quantity" =>"0"
];

//sinon je récupere la quantité
}
else {
    $calendarQuantityClient = $calendar->getPurchaseItems()->getValues()[0];
}

$resultquery = $purchaseItemRepository->getPurchaseQuantitySum($id);
dd($resultquery);

//dd($calendarQuantityClient);
   


    return $this->render('admin/calendar/show_user.html.twig', [
        'calendar' => $calendar,
        'calendarName' => $calendarName,
        'calendarQuantityClient' => $calendarQuantityClient,
    'resultquery' => $resultquery
      
    ]);

}

}