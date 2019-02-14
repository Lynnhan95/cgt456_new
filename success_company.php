<?php
session_start();
include("includes/usercheck.php");
include("includes/openDBConn.php");

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; UTF-8" />
<link href="css/successstyles.css" type="text/css" rel="stylesheet" media="all" />
<title>display company data</title>
</head>

<body>
<div id="wrapper">
<div id="container">	
<div id="content">
	<h2>You have been successfully inserted into the database</h2>
	<h4>Here's the your information form:</h4>
	<ul class="list">
        <li> <span> Student First Name: <?php echo($_SESSION["StudentFirstName"]); ?> </span> </li>
        <li> <span> Student Middle Name: <?php echo($_SESSION["StudentMiddleName"]); ?> </span> </li>
        <li> <span> Student Last Name: <?php echo($_SESSION["StudentLastName"]); ?> </span> </li>
        <li> <span> Company Name: <?php echo($_SESSION["CompanyName"]); ?> </span> </li>
        <li> <span> Company Address: <?php echo($_SESSION["CompanyAddress"]); ?> </span> </li>
        <li> <span> Company Contract: <?php echo($_SESSION["CompanyContact"]); ?> </span> </li>
        <li> <span> Company Type: <?php echo($_SESSION["CompanyType"]); ?> </span> </li>
        <li> <span> Student Manner: <?php echo($_SESSION["StudentManner"]); ?> </span> </li>
        <li> <span> Student Interest: <?php echo($_SESSION["StudentInterest"]); ?> </span> </li>
		<li> <span> Student Learn: <?php echo($_SESSION["StudentLearn"]); ?> </span> </li>
		<li> <span> Student Intiative: <?php echo($_SESSION["StudentIntiative"]); ?> </span> </li>
		<li> <span> Student Work Quality: <?php echo($_SESSION["StudentWorkQuality"]); ?> </span> </li>
		<li> <span> Student Responsbility: <?php echo($_SESSION["StudentResponsibility"]); ?> </span> </li>
		<li> <span> Student Criticism: <?php echo($_SESSION["StudentCriticism"]); ?> </span> </li>
		<li> <span> Student Organizational Skill: <?php echo($_SESSION["StudentOrganizationalSkill"]); ?> </span> </li>
		<li> <span> Student Experience: <?php echo($_SESSION["StudentExperience"]); ?> </span> </li>
		<li> <span> Student Judgment: <?php echo($_SESSION["StudentJudgment"]); ?> </span> </li>
		<li> <span> Student Creativity: <?php echo($_SESSION["StudentCreativity"]); ?> </span> </li>
		<li> <span> Student Analyzes Effective: <?php echo($_SESSION["StudentAnalyzesEffective"]); ?> </span> </li>
		<li> <span> Student Communication: <?php echo($_SESSION["StudentCommunication"]); ?> </span> </li>
		<li> <span> Student Write: <?php echo($_SESSION["StudentWrite"]); ?> </span> </li>
		<li> <span> Student Attitude: <?php echo($_SESSION["StudentAttitude"]); ?> </span> </li>
		<li> <span> Student Apperance: <?php echo($_SESSION["StudentApperance"]); ?> </span> </li>
		<li> <span> Student Puctual: <?php echo($_SESSION["StudentPuctual"]); ?> </span> </li>
		<li> <span> Student Time Effective: <?php echo($_SESSION["StudentTimeEffective"]); ?> </span> </li>
    </ul>
	
	<?php
		session_destroy();
	include("includes/closeDBConn.php");
	?>
   <div class="submit">
   <input type="submit" name="submitBox" value="Submit">
   <input type="submit" name="submitBox" value="Back">
   </div> 
	</div>
	</div>
	</div>
	</body>
</html>