<?php
$dateTime = new DateTime();
$dateTime->setDate(1993, 1, 12);
$dateTime->setTime(10, 10, 10, 0);

$dateTime->add(new DateInterval("P1Y"));
$minusOneMounth = new DateInterval("P1M");
$minusOneMounth->invert = 1;
$dateTime->add($minusOneMounth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2023-08-17 11:12:10", new DateTimeZone("Asia/Jakarta"));
if($date) {
    var_dump($date);
}else {
    echo "format salah" . PHP_EOL;
}
var_dump($date);