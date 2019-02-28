<?php
require "init.php";
$ProductID=$_POST['ProductID'];
$Barcode=$_POST['Barcode'];
$CommesseID=$_POST['CommesseID'];
$Qty=$_POST['Qty'];



$mysql_qry="update ware_house join products on ware_house.ProductID=products.ProductID set CommesseID='$CommesseID', Qty='$Qty' WHERE  ware_house.ProductID='$ProductID'";
if(mysqli_query($connection,$mysql_qry))
{
	echo "data updated";
}
else{
	echo "error";
}



?>



