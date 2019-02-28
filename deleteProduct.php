<?php
require "init.php";

$ProductID=$_POST['ProductID'];

$mysql_qry="DELETE from products where ProductID='$ProductID'";
if(mysqli_query($connection,$mysql_qry))
{
	echo "data deleted successfully";
}
else{
	echo "error";
}



?>