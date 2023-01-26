<?php

namespace Funlife\Decorator;

use Funlife\Decorator\BookingDecorator;

class ExtraBed extends BookingDecorator
{
    private const PRICE = 200;

    public function calculatePrice(): float
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . " with extra bed";
    }
}
