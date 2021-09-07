<?php
session_start();

$options = [
    'expires' => time() + (60*60),
    //'domain' => 'localhost',
    //'path' => '/webcamp/panel/users/',
    //'secure' => true,
    //'httponly' => true
];
//setcookie("course_name", "SUTech-Camp-5-new", $options );

//echo $_COOKIE['course_name'];


/*
echo md5("1");
echo '<br>';
echo md5("Ss0");

echo '<br>';
$salt = "SUTech59*k";
echo md5($salt . "password");
*/


//setcookie("user_id", "26", $options );

//echo $_COOKIE['user_id'] ?? ""; // isset($_COOKIE['user_id'])

// Change Cookie
//setcookie("user_id", "150", $options );

// Delete Cookie
//setcookie("user_id", "", $options );

//setcookie("user_id", "", time() - 5 );


/// ---------------- SESSION
//$_SESSION['role']  = 1; // admin
//$_SESSION['name']  = "امید رجائی";
//$_SESSION['new']  = true;


echo '<br>';
echo '<br>';
echo '<br>';
//echo $_SESSION['role'];
echo '<br>';
echo '<br>';
//var_dump($_SESSION);


//unset($_SESSION['role']);
//session_unset(); // unset all sessions
//session_destroy(); // unset all + del PHPSESSID

if (isset($_SESSION['visits'])){
    $_SESSION['visits']++;
}else{
    $_SESSION['visits'] = 1;
}

echo $_SESSION['visits'];