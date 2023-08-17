<?php

require_once "data/SayGoodByeSayHello.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->sayHello("Robby");
$person->goodBye("Joko");

$person->name = "Syakir";
var_dump($person);

$person->run();
