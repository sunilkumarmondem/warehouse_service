<?php
$db_name="warehouse";
$mysql_user="root";
$server_name="localhost";
$connection=mysqli_connect($server_name,$mysql_user,"",$db_name);
if(!$connection){
	echo "connection not successful";
}
?> 