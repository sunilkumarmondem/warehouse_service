<?php
require "init.php";
$sql = "select * from brands order by BrandName;";
$result = mysqli_query($connection,$sql);
$response = array();
while($row=mysqli_fetch_array($result)){
	array_push($response,array("BrandID"=>$row[0]));
	
}
echo json_encode(( $response));
mysqli_close($connection);



?>