<?php
session_start();
debug_to_console("tes4t");
include("includes/openDBConn.php");

//$name is what I put in the db table
//post[] is what the user saw and put their information
//get data insert from here
$campus = addslashes($_POST['campuses']);
$date = addslashes($_POST['dateToday']);
$startwork = addslashes($_POST['dateWorkStart']);
//work period of intership-start date
$endwork= addslashes($_POST['dateWorkEnd']);
$summer1= addslashes($_POST['totalHour1']);
$summer2= addslashes($_POST['totalHour2']);
$summer3= addslashes($_POST['totalHour3']);
$summer4= addslashes($_POST['totalHour4']);
$summerTotal= addslashes($_POST['totalHourSum']);
//student information starts here
$PUID = addslashes($_POST['PUID']);
$firstname = addslashes($_POST['FN']);
$lastname = addslashes($_POST['LN']);
$middlename = addslashes($_POST['MN']);
$email= addslashes($_POST['studentEmail']);
$phone= addslashes($_POST['studentPhone']);
$advisor= addslashes($_POST['studentAD']);
$workspace= addslashes($_POST['workspace']);
$activity= addslashes($_POST['activityList']);
$activityEg= addslashes($_POST['activityEx']);
$Rwork= addslashes($_POST['relevantWork']);
$problemE= addslashes($_POST['problemEncontered']);
$wantLearn= addslashes($_POST['withToLearn']);
$majorR= addslashes($_POST['majorRelated']);
$yourChange = addslashes($_POST['yourChange']);
$futureContacts = addslashes($_POST['futureContacts']);
$overallrate = addslashes($_POST['overallRate']); //the radio part information
$workaddition = addslashes($_POST['workAdd']);
$Sname = addslashes($_POST['supervisorName']);
$Sphone = addslashes($_POST['supervisorPhone']);
$Semail = addslashes($_POST['supervisorEmail']);
//$ = addslashes($_POST['']);
//backup to more inforamtion



//if not filling a *marker information, redirect to the insert page
// if(($startwork == "")||($endwork == "")||($summer1 == "")||($summer2 == "")||($summer3 == "")||($summer4 == "")||($summerTotal == "")||($email == "")||($phone == "")||($advisor == "")||($workspace == "")||($activity == "")||($activityEg == "")||($Rwork == "")||($problemE == "")||($wantLearn == "")||($majorR == "")||($yourChange == "")||($futureContacts == "")||($overallrate == "")||($Sname =="")||($Sphone =="")||($Semail == "")){
// 	$_SESSION["errorMessage"] = "YOU MUST ENTER INFORMATION FOR ALL * MARKS BOXES";
// 	debug_to_console("test");
// 	header("studentForm.php");
// 	exit;
// }
// else if(!is_numeric($phone)){
// 	$_SESSION["errorMessage"] = "YOU MUST ENTER A NUMBER FOR YOUR PHONE NUMBER!";
// 	header("studentForm.php");
// 	exit;
// }else if(!is_numeric($PUID)){
// 	$_SESSION["errorMessage"] = "YOU MUST ENTER A NUMBER FOR YOUR PURDUE ID NUMBER!";
// 	header("studentForm.php");
// 	exit;
// }

// else{
// 	$_SESSION["errorMessage"] = "";
// }

// if(empty($middlename)){
// 	$middlename = "N/A";

// }






$sql="SELECT * FROM FormStudent WHERE username = '".$PUID."'" ;
// this code is for checking if this user enter exactly the same thing with the existing informaion
$result = mysql_query($sql);
//checking if there is the same thing
if($result->num_rows > 0){
	$_SESSION["errorMessage"]="YOU ALREADY HAVE THIS INFORMANTION STORED. NO ACTION REQUIRED NOW";
	header("Location:index.php");
	exit;
}
else{
	$_SESSION["errorMessage"]="";

}
debug_to_console("tes4t");
$sql="INSERT INTO FormStudent (Campus, ModifyDate, StartTime, EndTime, Summer1, Summer2, Summer3, Summer4, Total, PurdueID, FirstName, MiddleName, LastName, Email, Phone, Advisor, WorkSpace, ActivityList, RelevantWork, ProblemEncontered, WantToLearn, MajorRelated, Changes, FutureContacts, OverallRates, Addtion, SupervisorName, SupervisorPhone, SupervisorEmail) VALUES ('".$campus."', '".$date."', '".$startwork."', '".$endwork."', '".$summer1."', '".$summer2."', '".$summer3."', '".$summer4."', '".$summerTotal."', '".$PUID."', '".$firstname."', '".$middlename."', '".$lastname."', '".$email."', '".$phone."', '".$advisor."', '".$workspace."', '".$activity."', '".$activityEg."', '".$Rwork."', '".$problemE."', '".$wantLearn."', '".$majorR."', '".$yourChange."', '".$futureContacts."', '".$overallrate."', '".$workaddition."', '".$Sname."', '".$Sphone."', '".$Semail."')";

//echo $sql;


$result=mysql_query($sql);


// include("includes/closeDBConn.php");

header("Location:success.php");
exit;

?>
