<?php

namespace Funlife\Composite\Elements;

use Funlife\Composite\Renderable;

class InputElement implements Renderable
{
    public function render(): string
    {
        return "<input type='text'>";
    }
}
