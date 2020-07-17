<?php
if(isset($_GET['name'])){
    $name = $_GET['name'];
    echo "Welcome ".$name;

}
else{?>
    <form method="get">
        <input type="text" name="name" />
        <input type="submit" />
    </form>
<?php
    }?>