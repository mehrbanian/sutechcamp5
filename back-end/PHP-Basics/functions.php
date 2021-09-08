<?php

function sayHello(){
    echo 'Hello User!';
}

//sayHello();

function add(int $x, int $y = 15) : int {

    //echo $x + $y;
//    return $x + $y;
    return $x + $y;
}

//add(2, 7);
echo '<br>';
//add(10);


echo '<hr>';

$sum = add(2, 7);
echo '<br>';
//var_dump($sum);

$sum = add(11, 7);

echo '<hr>';
echo '<hr>';
// scopes:

$z = 5;
//$q = 11;
$w = 11;

function my_add($x, $y){

    global $w, $q;
    $q = 2;
    $w = 10;
    echo $w + $q + $x + $y;

}

my_add(3, 4);
echo '<br>';
echo $q;
echo '<br>';
echo $w;

