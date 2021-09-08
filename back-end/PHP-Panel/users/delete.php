<?php
require_once '../inc/admin_auth.php';
if ( !isset($_GET['id']) ){
    header("Location: index.php");
}
require_once '../inc/configs.php';
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

$stmt = $conn->prepare("DELETE FROM users WHERE id=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();

if ($stmt->affected_rows == 0){
    // user not exists
    header("Location: index.php?deleted=notExists");
}else{
    // Deleted successfully
    header("Location: index.php?deleted=ok");
}
