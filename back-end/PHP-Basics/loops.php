<?php

$test = [15, 24, 55, 41, 21];

// while
$i = 0;
echo '<ul>';
while ($i <= 4){
    /*$out = "<li>";
    $out .= $test[$i];
    $out .= "</li>";
    echo $out;*/
    echo "<li>$test[$i]</li>";
    $i++;
}
echo '</ul>';


echo '<ul>';
for ($i=0; $i<=4;$i++){
    echo "<li>$test[$i]</li>";
}
echo '</ul>';


// break, continue

$test = [15, 24, 55, 41, 21];

for ($i=0; $i<=4;$i++){ //0-1-2
    if ($i == 2){
        break;
    }
    echo "<li>$test[$i]</li>";
}
// .....

for ($i=0; $i<=4;$i++){ //0-1-2--3-4
    if ($i == 2){
        continue;
    }
    echo "<li>$test[$i]</li>";
    //...
}


// foreach
echo '<hr>foreach: ';
$names = ["omid", "Nazanin", "ehsan", "fateme"];

echo '<ul>';
foreach ($names as $x){
    echo "<li>$x</li>";
}
echo '</ul>';

// foreach (key-value)
echo '<hr>foreach: ';
echo '<br><br>';

$scores = ["omid" => 18, "Nazanin" => 19, "ehsan" => 18.5, "fateme" => 18];

echo '<table><tr><th>نام</th><th>نمره</th></tr>';
foreach ($scores as $name=>$score){
    echo "<tr><td>$name</td><td>$score</td></tr>";
}
echo '</table>';


echo '<br><br><br><br><br><br>';




// ex:
$numbers = [1,2,3,4,5,6,7,8,9,10,11,12];
//foreach - continue - $x % 2 ==
// اعداد فرد چاپ کنه





