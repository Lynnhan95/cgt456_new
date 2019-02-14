<?php
session_start();
//include("usercheck.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; UTF-8" />

	<!----insert css style sheet here----->
<title>Student internship information review page</title>
</head>
<body>
<div class="header">


<h1>Internship Information of <?php echo($_SESSION['StudentFirstName']);?> <?php echo($_SESSION['StudentLastName']);?></h1>
</div>

<div class="StudentFormInformation">
<?php
  function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
  }
	include("openDBConn.php");
  $PUID = $_POST["SID"];
  $test = " SELECT * FROM student_info WHERE Q5 = '".$PUID."' ";
	$sql= "SELECT * FROM student_info WHERE Q5 = '".$PUID."'";
//$conn= new mysqli($servername, $username, $password, $dbname);

	$result=mysqli_query($conn, $sql);
  if(!$result){
    debug_to_console("testing");
  }
	?>
	<table style="border: 0px; width: 500px; padding: 0px; margin: 0px auto; border-spacing: 0px; " title="information from student">

		<thead>
		<tr>
			<th colspan="35"; style="font-weight: bold; background-color: #8381a8; text-align: center; text-decoration: underline;">Internship Information from Student</th>
			</tr>
			<tr>
				<th style="background-color: #8381a8; font-weight: bold;">Campus</th>
			<th style="background-color: #8381a8; font-weight: bold;">Submit Date</th>
				<th style="background-color: #8381a8; font-weight: bold;">Intership Start Date</th>
				<th style="background-color: #8381a8; font-weight: bold;">Intership End Date</th>
				<th style="background-color: #8381a8; font-weight: bold;">Total worked hours</th>
				<th style="background-color: #8381a8; font-weight: bold;">Work time first summer</th>
				<th style="background-color: #8381a8; font-weight: bold;">Work time Second summer</th>
				<th style="background-color: #8381a8; font-weight: bold;">Work time Third summer</th>
				<th style="background-color: #8381a8; font-weight: bold;">Work time Fourth summer</th>
				<th style="background-color: #8381a8; font-weight: bold;">Name of Company</th>
				<th style="background-color: #8381a8; font-weight: bold;">Address</th>
				<th style="background-color: #8381a8; font-weight: bold;">Supervisor Name</th>
				<th style="background-color: #8381a8; font-weight: bold;">Supervisor Phone</th>
				<th style="background-color: #8381a8; font-weight: bold;">Supervisor Email</th>
				<th style="background-color: #8381a8; font-weight: bold;">Workspace</th>
				<th style="background-color: #8381a8; font-weight: bold;">Activities</th>
				<th style="background-color: #8381a8; font-weight: bold;">Examples</th>
				<th style="background-color: #8381a8; font-weight: bold;">Work experience:Relevant Work accomplish?</th>
				<th style="background-color: #8381a8; font-weight: bold;">Work experience:difficulties or problems?</th>
				<th style="background-color: #8381a8; font-weight: bold;">Work experience:anything learnt</th>
				<th style="background-color: #8381a8; font-weight: bold;">Work experience:changed student?</th>
				<th style="background-color: #8381a8; font-weight: bold;">Work experience:provided student to fututre employment</th>
				<th style="background-color: #8381a8; font-weight: bold;">rate to internship</th>
				<th style="background-color: #8381a8; font-weight: bold;">Were paid?</th>
				<th style="background-color: #8381a8; font-weight: bold;">How much</th>
				<th style="background-color: #8381a8; font-weight: bold;">housing</th>
				<th style="background-color: #8381a8; font-weight: bold;">financial assistance from company</th>
	</tr>
		</thead>

		<tfoot>
		<tr>
			<td colspan="8"; style="text-align: center; font-style: italic; color: #e4ed84">Information was pulled from student form</td>
			</tr>
		</tfoot>

		<tbody>
		<?php
			if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result))
		{
		//check the variable name in the table to match them up
			?>
<tr>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["campus"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["submitDate"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q1"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q2"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q3"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q4"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q5"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q11"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q12"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q14"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q15"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q16"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q17"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q18"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q19"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q20"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q23"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["Q24"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["waspaid"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["howmuch"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["housing"])); ?></td>
	<td style="border-right: 1px solid #000000;"><?php echo(trim($row["AnyFinancialAssistance"])); ?></td>
			</tr>
		<?php
		}

	}
	else{
		echo("0  Result fould. This Student does not have any information saved currently");
	}
	?>
		</tbody>
	</table>
	</div>
	<div class="CompanyFormInformation">
		<?php  
	include("includes/openDBConn.php");
	$sql= "SELECT * FROM company_info WHERE PUID = '".$_SESSION["SID"]."'";
//$conn= new mysqli($servername, $username, $password, $dbname);

	$result=mysqli_query($conn, $sql);
	?>
	<table style="border: 0px; width: 500px; padding: 0px; margin: 0px auto; border-spacing: 0px; " title="information from student">
	
		<thead>
		<tr>
			<th colspan="19"; style="font-weight: bold; background-color: #8381a8; text-align: center; text-decoration: underline;">Internship Information from Student</th>
			</tr>
			<tr>
				<th style="background-color: #8381a8; font-weight: bold;">Type of CGT Industry</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: Behaviors</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: manner</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: copperates</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: interest in work</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: learn quickly</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: show initiative</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: work quality</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: responsibility</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: criticism</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: judgment</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: creativity</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: analyzes problems effectively</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: self reliant</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: communicates well</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: writes effectively</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: has a professioanl attitude</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: is punctual</th>
				<th style="background-color: #8381a8; font-weight: bold;">Student Point: use time effectively</th>
			
	</tr>
		</thead>
		
		<tfoot>
		<tr>
			<td colspan="21"; style="text-align: center; font-style: italic; color: #e4ed84">Information was pulled from company supervisor form</td>
			</tr>
		</tfoot>
		
		<tbody>
		<?php
			if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result))
		{
		//check the variable name in the table to match them up
			?>
<tr>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["CompanyType"])); ?></td>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentManner"])); ?></td>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentCopperte"])); ?></td>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentInterest"])); ?></td>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentLearn"])); ?></td>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentIntiative"])); ?></td>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentWorkQuality"])); ?></td>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentResponsibility"])); ?></td>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentCriticism"])); ?></td>
				<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentOrganizationalSkill"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentExperience"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentJudgment"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentCreativity"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentAnalyzesEffective"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentSelfReliant"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentCommunication"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentWrite"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentAttitude"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentApperance"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentPuctual"])); ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo(trim($row["StudentTimeEffective"])); ?></td>
			</tr>
		<?php
		}
	
	}	
	else{
		echo("0  Result fould. This Student does not have any information from company currently");
	}
	?>	
		</tbody>
	</table>
	</div>
	<div class="approvebox">
		<form action="approval.php" method="post">
			<input type="radio" name="approve" value="Approve">Approve
			<input type="radio" name="approve" value="Do Not Approve">Do Not Approve
			<a href="approval.php"><input type="submit" name="submitBox" value="Submit"></a>
		</form>
	</div>
	<?php
	include("includes/closeDBConn.php");
	?>
