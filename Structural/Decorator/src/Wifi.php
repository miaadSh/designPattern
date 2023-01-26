<?php

namespace Funlife\Decorator;

use Funlife\Decorator\BookingDecorator;

class Wifi extends BookingDecorator
{
    private const PRICE = 100.0;

    public function calculatePrice(): float
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . " with wifi";
    }
}
