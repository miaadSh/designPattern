<?php

namespace Funlife\FactoryMethod;

class WindowsButton implements Button
{
    public function render()
    {
        echo "windows button render";
    }

    public function onClick()
    {
        echo "CLICK ON WINDOWS";
    }
}
