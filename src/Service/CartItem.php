<?php

namespace App\Service;

use App\Entity\Calendar;

class CartItem {
    
    public $calendar;
    public $quantity;

    public function __construct(Calendar $calendar, int $quantity) 
    {
        $this->calendar = $calendar;
        $this->quantity = $quantity;
    }

    public function getTotal(): int 
    {
        return $this->calendar->getPrice() * $this->quantity;
    }
      
}