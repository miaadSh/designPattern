<?php

use Funlife\Decorator\DoubleRoomBooking;
use Funlife\Decorator\ExtraBed;
use Funlife\Decorator\Wifi;

test('test Can Calculate Price For Basic DoubleRoomBooking', function () {
    $booking = new DoubleRoomBooking();

    $this->assertSame(400.0, $booking->calculatePrice());
    $this->assertSame('double room', $booking->getDescription());
});

test('test Can Calculate Price For Double Room Booking With WiFi', function () {
    $booking = new DoubleRoomBooking();
    $booking = new Wifi($booking);

    $this->assertSame(500.0, $booking->calculatePrice());
    $this->assertSame('double room with wifi', $booking->getDescription());
});

test('test Can Calculate Price For Double Room Booking With WiFi And ExtraBed', function () {
    $booking = new DoubleRoomBooking();
    $booking = new Wifi($booking);
    $booking = new ExtraBed($booking);

    $this->assertSame(700.0, $booking->calculatePrice());
    $this->assertSame('double room with wifi with extra bed', $booking->getDescription());
});
