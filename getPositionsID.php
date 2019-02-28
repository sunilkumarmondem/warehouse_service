<?php
require "init.php";
$sql = "select * from positions order by PositionName;";
$result = mysqli_query($connection,$sql);
$response = array();
while($row=mysqli_fetch_array($result)){
	array_push($response,array("PositionID"=>$row[0]));
	
}
echo json_encode(( $response));
mysqli_close($connection);



?>