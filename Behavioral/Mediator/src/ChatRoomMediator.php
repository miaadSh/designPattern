<?php

namespace Life\Mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message): string;
}