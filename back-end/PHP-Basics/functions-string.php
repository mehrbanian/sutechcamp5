<?php
$str = "SUTech Camp 5";

echo strlen($str);
echo '<br>';
echo str_word_count($str);
echo '<br>';
echo $str[6];
echo '<hr>';
echo strpos($str, 'Camp');
var_dump(strpos($str, 'amp'));
echo '<br>';
$new_string = str_replace('Camp','Course', $str);
echo $new_string;
echo '<br>';
echo strtolower($str);
echo '<br>';
echo strtoupper($str);
echo '<br>';
$str = "                              SUTech Camp 5            ";
echo '<pre>';
echo trim($str);
echo '</pre>';
echo '<br>';
echo '<hr>';

$input = "Hello! this is <strong>a test</strong> from <a href='https://rajaei.net/'>Omid</a> for you!";
echo $input;
echo '<br>';
echo strip_tags($input, '<strong><a>');
echo '<br>';
echo substr($input, 7);
echo '<br>';
echo substr($input, 7, 6);
echo '<br>';
echo '<br>';