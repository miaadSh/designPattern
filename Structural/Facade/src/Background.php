<?php

declare(strict_types=1);

namespace Funlife\Facade;

class Background
{
    public function check(string $name)
    {
        return "background check for " . $name;
    }
}
