<?php
class Person {
    public string $name;  //public公開//private私有//protected被保護
    public $surname;
    protected int $age;
    public static int $counter = 0;
    public function __construct($name,$surname){
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public static function getCounter(){
        return self::$counter;
    }
}