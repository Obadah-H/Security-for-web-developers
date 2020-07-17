<?php
    require "is_logged_in.php";
    echo "Howdy ".$_SESSION["name"]."<br>";
    echo "Your note is: ".file_get_contents("note.txt");
?>
<h2> Update note </h2>
<form method="post" action="set_note.php">
    note: <input type="text" name="note" />
    <input type="submit" />
</form>