<?php
session_start();
if (!isset($_SESSION['isLogin']) || !isset($_SESSION['role']) || $_SESSION['role'] != "admin"){
    // not set || set to false => redirect> login.php
    header("Location: ../login.php");
}
// continue