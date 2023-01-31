<?php

declare(strict_types=1);

namespace Funlife\Facade;

class Bank
{
    public function verify(string $name, int $amount)
    {
        return "Verified " . $name . $amount;
    }
}
