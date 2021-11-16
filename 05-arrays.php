<?php
$name = ["Tom","Chen","Joe"];

echo "<pre>";
var_dump($name);
echo "</pre>";

echo $name[2]."<br>";

// echo count($name)."<br>";

array_push($name,"Bob");//加入Bob
echo "<pre>";
var_dump($name);
echo "</pre>";

array_pop($name);//剔除Bob

array_unshift($name,"JoJo");//把JoJo加到首位

array_shift($name);//剔除JoJo
echo "<pre>";
var_dump($name);
echo "</pre>";

$str = "banana,apple,peach";//將字串轉為陣列
echo "<pre>";
var_dump(explode(",",$str));
echo "</pre>";

echo implode("%",$name);//將陣列轉為字串

echo "<pre>";
var_dump(in_array("Joe",$name));//Joe是否在陣列內
echo "</pre>";

echo "<pre>";
var_dump(array_search("Joe",$name));//Joe是否在陣列內，並附帶資訊
echo "</pre>";

$sex = ["man","woman"];
echo "<pre>";
var_dump(array_merge($sex,$name));//結合陣列
echo "</pre>";

rsort($name);//排序
echo"<pr>";
print_r($name);
echo"</pr>";

//複合陣列//key value
$person = [
    "name"=>"Brad",
    "age"=>23,
    "hobbies"=>["game","movie"]
];

echo"<pre>";
print_r($person);
echo"</pre>";

echo $person["name"]."<br>";//Brad

echo $person["gender"] = "man";//增加
echo"<pre>";
var_dump($person);
echo"</pre>";

echo"<pre>";
var_dump(array_keys($person));//key
echo"</pre>";

echo"<pre>";
var_dump(array_values($person));//value
echo"</pre>";

ksort($person);//排序 //asort
echo"<pre>";
var_dump($person);
echo"</pre>";

$todo = [//多層陣列
    ["title"=>"todo 1","completed"=>true],
    ["title"=>"todo 2","completed"=>false]
];
echo"<pre>";
var_dump($todo);
echo"</pre>";