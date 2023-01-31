<?php

namespace Funlife\Proxy;

use Funlife\Proxy\Proxy;
use Funlife\Proxy\User;

declare(strict_types=1);

class UserLazy implements Proxy
{

    public $user;
    public $initilizedUser;

    public function __construct(string $user)
    {
        $this->user = $user;
        $this->initilizedUser = null;
    }

    public function getUser(): string
    {
        if (!$this->initilizedUser) {
            $this->initilizedUser = new $this->user();
        }

        return $this->initilizedUser->getUser();
    }
}
