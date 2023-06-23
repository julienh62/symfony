<?php

namespace App\Controller\Admin;

use App\Entity\Calendar;
use App\Form\CalendarType;
use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//#[Route('admin/calendar')]
class AdminCalendarController extends AbstractController
{
    #[Route('admin/calendar/', name: 'admin_calendar_index', methods: ['GET'])]
    public function index(CalendarRepository $calendarRepository): Response
    {
        return $this->render('admin/calendar/index.html.twig', [
            'calendars' => $calendarRepository->findAll(),
        ]);
    }

    #[Route('admin/calendar/new', name: 'admin_calendar_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CalendarRepository $calendarRepository): Response
    {
        $calendar = new Calendar();
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calendarRepository->save($calendar, true);

           // return $this->redirectToRoute('app_calendar_index', [], Response::HTTP_SEE_OTHER);
            
            return $this->redirectToRoute('admin_main_calendar', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/calendar/new.html.twig', [
            'calendar' => $calendar,
            'form' => $form,
        ]);
    }

    #[Route('admin/calendar/{id}', name: 'admin_calendar_show', methods: ['GET'])]
    public function show(Calendar $calendar, $id): Response
    {
        $calendarStock = $calendar->getPurchaseItems($id)->getValues()[0]->getCalendar()->getStock();

        return $this->render('admin/calendar/show.html.twig', [
            'calendar' => $calendar,
            'calendarStock' => $calendarStock
        ]);
    }

    #[Route('admin/calendar/{id}/edit', name: 'admin_calendar_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Calendar $calendar, CalendarRepository $calendarRepository): Response
    {
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calendarRepository->save($calendar, true);

            return $this->redirectToRoute('admin_main_calendar', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/calendar/edit.html.twig', [
            'calendar' => $calendar,
            'form' => $form,
        ]);
    }

    #[Route('admin/calendar/{id}', name: 'admin_calendar_delete', methods: ['POST'])]
    public function delete(Request $request, Calendar $calendar, CalendarRepository $calendarRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendar->getId(), $request->request->get('_token'))) {
            $calendarRepository->remove($calendar, true);
        }

        return $this->redirectToRoute('admin_calendar_index', [], Response::HTTP_SEE_OTHER);
    }
}
