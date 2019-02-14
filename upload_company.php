<?php
session_start();
include("includes/openDBConn.php");
//$name is what I put in the db table
//post[] is what the user saw and put their information
//get data insert from here
$Sfn = addslashes($_POST['SFN']);
$Smd = addslashes($_POST['SMN']);
$Sln = addslashes($_POST['SLN']);
$CN = addslashes($_POST['companyName']);
$CAdd = addslashes($_POST['companyAdd']);
$CCT = addslashes($_POST['companyContact']);
$industry = addslashes($_POST['typeI']);
$manner = addslashes($_POST['manner']);
$cop = addslashes($_POST['cooperate']);
$interest = addslashes($_POST['interest']);
$LQ = addslashes($_POST['learnQ']);
$initialtive = addslashes($_POST['initialtive']);
$HQ = addslashes($_POST['HQwork']);
$RES = addslashes($_POST['respon']);
$criticism = addslashes($_POST['criticism']);
$DOS = addslashes($_POST['DOS']);
$DTK = addslashes($_POST['DTK']);
$JUD = addslashes($_POST['JUD']);
$DCO = addslashes($_POST['DCO']);
$APE = addslashes($_POST['APE']);
$SR = addslashes($_POST['SR']);
$CW = addslashes($_POST['CW']);
$WE = addslashes($_POST['WE']);
$PA = addslashes($_POST['PA']);
$GPA = addslashes($_POST['GPA']);
$PUN = addslashes($_POST['PUN']);
$IE = addslashes($_POST['IE']);

//$ = addslashes($_POST['']);
//backup to more inforamtion
	
	
	
	
//if not filling a *marker information, redirect to the insert page
if(($initialtive == "")||($interest == "")||($manner == "")||($cop == "")||($LQ == "")||($HQ == "")||($RES == "")||($criticism == "")||($DOS == "")||($DTK == "")||($JUD == "")||($DCO == "")||($APE == "")||($SR == "")||($CW == "")||($WE == "")||($PA == "")||($GPA == "")||($PUN == "")||($IE == "")){
	$_SESSION["errorMessage"] = "PLEASE FILL ALL THE EVALUATION FOR OUR STUDENTS.";
	header("form_company.php");
	exit;
}
else if(($Sfn == "")||($Sln = "")){
	$_SESSION["errorMessage"] = "PLEASE ENTER STUDENT'S NAME";
	header("form_company.php");
	exit;
	
}else if(($industry == "")||($CAdd== "")||($CN == "")||($CCT == "")){
	$_SESSION["errorMessage"] = "PLEASE FILL ALL THE COMPANY INFORMATION THAT WE REQUIRED.";
	header("form_company.php");
	exit;
}
else{
	$_SESSION["errorMessage"] = "";
}


if(empty($middlename)){
	$middlename = "N/A";
	
} 

include("includes/openDBConn.php");

$sql="SELECT * FROM FormStudent WHERE StudentFirstName = '".$Sfn."' AND StudentMiddleName = '".$Smd."' AND StudentLastName = '".$Sln."'" ;
// this code is for checking if this user enter exactly the same thing with the existing informaion
$result = mysql_query($sql);
//checking if there is the same thing
if($result->num_rows > 0){
	$_SESSION["errorMessage"]="YOU ALREADY HAVE RATED THIS STUDENT, NO ACTION REQUIRED RIGHTNOW";
	header("Location:index.php");
	exit;
}
else{
	$_SESSION["errorMessage"]="";
	
}

$sql="INSERT INTO FormCompany (StudentFirstName, StudentMiddleName, StudentLastName, CompanyName, CompanyAddress, CompanyContact, CompanyType, StudentManner, StudentCopperte, StudentInterest, StudentLearn, StudentIntiative, StudentWorkQuality, StudentResponsibility, StudentCriticism, StudentOrganizationalSkill, StudentExperience, StudentJudgment, StudentCreativity, StudentAnalyzesEffective, StudentSelfReliant, StudentCommunication, StudentWrite, StudentAttitude, StudentApperance, StudentPuctual, StudentTimeEffective) VALUES ('".$Sfn."', '".$Smd."', '".$Sln."', '".$CN."', '".$CAdd."', '".$CCT."', '".$industry."', '".$manner."', '".$cop."', '".$interest."', '".$LQ."', '".$initialtive."', '".$HQ."', '".$RES."', '".$criticism."', '".$DOS."', '".$DTK."', '".$JUD."', '".$DCO."', '".$APE."', '".$SR."', '".$CW."', '".$WE."', '".$PA."', '".$GPA."', '".$PUN."', '".$IE."')";

//echo $sql;

$result=mysql_query($sql);
include("includes/closeDBConn.php");

header("Location:success.php");
exit;

?>