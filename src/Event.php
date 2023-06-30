<?php

declare(strict_types=1);

namespace Termyn;

use Termyn\DateTime\Instant;

interface Event
{
    public function publishedAt(): Instant;
}
