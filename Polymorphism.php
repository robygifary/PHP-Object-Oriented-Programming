<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Robby");
var_dump($company);

$company->programmer = new BackendProgrammer("Robby");
var_dump($company);

$company->programmer = new FrontendProgrammer("Robby");
var_dump($company);


sayHelloProgrammer(new Programmer("Robby"));
sayHelloProgrammer(new BackendProgrammer("Robby"));
sayHelloProgrammer(new FrontendProgrammer("Robby"));