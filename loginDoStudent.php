<?php
session_start();
include("includes/openDBConn.php");
mysqli_select_db($conn);	
$userID = $_POST["usernameS"];
$passwd = $_POST["passwdS"];

$test = " SELECT * FROM StudentList WHERE Username = '".$userID."' AND Password = '".$passwd."'";

$result = mysqli_query($conn, $test);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION["ID"] = $userID;
	header("Location:form_student.php");
	//head to the sigup error page
	
}
else{
	header("Location:errorMessage.php");
	//this is heading to the login error page
}
include("include/closeDBConn.php");
?>