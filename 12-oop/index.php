<?php
//Object-oriented programming
require_once "Person.php";
require_once "Student.php";
// $p = new Person();  //第一種方式
// $p->name = "wei";
// $p->surname = "Chen";

// $p = new Person("Wei","Chen");  //第二種方式
// $p->setAge(30);
// echo"<pre>";
// var_dump($p);
// echo"<pre>";
// echo Person ::$counter;

$student = new Student("Wei","Chen","123");
echo"<pre>";
var_dump($student);
echo"<pre>";