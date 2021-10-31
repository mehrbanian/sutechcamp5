<?php

// mysql
// mysqli
// PDO

$conn = new PDO("mysql:host=localhost;dbname=webcamp", "root", "");

$conn->exec("set names utf8");
//$conn->exec("DELETE FROM users");

$result = $conn->query("SELECT * FROM new_users");
/*print_r($result->fetch());
echo '<br>';
print_r($result->fetch());
print_r($result->fetch() == false);*/

//print_r($result->fetchAll());


$stmt = $conn->prepare("INSERT INTO new_users VALUES(NULL, ?, ?)");
/*$name = 'omid';
$age = 25;
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $age);
$result = $stmt->execute();*/

/*$age = 22;
$data = ['ghazal', $age];
$result = $stmt->execute($data);*/

$stmt = $conn->prepare("SELECT * FROM new_users WHERE age > ?");
$age = 23;
$stmt->bindParam(1, $age);
$result = $stmt->execute();
echo '<ul>';
while( $user = $stmt->fetch() ){
    echo "<li>{$user['name']} ({$user['age']})</li>";
}
echo '</ul>';

echo '<hr>';

try {
    $conn = new PDO("mysql:host=localhost;dbname=webcamp", "root", "");
}catch (PDOException $e){
    echo "خطا داریم: " . $e->getMessage();
    die();
}

$stmt = $conn->prepare("SELECT * FROM new_users WHERE age > :age");
$stmt->bindParam('age', $_GET['age']);
// Ex: execute( [] )
if ( $stmt->execute() ){
    echo '<ul>';
    while( $user = $stmt->fetch() ){
        echo "<li>{$user['name']} ({$user['age']})</li>";
    }
    echo '</ul>';
}




