<?php

$name = 'Omid';

//echo $name;

$_name2 = 'name';

$x = 5;
$y = 11;
//echo $x + $y;

$isLogin = true;
$x = "sutechcamp";

//echo $x + $y;
//var_dump($y);

$x = NULL; //null


$name = 'Omid';
//$name = "Omid";
$family = 'Rajaei';

//echo $name;
//echo ' ';
//echo $family;

//echo $name . ' ' . $family;
// wrong: echo $name + $family;

//echo "$name $family : hello";

$z = ($x = 15) + 7;
//echo $z;

$number = "asdasd56asd88";
//$number = 10;
//echo (int)$number;

$i = 5;
//echo ++$i;
//echo $i;

/*if($i === 3){
    echo 'ok';
}else{
    echo 'error';
}*/

/*$n = '5';
if($i === $n){
    echo 'yes';
}else{
    echo 'no';
}*/

/*if($i == 3){
    //
}elseif ($i == 5){
    //
}
else{
    //
}*/

/*$isLogin = false;
if( !$isLogin ){
    echo 'لطفا لاگین کنید';
}*/


// [2, 3, 'omid', false]

$names = array( 'omid', 'sara', 'eiman' );
$names = ['omid', 'sara', 15];

//var_dump($names);

$person = [
    'name' => 'sara',
    'age' => 23,
    'city' => 'shiraz',
];
//var_dump($person['city']);


$person = [
    'name' => 'sara',
    'age' => 23,
    'address' => array(
        'country' => 'iran',
        'city' => 'shiraz'
    ),
];
//var_dump($person);

$person = [
    'name' => null,
    'age' => null,
    'address' => array(
        'country' => null,
        'city' => null
    ),
];
$person['address'] = 'sina';
//var_dump($person);

$day = 2;
/*if($day == 1){
    echo 'شنبه';
}elseif($day == 2){
    echo 'یکشنه';
}elseif($day == 3){
    echo 'دوشنبه';
}else{
    echo 'nope!';
}*/

/*switch ($day){
    case 1:
    case 2:
        echo 'شنبه'; //$day == 1
        break;
//    case 2:
//        echo 'یکشنبه'; break;
    case 3:
        echo 'دوشنبه';
        break;
    default:
        echo 'nope';
}*/


$isLogin = true;
$isAdmin = false;
if($isLogin && $isAdmin){
    //
}

// and == &&
// or  == ||

$i = 10;
while( $i > 5 ){
    echo 'hello<br>';
    $i--;
}
/*do{

}while();*/

for($i=0; $i<7; $i++){
    echo 'salam<br>';
}


$test = [15, 24, 55, 41, 21]; //0-4



