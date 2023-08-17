<?php

$matches = [];
$result = preg_match_all("/obby|ara|fary/i", "Robby Tamara Gifary", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat!");
var_dump($result);

$result = preg_split("/[\s,-]/", "Robby Tamara Gifary, Proggramer, Dev-OPS");

var_dump($result);