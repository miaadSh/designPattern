<?php

declare(strict_types=1);

namespace Funlife\Adapter;

class NewCalculator
{
    function add(int $num1, int $num2)
    {
        return $num1 + $num2;
    }

    function sub(int $num1, int $num2)
    {
        return $num1 - $num2;
    }
}
