<?php
declare(strict_types=1);

namespace App\Domain\Model;


trait EventTrait
{
    /** @var object[] */
    private $events = [];
    
    /**
     * Return domain events that have been recorded internally, and immediately forget about them. That is: a second
     * call to this method would return an empty array.
     * 
     * @return object[]
     */
    public function releaseEvents(): array
    {
        $events = $this->events;
        
        $this->events = [];
        
        return $events;
    }
    
    /**
     * Use this method inside your aggregate to record new domain events.
     */
    protected function recordThat(object $event): void
    {
        $this->events[] = $event;
    }
}