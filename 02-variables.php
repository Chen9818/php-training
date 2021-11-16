<?php
$name = "chen";
$age = 23;
$isMale = true;
$height = 1.74;
$salary = null;

echo $name."<br>";
echo $age."<br>";
echo $isMale."<br>";
echo $height."<br>";
echo $salary."<br>";

echo gettype($name)."<br>";  //型別

var_dump($name); //型別
$name = false;
var_dump($name);

isset($age);//true 變數存在
isset($add);//false

define("PI",3.14);
echo PI."<br>";

?>