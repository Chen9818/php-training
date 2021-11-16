<?php

$a = 5;
$b = 4;
$c = 1.2;

echo $a + $b * $c."<br>";

$a+=$b; echo $a."<br>";//累加

is_float(1.25);//true
is_double(1.25);//true
is_int(5);//true
is_numeric("3.45");//true
is_numeric("3dd.45");//false

$strNumber = "12.34";
$number = intval($strNumber);//轉型別//轉為整數
var_dump($number);

