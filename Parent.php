<?php

require_once "data/Shape.php";

use Data\{shape, Rectangle};

$shape = new shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;