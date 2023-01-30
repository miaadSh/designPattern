<?php
namespace Funlife\Proxy;

class HeavyBankAccount implements BankAccount
{
    private array $transactions = [];

    /**
     * @param float $amount
     */
    public function deposit(float $amount): void
    {
        $this->transactions[] = $amount;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return array_sum($this->transactions);
    }
}