<?php
//session_start();
include_once('dbConnection.php');

$query = "SELECT * 
FROM  `carpool` 
WHERE `dep_city` = '$city1' AND `des_city` = '$city2'";

$res=mysql_query($query) or die ("MySQL ERROR:".mysql_error());
$check=mysql_num_rows($res);
if($check){
	$re["success"]=1;
	while($car = mysql_fetch_array($res))
		$re[] = $car;
}else{
 	$re["success"]=0;
 
}
	$re = json_encode($re);
	echo $re;
?>