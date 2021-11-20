<?php
//magic constant
echo __DIR__."<br>";
echo __FILE__."<br>";
echo __LINE__."<br>";//5 目前在vscode上第5行

//create directory
// mkdir('test');

//rename directory
// rename('test','test2');

//delete directory
// rmdir('test2');

//read file
$file = scandir('../');//所有資料
echo"<pre>";
var_dump($file);
echo"<pre>";


echo file_get_contents('lorem.txt');//讀取內容
echo file_put_contents('sample.txt','some content');//改寫內容

$userJson = file_get_contents('https://randomuser.me/api/');//取api內容
echo $userJson."<br>";
$user = json_decode($userJson);
echo"<pre>";
var_dump($user);
echo"<pre>";

//is exist
$a = file_exists('sample.txt');//true
$b = is_dir('test');//false
echo"<pre>";
var_dump($b);
echo"<pre>";