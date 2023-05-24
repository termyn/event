<?php

declare(strict_types=1);

namespace Termyn\Mesh;

use Termyn\Id;

interface IntegrationEvent
{
    public function id(): Id;
}
