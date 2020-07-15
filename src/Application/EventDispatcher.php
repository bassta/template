<?php
declare(strict_types=1);


namespace App\Application;


use Psr\EventDispatcher\EventDispatcherInterface;

interface EventDispatcher extends EventDispatcherInterface
{
    /**
     * @param array<object> $events
     */
    public function dispatchAll(array $events): void;
}