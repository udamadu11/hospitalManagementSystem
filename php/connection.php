<?php 
	
	$server = "localhost";
	$serverName = "root";
	$password = "";
	$db = "hospital";

	$con =mysqli_connect($server,$serverName,$password,$db);
	if (!$con) {
		echo "No connection";
	}
?>