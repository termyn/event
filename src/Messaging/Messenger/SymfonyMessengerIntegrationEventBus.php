<?php

declare(strict_types=1);

namespace Termyn\Mesh\Messaging\Messenger;

use Symfony\Component\Messenger\MessageBusInterface as MessageBus;
use Termyn\Mesh\IntegrationEvent;
use Termyn\Mesh\Messaging\IntegrationEventBus;

final readonly class SymfonyMessengerIntegrationEventBus implements IntegrationEventBus
{
    public function __construct(
        private MessageBus $messageBus,
    ) {

    }

    public function publish(
        IntegrationEvent ...$integrationEvents
    ): void {
        foreach ($integrationEvents as $integrationEvent) {
            $this->messageBus->dispatch($integrationEvent);
        }
    }
}
