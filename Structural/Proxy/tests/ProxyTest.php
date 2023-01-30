<?php

use Funlife\Proxy\BankAccountProxy;

test('Test proxy will only execute expensive get balance once', function () {
    $bankAccount = new BankAccountProxy();
    $bankAccount->deposit(30);

    // this time balance is being calculated
    $this->assertSame(30.0, $bankAccount->getBalance());

    // inheritance allows for BankAccountProxy to behave to an outsider exactly like ServerBankAccount
    $bankAccount->deposit(50);

    // this time the previously calculated balance is returned again without re-calculating it
    $this->assertSame(30.0, $bankAccount->getBalance());
});