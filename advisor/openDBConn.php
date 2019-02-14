<?php
$dbServername ='goss.tech.purdue.edu';
$dbUsername ='cgt456group06';
$dbPassword ='Group06f9597';
$dbName ='cgt456group06';

$conn = mysqli_connect($dbServername,$dbUsername ,$dbPassword,$dbName);
	//establish the connection
	
	if($conn->connect_error){
		die("Connection Failed:".$conn->connect_error);
	}
	
?>