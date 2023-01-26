<?php

use Funlife\Composite\Elements\InputElement;
use Funlife\Composite\Elements\TextElement;
use Funlife\Composite\Form;
use Funlife\Composite\Renderable;

test('form instance of renderable', function () {
    expect(new Form())->toBeInstanceOf(Renderable::class);
});

test('create correct output when form render is correct', function () {
    $form = new Form();

    $this->assertSame("<form></form>", $form->render());
});

test('create correct output with text element', function () {
    $form = new Form();
    $text = new TextElement();
    $form->addElement($text);

    $this->assertSame("<form><text item='ok'></form>", $form->render());
});

test('create correct output with text element and input', function () {
    $form = new Form();
    $text = new TextElement();
    $input = new InputElement();
    $form->addElement($text);
    $form->addElement($input);

    $this->assertSame("<form><text item='ok'><input type='text'></form>", $form->render());
});

test('create correct output with nested form and item element', function () {
    $form = new Form();
    $text = new TextElement();
    $input = new InputElement();
    $form->addElement($text);
    $form->addElement($input);
    $form2 = new Form();
    $form2->addElement($text);
    $form->addElement($form2);

    $this->assertSame("<form><text item='ok'><input type='text'><form><text item='ok'></form></form>", $form->render());
});
