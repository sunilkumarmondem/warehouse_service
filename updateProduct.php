<?php
require "init.php";

$ProductID=$_POST['ProductID'];
$BrandID=$_POST['BrandID'];
$ProductName=$_POST['ProductName'];
$Barcode=$_POST['Barcode'];
$CassioliCode=$_POST['CassioliCode'];
$PositionID=$_POST['PositionID'];


$mysql_qry="UPDATE products set BrandID='$BrandID',ProductName='$ProductName',Barcode='$Barcode', CassioliCode='$CassioliCode', PositionID='$PositionID' where products.ProductID='$ProductID'";
if(mysqli_query($connection,$mysql_qry))
{
	echo "data updated";
}
else{
	echo "error";
}



?>






