<?php

declare(strict_types=1);

namespace Termyn\Test\Messaging\Messenger;

use PHPUnit\Framework\TestCase;
use Termyn\Event;
use Termyn\Messaging\Messenger\SymfonyMessengerEventBus;

final class SymfonyMessengerEventBusTest extends TestCase
{
    public function testItPublishesEvents(): void
    {
        $events = array_fill(0, 3, $this->createMock(Event::class));

        $fakeMessageBus = new FakeMessageBus();

        $eventBus = new SymfonyMessengerEventBus($fakeMessageBus);
        $eventBus->publish(...$events);

        $this->assertCount(
            expectedCount: 3,
            haystack: $fakeMessageBus->dispatchedMessages()
        );
    }
}
