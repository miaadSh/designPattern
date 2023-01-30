<?php

namespace Funlife\Proxy;

interface BankAccount
{
    public function deposit(float $amount): void;
    public function getBalance(): float;
}