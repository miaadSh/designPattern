<?php

declare(strict_types=1);

namespace Funlife\Adapter;

use Funlife\Adapter\NewCalculator;

class CalculatorAdapter
{

    private NewCalculator $calc;

    public function __construct()
    {
        $this->calc = new NewCalculator();
    }

    public function operation(string $op, int $num1, int $num2)
    {
        switch ($op) {
            case '+':
                return $this->calc->add($num1, $num2);
            case '-':
                return $this->calc->sub($num1, $num2);
            default:
                break;
        }
    }
}
