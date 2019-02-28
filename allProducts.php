<?php
require "init.php";
$sql = "select ProductID,BrandName,ProductName,Barcode,Cassiolicode,PositionName,products.BrandID,products.PositionID from products join brands,positions where products.BrandID=brands.BrandID and products.PositionID=positions.PositionID;";
$result = mysqli_query($connection,$sql);
$response = array();
while($row=mysqli_fetch_array($result)){
	array_push($response,array("ProductID"=>$row[0],"BrandName"=>$row[1],"ProductName"=>$row[2],"Barcode"=>$row[3],"CassioliCode"=>$row[4],"PositionName"=>$row[5],"BrandID"=>$row[6],"PositionID"=>$row[7]));
	
}
echo json_encode(( $response));
mysqli_close($connection);



?>