<?php

declare(strict_types=1);

namespace Termyn\Mesh\Messaging;

use Termyn\Mesh\IntegrationEvent;

interface IntegrationEventBus
{
    public function publish(
        IntegrationEvent ...$integrationEvents
    ): void;
}
