<?php

$name = 'chen';
$string = "hello $name";//用""才可以顯示變數值
$string2 = 'hello $name';
echo $string."<br>";
echo $string2."<br>";

echo "hello"."my friend"."<br>";

$str = "    Hello World   ";
echo "1 - ".strlen($str)."<br>";
echo "2 - ".trim($str)."<br>";
echo "3 - ".ltrim($str)."<br>";
echo "4 - ".rtrim($str)."<br>";
echo "5 - ".str_word_count($str)."<br>";
echo "6 - ".strrev($str)."<br>";
echo "7 - ".strtoupper($str)."<br>";
echo "8 - ".strtolower($str)."<br>";
echo "9 - ".ucfirst("hello")."<br>";
echo "10 - ".lcfirst("HELLO")."<br>";
echo "11 - ".ucwords("hello and php")."<br>";
echo "12 - ".strpos($str,"world")."<br>";
echo "13 - ".stripos($str,"world")."<br>";
echo "14 - ".substr($str,8,6)."<br>";
echo "15 - ".str_replace("world","php",$str)."<br>";
echo "16 - ".str_ireplace("world","php",$str)."<br>";

$text = "
hello my name is chen
i am 23
i love <h3>video game</h3>
";
echo $text."<br>";
echo nl2br($text)."<br>";//排版
echo htmlentities($text)."<br>";//html
