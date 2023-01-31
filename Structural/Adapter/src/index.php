<?php

declare(strict_types=1);

namespace Funlife\Adapter;

use Funlife\Adapter\OldCalculator;
use Funlife\Adapter\NewCalculator;
use Funlife\Adapter\CalculatorAdapter;

$clac_v1 = new OldCalculator();

$clac_v1->operation("+", 2, 5);

$clac_v2 = new NewCalculator();

$clac_v2->add(2, 5);

$calc_adapter = new CalculatorAdapter();

$calc_adapter->operation("+", 2, 5);
