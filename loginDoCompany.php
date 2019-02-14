<?php
session_start();

include("includes/dbh.inc.php");
mysqli_select_db($conn);	
$userID = $_POST["usernameC"];
$passwd = $_POST["passwdC"];

$test = " SELECT * FROM student_info WHERE randomAccount = '".$userID."' AND randomAccountPwd= '".$passwd."'";

$result = mysqli_query($conn, $test);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['errorMessage'] = '';

	$_SESSION["ID"] = $userID;
	header("Location:formCompany.php");
	//head to the sigup error page
	
}
else{
	$_SESSION['errorMessage'] = 'Your account name and password do not match';
	header("Location:login-supervisor.php");
	//this is heading to the login error page
}
include("include/closeDBConn.php");
?>