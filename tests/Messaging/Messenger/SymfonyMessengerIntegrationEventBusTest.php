<?php

declare(strict_types=1);

namespace Termyn\Mesh\Test\Messaging\Messenger;

use PHPUnit\Framework\TestCase;
use Termyn\Mesh\IntegrationEvent;
use Termyn\Mesh\Messaging\Messenger\SymfonyMessengerIntegrationEventBus;

final class SymfonyMessengerIntegrationEventBusTest extends TestCase
{
    public function testItPublishesIntegrationEvents(): void
    {
        $integrationEvents = array_fill(0, 3, $this->createMock(IntegrationEvent::class));

        $fakeMessageBus = new FakeMessageBus();

        $integrationEventBus = new SymfonyMessengerIntegrationEventBus($fakeMessageBus);
        $integrationEventBus->publish(...$integrationEvents);

        $this->assertCount(
            expectedCount: 3,
            haystack: $fakeMessageBus->dispatchedMessages()
        );
    }
}
