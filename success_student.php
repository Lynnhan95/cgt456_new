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
<title>display student data</title>
</head>

<body>
<div id="wrapper">
<div id="container">	
<div id="content">
	<h2>You have been successfully inserted into the database</h2>
	<h4>Please wait your advisor and company to verify your information</h4>
	<h4>Here's the your information form:</h4>
	<ul class="list">
        <li> <span> Campus: <?php echo($_SESSION["Campus"]); ?> </span> </li>
        <li> <span> DateToday: <?php echo($_SESSION["DateToday"]); ?> </span> </li>
        <li> <span> DateWorkStart: <?php echo($_SESSION["DateWorkStart"]); ?> </span> </li>
        <li> <span> DateWorkEnd: <?php echo($_SESSION["DateWorkEnd"]); ?> </span> </li>
        <li> <span> TotalWorkHour1: <?php echo($_SESSION["TotalWorkHour1"]); ?> </span> </li>
        <li> <span> TotalWorkHour2: <?php echo($_SESSION["TotalWorkHour2"]); ?> </span> </li>
        <li> <span> TotalWorkHour3: <?php echo($_SESSION["TotalWorkHour3"]); ?> </span> </li>
        <li> <span> TotalWorkHour4: <?php echo($_SESSION["TotalWorkHour4"]); ?> </span> </li>
        <li> <span> TotalWorkHour: <?php echo($_SESSION["TotalWorkHour"]); ?> </span> </li>
		<li> <span> PUID: <?php echo($_SESSION["PUID"]); ?> </span> </li>
		<li> <span> Student First Name: <?php echo($_SESSION["StudentFirstName"]); ?> </span> </li>
		<li> <span> Student Last Name: <?php echo($_SESSION["StudentLastName"]); ?> </span> </li>
		<li> <span> Student Middle Name: <?php echo($_SESSION["StudentMiddleName"]); ?> </span> </li>
		<li> <span> Student Email: <?php echo($_SESSION["StudentEmail"]); ?> </span> </li>
		<li> <span> Student Phone: <?php echo($_SESSION["StudentPhone"]); ?> </span> </li>
		<li> <span> Student Advisor: <?php echo($_SESSION["StudentAdvisor"]); ?> </span> </li>
		<li> <span> WorkSpace: <?php echo($_SESSION["WorkSpace"]); ?> </span> </li>
		<li> <span> Activity List: <?php echo($_SESSION["ActivityList"]); ?> </span> </li>
		<li> <span> Activity Ex: <?php echo($_SESSION["ActivityEx"]); ?> </span> </li>
		<li> <span> Relevant Work: <?php echo($_SESSION["RelevantWork"]); ?> </span> </li>
		<li> <span> Problem Encontered: <?php echo($_SESSION["ProblemEncontered"]); ?> </span> </li>
		<li> <span> With To Learn: <?php echo($_SESSION["WithToLearn"]); ?> </span> </li>
		<li> <span> Major Related: <?php echo($_SESSION["MajorRelated"]); ?> </span> </li>
		<li> <span> Your Change: <?php echo($_SESSION["YourChange"]); ?> </span> </li>
		<li> <span> Future Contacts: <?php echo($_SESSION["FutureContacts"]); ?> </span> </li>
		<li> <span> Overall Rate: <?php echo($_SESSION["OverallRate"]); ?> </span> </li>
		<li> <span> Work Addition: <?php echo($_SESSION["WorkAddition"]); ?> </span> </li>
		<li> <span> Supervisor Name: <?php echo($_SESSION["SupervisorName"]); ?> </span> </li>
		<li> <span> Supervisor Email: <?php echo($_SESSION["SupervisorEmail"]); ?> </span> </li>
		<li> <span> Supervisor Phone: <?php echo($_SESSION["SupervisorPhone"]); ?> </span> </li>
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