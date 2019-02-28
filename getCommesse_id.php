<?php
require "init.php";
$sql = "select CommesseID,code from commesse order by code desc;";
$result = mysqli_query($connection,$sql);
$response = array();
while($row=mysqli_fetch_array($result)){
	array_push($response,array("CommesseID"=>$row[0]));
	
}
echo json_encode(( $response));
mysqli_close($connection);



?>