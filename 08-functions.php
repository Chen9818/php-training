<?php

// function hello(){
//     echo "Hello World";
// }

// hello();

function hello($name){
    echo "Hello $name";
}

hello('chen');

function  sum(...$nums){
    $sum = 0;
    foreach ($nums as $n){
        $sum += $n;
    }
    return $sum;
}

echo sum(1,2,3,4,5);