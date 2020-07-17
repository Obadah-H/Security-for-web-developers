<?php
    if(isset($_POST['login']) && isset($_POST['password'])){
        $name=$_POST['login'];
        $password=addslashes($_POST['password']);

        $xmlStr = file_get_contents('data.xml');
        $xml = new SimpleXMLElement($xmlStr);

        $query = "//user[username = '$name' and password='$password']"; // ' or '1'='1
        $result = $xml->xpath($query);
        print_r($result);
    }
?>