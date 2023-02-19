<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Life\Mediator\ChatRoom;
use Life\Mediator\User;

$chat = new ChatRoom();
    
$miaad = new User("miaad", $chat);
$ramin = new User("ramin", $chat);


echo $miaad->send("salam ramin chetory!!!!");
echo "\n";
echo $ramin->send("salam miaad khoooobam dadash!");
echo "\n";