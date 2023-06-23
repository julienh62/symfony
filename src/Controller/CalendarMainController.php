<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CalendarRepository;

class CalendarMainController extends AbstractController
{
    #[Route('/calendarmain', name: 'app_calendar_main')]
    public function index(CalendarRepository $calendar): Response
    {
        $events = $calendar->findAll();

        //dd($events);
           //donne l'evenement avec une date qui est un objet
           //il faut transformer l'objet en string
   
          
           foreach($events as $event){
               $rdvs[] = [
                   'id' => $event->getId(),
                   'start' => $event->getStart()->format('Y-m-d H:i:s'),
                   'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                   'title' => $event->getTitle(),
                   'backgroundColor' => $event->getBackgroundColor(),
                   'borderColor' => $event->getBorderColor(),
                   'textColor' => $event->getTextColor()
               ];
           }
   
           $data = json_encode($rdvs);
   
           return $this->render('calendarmain/index.html.twig', compact('data'));
       }
   }