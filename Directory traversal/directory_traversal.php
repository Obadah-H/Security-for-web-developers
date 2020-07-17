<?php
$page = "index";
if(isset($_GET['page'])){
    $page = $_GET['page'];
    require( $page . "");
}else{
echo "Welcome to this website";
?>
<br />
Please choose language: 
<a href="?page=en.php"> English </a> - 
<a href="?page=ru.php"> Russian </a>
<?php
}
?>