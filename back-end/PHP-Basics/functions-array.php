<?php
$names = ["omid", "nazanin", "ehsan", "ghazal"];
var_dump($names); // in Dev
echo '<br>';
print_r($names);
echo '<hr>';
echo count($names);
echo '<br>';
echo sizeof($names);
echo '<br>';
$str = "test";
var_dump(is_array($names));
var_dump(is_array($str));
echo '<br>';
echo '<hr>';
$new_names = ["sara", "amir"];

print_r(array_merge($names, $new_names));

echo '<br>';
$scores = ["omid" => 18, "nazanin" => 19, "ehsan" => 18.5, "ghazal" => 18];
print_r(array_values($scores));
echo '<br>';
print_r(array_keys($scores));
echo '<br>';
if ( array_key_exists('sara', $scores) ) {
    echo $scores['sara'];
}
echo '<hr>';
echo '<br>';
$names = ["omid", "nazanin", "ehsan", "ghazal"];
var_dump(array_push($names, 'sara', 'amir'));
print_r($names);
//echo '<br>';
//$names[10] = "sahar";
//print_r($names);
echo '<br>';
echo array_pop($names);
print_r($names);
echo '<br>';
echo array_shift($names);
print_r($names);
echo '<hr>';
echo '<hr>';
echo '<br>';
$title = "SUTech Camp 5";
$result = explode( ' ', $title );
print_r($result);

echo '<br>';
echo '<br>';
$names = ["omid", "nazanin", "ehsan", "ghazal"];
echo implode( ' - ', $names);

echo '<br>';

echo '<br>';
echo '<br>';
