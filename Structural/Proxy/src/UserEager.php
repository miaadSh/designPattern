<?php

namespace Funlife\Proxy;

use Funlife\Proxy\User;

declare(strict_types=1);

class UserEager implements User
{

    public $user;

    public function __construct(string $user)
    {
        $this->user = $user;
    }

    public function getUser(): string
    {
        return $this->user;
    }
}
