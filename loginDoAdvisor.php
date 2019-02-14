<?php
session_start();

include("includes/dbh.inc.php");
mysqli_select_db($conn);
$userID = $_POST["username"];
$passwd = $_POST["userPwd"];

$test = " SELECT * FROM advisor_login WHERE advisor_username = '".$userID."' AND advisor_password= '".$passwd."'";

$result = mysqli_query($conn, $test);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['errorMessage'] = '';

	$_SESSION["ID"] = $userID;
	header("Location:index.php");
	//head to the sigup error page

}
else{
	$_SESSION['errorMessage'] = 'Your account name and password do not match';
	header("Location:advisor/advisor-page.php");
	//this is heading to the login error page
}
include("include/closeDBConn.php");
?>
