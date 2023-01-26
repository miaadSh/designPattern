<?php

namespace Funlife\Decorator;

class DoubleRoomBooking implements Booking
{
    public function calculatePrice(): float
    {
        return 400.0;
    }

    public function getDescription(): string
    {
        return "double room";
    }
}
