<?php

namespace Funlife\FactoryMethod;

include_once('../vendor/autoload.php');

$dialog = new WindowsDialog();
$okButton = $dialog->createButton();
$okButton->render();
$okButton->onClick();
