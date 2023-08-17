<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Rizky";
$manager->sayHello("Raffa");

$vp = new VicePresident();
$vp->name = "Roby";
$vp->sayHello("Tamara");