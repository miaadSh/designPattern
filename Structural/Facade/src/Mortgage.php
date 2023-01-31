<?php

declare(strict_types=1);

namespace Funlife\Facade;

use Funlife\Facade\Bank;
use Funlife\Facade\Credit;
use Funlife\Facade\Background;


class Mortgage
{

    public function __construct(private string $name)
    {
        $this->name = $name;
    }

    public function apply_for(int $amount)
    {
        $final_state = "approved";

        $bank = new Bank();
        $credit = new Credit();
        $background = new Background();

        if (!$bank->verify($this->name, $amount)) {
            $final_state = "denied";
        } elseif (!$background->check($this->name)) {
            $final_state = "denied";
        } elseif (!$credit->get($this->name)) {
            $final_state = "denied";
        }

        return $final_state;
    }
}
