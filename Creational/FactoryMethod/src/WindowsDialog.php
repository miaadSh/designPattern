<?php

namespace Funlife\FactoryMethod;

class WindowsDialog extends Dialog
{
    public function createButton(): Button
    {
        return new WindowsButton();
    }
}
