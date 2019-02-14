<!-- <?php
	$servername= "goss.tech.purdue.edu";//server address
	$username="cgt456group06";
	$password="Group06f9597";//the super long code
	$dbname="cgt456group06";//these will change by what I name them

	$conn= new mysqli($servername, $username, $password, $dbname);
	//establish the connection
	if($conn->connect_error){
		die("Connection Failed:".$conn->connect_error);
	}

?> -->

<?php

$dbServername ='goss.tech.purdue.edu';
$dbUsername ='cgt456group06';
$dbPassword ='Group06f9597';
$dbName ='cgt456group06';

$conn = mysqli_connect($dbServername,$dbUsername ,$dbPassword,$dbName);

function debug_to_console( $data ) {
  $output = $data;
  if ( is_array( $output ) )
      $output = implode( ',', $output);

  echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
