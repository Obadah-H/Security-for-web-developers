<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
if($_POST['name'] == "peter" && $_POST['password'] == "123")
{
    session_start();
    $_SESSION['name']= "peter";
    $_SESSION['token']= "3123blahblah";
    header("Location: main.php");
    exit;
}else{
    header("login.php");
}
?>