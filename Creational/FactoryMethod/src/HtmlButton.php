<?php

namespace Funlife\FactoryMethod;

class HtmlButton implements Button
{
    public function render()
    {
        echo "HTML Render btn";
    }

    public function onClick()
    {
        echo "CLICK ON WEB";
    }
}
