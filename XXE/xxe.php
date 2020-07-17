<?php
    $xmlStr = file_get_contents('php://input');
    $dom = new DomDocument();
    $dom->loadXML($xmlStr, LIBXML_NOENT | LIBXML_DTDLOAD);
    $login = simplexml_import_dom($dom);
    $name = $login->username;
    $email = $login->email;
    echo "Welcome ".$name." - ".$email;
?>
