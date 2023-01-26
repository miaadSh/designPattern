<?php

namespace Funlife\FactoryMethod;

class WebDialog extends Dialog
{
    public function createButton(): Button
    {
        return new HtmlButton();
    }
}
