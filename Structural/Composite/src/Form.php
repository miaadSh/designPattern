<?php

namespace Funlife\Composite;

class Form implements Renderable
{
    private array $elements = [];

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }

    public function render(): string
    {
        $form = "<form>";
        foreach ($this->elements as $element) {
            $form .= $element->render();
        }
        return $form . "</form>";
    }
}
