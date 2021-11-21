<?php
require_once "Person.php";
class Student extends Person{
    public string $id;
    public function __construct($name,$surname,$id){
        $this->age = 15;
        $this->id = $id;
        parent::__construct($name,$surname);
    }
}