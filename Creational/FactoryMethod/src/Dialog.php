<?php

namespace Funlife\FactoryMethod;

use Exception;

abstract class Dialog
{
    public function render()
    {
        echo "render";
    }

    public abstract function createButton(): Button;
}
