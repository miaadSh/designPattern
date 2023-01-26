<?php

namespace Funlife\Composite\Elements;

use Funlife\Composite\Renderable;

class TextElement implements Renderable
{
    public function render(): string
    {
        return "<text item='ok'>";
    }
}
