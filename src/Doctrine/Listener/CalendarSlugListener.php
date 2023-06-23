<?php

namespace App\Doctrine\Listener;

use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use App\Entity\Calendar;

class CalendarSlugListener
{
    protected $slugger;
    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }
    public function prePersist(Calendar $entity, LifecycleEventArgs $event)
    {
       

        if(empty($entity->getSlug())) {
            //sluggerInterface
           $entity->setSlug(strtolower($this->slugger->slug($entity->getName())));
        }
      // dd("ça marche");
    }
}