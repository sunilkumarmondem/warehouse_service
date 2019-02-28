<?php

require "init.php";
$BrandID=$_POST['BrandID'];
$ProductName=$_POST['ProductName'];
$Barcode=$_POST['Barcode'];
$CassioliCode=$_POST['CassioliCode'];
$PositionID=$_POST['PositionID'];

$mysql_qry="INSERT INTO products(BrandID,ProductName,Barcode,CassioliCode,PositionID)  VALUES('$BrandID','$ProductName','$Barcode','$CassioliCode','$PositionID');" ;
if(mysqli_query($connection,$mysql_qry))
{
	echo "data inserted";
}
else{
	echo "error";
}
?>