<?php
require "init.php";
header('Content-type:bitmap;charset=utf-8');

if(isset($_POST["encoded_String"])){
	$encoded_String=$_POST["encoded_String"];
	
	$ImageName=$_POST["ImageName"];
	$decode_string=base64_decode($encoded_String);
	$path='images/'.$ImageName;
	$file=fopen($path,'wb');
	$is_written=fwrite($file,$decode_string);
	fclose($file);
	if($is_written>0){
		$mysql_qry="insert into products(ImageName,ImagePath)values('$ImageName',$path)";
		$result=mysqli_query($connection,$mysql_qry);
		if($result){
			file_put_contents($path,base64_decode($ImageName));
			echo "success";
		}
		else{
			echo "failed";
		}
		
	}
	mysqli_close($connection);
}


?>