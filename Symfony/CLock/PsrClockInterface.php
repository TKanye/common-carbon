<?php

namespace utils\Carbon\Symfony\Clock;

use DateTimeImmutable;

interface PsrClockInterface
{
    /**
     * Returns the current time as a DateTimeImmutable Object
     */
    public function now(): DateTimeImmutable;
}
