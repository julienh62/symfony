<?php

namespace App\Event;

use App\Entity\Calendar;
use Symfony\Contracts\EventDispatcher\Event;

class CalendarViewEvent extends Event {
    protected $calendar;

    public function __construct(Calendar $calendar)
    {
        $this->calendar = $calendar;
    }
    public function getCalendar() : Calendar {
        return $this->calendar;
    }

}