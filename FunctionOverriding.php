<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Robby";
$manager->sayHello("Syakir");


$vp = new VicePresident();
$vp->name = "Ahmad";
$vp->sayHello("Rasya");