<?php

declare(strict_types=1);

namespace Funlife\Facade;

class Credit
{
    public function get(string $name)
    {
        return "credit for " . $name;
    }
}
