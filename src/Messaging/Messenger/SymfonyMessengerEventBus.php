<?php

declare(strict_types=1);

namespace Termyn\Messaging\Messenger;

use Symfony\Component\Messenger\MessageBusInterface as MessageBus;
use Termyn\Event;
use Termyn\Messaging\EventBus;

final readonly class SymfonyMessengerEventBus implements EventBus
{
    public function __construct(
        private MessageBus $messageBus,
    ) {

    }

    public function publish(Event ...$events): void
    {
        foreach ($events as $event) {
            $this->messageBus->dispatch($event);
        }
    }
}
