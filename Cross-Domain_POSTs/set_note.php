<?php
    require "is_logged_in.php";
    if(isset($_POST["note"])){
        file_put_contents("note.txt", $_POST["note"]);
    }
    header("Location: main.php");
    exit;
?>