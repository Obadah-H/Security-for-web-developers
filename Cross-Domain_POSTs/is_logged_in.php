<?php

session_start();
function is_token($token){
    if($token == "3123blahblah")
        return true;
    return false;
}
if(!isset($_SESSION["name"]) || !is_token($_SESSION['token'])){
    header("Location: login.php");
    exit;
}
?>