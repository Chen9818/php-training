<?php

//print current date
echo date('Y-m-d H:i:s')."<br>";
//print yesterday
echo date('Y-m-d H:i:s',time()-60*60*24)."<br>";
//different format
echo date('F j Y, H:i:s')."<br>";
//print timestamp
echo time()."<br>";
  
//parse date
$parseDate = date_parse('2021-11-18 16:10:00');
echo "<pre>";
var_dump($parseDate);
echo "</pre>";

//parse date from format
$dataString = "November 18 2021 16:13:00";
$parseDate = date_parse_from_format('F j Y H:i:s',$dataString);
echo "<pre>";
var_dump($parseDate);
echo "</pre>";