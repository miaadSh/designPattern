<?php

use Life\Mediator\ChatRoom;
use Life\Mediator\User;

test('example', function () {
    
    $chat = new ChatRoom();
    
    $miaad = new User("miaad", $chat);
    $ramin = new User("ramin", $chat);

    $this->assert("2023-02-14 [miaad]: Hi there!", $miaad->send("Hi there!"));
    $this->assertEqual("2023-02-14 [ramin]: Hey!", $ramin->send("Hey!"));
});
