<?php

declare(strict_types=1);

namespace Termyn;

interface IdentifiableEvent extends Event
{
    public function id(): Id;
}
