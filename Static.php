<?php

require_once "Helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Robby Tamara Gifary";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10,10,10,10,10);
echo "Result : $result" . PHP_EOL;