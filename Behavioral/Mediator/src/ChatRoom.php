<?php

namespace Life\Mediator;

use DateTime;
use DateTimeZone;

class ChatRoom implements ChatRoomMediator
{
    public function showMessage(User $user, string $message): string
    {
        $currentTime = new DateTime('now', new DateTimeZone('asia/tehran'));
        return "{$currentTime->format("Y-m-d")} [{$user->getName()}]: {$message}";
    }
}