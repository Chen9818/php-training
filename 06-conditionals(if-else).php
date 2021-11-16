<?php

$age = 23;
$salary = 35000;

if($age === 23){
    echo"1";
}

if($age === 23) echo"1";

if($age === 23){
    echo"1";
}else{
    echo"2";
}

//switch
$name = "jason";
switch($name){
    case "chen":
        echo "chen";
        break;
    case "jason":
        echo "jason";
        break;
    case "tom":
        echo "tom";
        break;
    default:
        echo "not founding";
}