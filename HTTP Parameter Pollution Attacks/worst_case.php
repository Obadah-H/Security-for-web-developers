<?php
//Worst case
$user_id=get_current_user_id();
$full_query = "insert.php?user_id=". $user_id."&".$_SERVER['QUERY_STRING'];
echo $full_query;

function get_current_user_id(){
	return 123;
}
?>