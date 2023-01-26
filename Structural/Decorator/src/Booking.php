<?php

declare(strict_types=1);

namespace Funlife\Decorator;

interface Booking
{
    public function calculatePrice(): float;
    public function getDescription(): string;
}
