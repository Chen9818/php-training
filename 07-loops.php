<?php
//while
$count = 0; 
while($count<10){
    echo $count."<br>";
    // if($count===5){
    //     break;
    // }
    $count++;
};

//do-while
// do{
//     echo $count."<br>";
//     $count++;
// }while($count<10);  //0~9

// for
for($i=0;$i<10;$i++){
    echo $i."<br>";
}

//foreach
$fruits = ["banana","apple","melon"];
foreach($fruits as $i=>$fruit){        //i是id ，fruit是值
    echo $i."    ".$fruit."<br>";
}


$person = [
    "name"=>"Brad",
    "age"=>23,
    "hobbies"=>["game","movie"]
];
foreach($person as $key => $value){
    if(is_array($value)){
        echo $key."   ".implode(",",$value)."<br>";//處理hobbies陣列，將hobbies轉為字串
    }else{
        echo $key."   ".$value."<br>";
    }
}