<?php

declare(strict_types=1);

namespace Funlife\Adapter;

class OldCalculator
{
    public function operation(string $op, int $num1, int $num2)
    {
        switch ($op) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            default:
                break;
        }
    }
}
