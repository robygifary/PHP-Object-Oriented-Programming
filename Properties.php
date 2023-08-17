<?php

require_once 'data/Person.php';

$person = new Person("Robby", "Bogor");
$person->name = "Robby";
$person->address = "Bogor";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Putri", null);
$person2->name = "Putri";
$person2->address = null;

var_dump($person2);

echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;

//error
// $person2->name = [];