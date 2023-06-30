<?php

declare(strict_types=1);

namespace Termyn\Messaging;

use Termyn\Event;

interface EventBus
{
    public function publish(Event ...$events): void;
}
