<?php
require "init.php";


$Barcode=$_POST['Barcode'];

$sql = "select ware_house.ProductID,Barcode,BrandName,code,Qty,Item_desc,ware_house.CommesseID from ware_house join products,commesse,brands where
 ware_house.ProductID = products.ProductID AND 
 ware_house.CommesseID = commesse.CommesseID AND products.BrandID=brands.BrandID and Barcode='$Barcode'  ";

$result = mysqli_query($connection,$sql);

$response = array();
if($row=mysqli_fetch_array($result)){
	array_push($response,array("ProductID"=>$row[0],"Barcode"=>$row[1],"BrandName"=>$row[2],"code"=>$row[3],"Qty"=>$row[4],"Item_desc"=>$row[5],"CommesseID"=>$row[6]));
	echo json_encode(( $response));
}
else{
	echo "Item details not found in Database";
}

mysqli_close($connection);



?>