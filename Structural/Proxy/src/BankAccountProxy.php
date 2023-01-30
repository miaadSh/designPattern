<?php

namespace Funlife\Proxy;

class BankAccountProxy extends HeavyBankAccount implements BankAccount
{
    private ?float $balance = null;

    public function getBalance(): float
    {
        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}