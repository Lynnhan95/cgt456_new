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
