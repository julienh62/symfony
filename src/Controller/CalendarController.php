<?php

namespace App\Controller;

use App\Entity\Calendar;
use App\Entity\User;
use App\Entity\PurchaseItem;
use App\Form\CalendarType;
use App\Entity\Category;
use App\Repository\CalendarRepository;
use App\Repository\PurchaseItemRepository;
use App\Repository\CategoryRepository;
use \DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CalendarController extends AbstractController
{
   #[Route('/calendar', name: 'app_calendar_index')]
    public function index(CalendarRepository $calendarRepository): Response
    {
        return $this->render('calendar/index.html.twig', [
            'calendars' => $calendarRepository->findAll(),
        ]);
    }



    #[Route('/calendar/{id}', name: 'app_calendar_show', priority: -1, methods: ['GET'])]
    public function show(Calendar $calendar,$id): Response
    {
     
        return $this->render('calendar/show.html.twig', [
            'calendar' => $calendar,
        
           // 'user' => $user
        ]);
    }

  // list calendar char
 /**
 * @Route("/calendarallchar", name="calendar_all_char")
 */
public function listCalendarByChar( CalendarRepository $calendarRepository, CategoryRepository $categoryRepository)
{
   $calendar = $calendarRepository->getAllChar();
   $idCat = $categoryRepository->find($id = 1);

    return $this->render(
        'calendar/listByCat.html.twig',
        [
             'idcat' => $idCat,
            'calendars'  => $calendar
        ]

    );
}


/**
 * @Route("/calendarscatamaran", name="cataAll_show")
 */
public function listCalendarByCatamaran( CalendarRepository $calendarRepository, CategoryRepository $categoryRepository)
{
   $calendar = $calendarRepository->getAllCatamaran();
   $idCat = $categoryRepository->find($id = 2);
   
    return $this->render(
        'calendar/listByCat.html.twig',
        [
            'calendars'  => $calendar,
            'idcat' => $idCat
            
        ]

    );
}

//list calendar kid
   /**
   * @Route("/calendarcharkid", name="charkidAll_show")
   */
  public function listCalendarByCharKid( CalendarRepository $calendarRepository, CategoryRepository $categoryRepository)
  {
  
     $calendar = $calendarRepository->getAllCharKid();
     $idCat = $categoryRepository->find($id = 3);
  
      return $this->render(
          'calendar/listByCat.html.twig',
          [
              'calendars'  => $calendar,
              'idcat' => $idCat 
          ]
  
      );
  }


}
