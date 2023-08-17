<?php

require_once 'data/Person.php';

$putri = new Person("Putri", "Bandung");
$putri->name = "Putri";
$putri->sayHello("Robby");

$nia = new Person("Nia", "Surabaya");
$nia->name = "Nia";
$nia->sayHello(null);

$putri->info();
$nia->info();