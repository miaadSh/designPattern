<?php

declare(strict_types=1);

namespace Funlife\Decorator;

abstract class BookingDecorator implements Booking
{
    protected Booking $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }
}
