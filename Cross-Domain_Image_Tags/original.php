<?php
if(isset($_GET['text'])){
    file_put_contents("text.txt", $_GET['text']);
}
?>