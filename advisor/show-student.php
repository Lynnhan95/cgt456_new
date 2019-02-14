<?php
session_start();
//include("usercheck.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link href="../css/show.css" type="text/css" rel="stylesheet" media="all" />
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
	<table class="advisorTable" title="information from student">

		<thead>
		<tr>
			<th colspan="22"; style="text-align: center;">Internship Information from Student</th>
			</tr>
			<tr>
				<th  >Campus</th>
			    <th  >Submit Date</th>
				<th  >Intership Start Date</th>
				<th  >Intership End Date</th>
				<th  >Total worked hours</th>
				<th  >Work time first summer</th>
				<th  >Work time Second summer</th>
				<th  >Work time Third summer</th>
				<th  >Work time Fourth summer</th>
				<th  >Name of Company</th>
				<th  >Address</th>
				<th  >Supervisor Name</th>
				<th  >Supervisor Phone</th>
				<th  >Supervisor Email</th>
				<th  >Workspace</th>
				<th  >Activities</th>
				<th  >Examples</th>
				<th  >Work experience:Relevant Work accomplish?</th>
				<th  >Work experience:difficulties or problems?</th>
				<th  >Work experience:anything learnt</th>
				<th  >Work experience:changed student?</th>
				<th  >Work experience:provided student to fututre employment</th>
<!--
				<th  >rate to internship</th>
				<th  >Were paid?</th>
				<th  >How much</th>
				<th  >housing</th>
				<th  >financial assistance from company</th>
-->
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
				    <td  ><?php echo(trim($row["campus"])); ?></td>
					<td  ><?php echo(trim($row["submitDate"])); ?></td>
					<td  ><?php echo(trim($row["Q1"])); ?></td>
					<td  ><?php echo(trim($row["Q2"])); ?></td>
					<td  ><?php echo(trim($row["Q3"])); ?></td>
					
					<td  ><?php echo(trim($row["Q41"])); ?></td>
					<td  ><?php echo(trim($row["Q42"])); ?></td>
					<td  ><?php echo(trim($row["Q43"])); ?></td>
					<td  ><?php echo(trim($row["Q44"])); ?></td>
					<td  ><?php echo(trim($row["Q45"])); ?></td>
					
					
					<td  ><?php echo(trim($row["Q5"])); ?></td>
					<td  ><?php echo(trim($row["Q11"])); ?></td>
					<td  ><?php echo(trim($row["Q12"])); ?></td>
					<td  ><?php echo(trim($row["Q14"])); ?></td>
					<td  ><?php echo(trim($row["Q15"])); ?></td>
					<td  ><?php echo(trim($row["Q16"])); ?></td>
					<td  ><?php echo(trim($row["Q17"])); ?></td>
					<td  ><?php echo(trim($row["Q18"])); ?></td>
					<td  ><?php echo(trim($row["Q19"])); ?></td>
					<td  ><?php echo(trim($row["Q20"])); ?></td>
					<td  ><?php echo(trim($row["Q23"])); ?></td>
					<td  ><?php echo(trim($row["Q24"])); ?></td>
<!--
-->
	<td  ><?php echo(trim($row["AnyFinancialAssistance"])); ?></td>
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
	$sql= "SELECT * FROM company_info WHERE Q5 = '".$_SESSION["SID"]."'";
//$conn= new mysqli($servername, $username, $password, $dbname);

	$result=mysqli_query($conn, $sql);
	?>
	<table class="advisorTable" title="information from student">

		<thead>
		<tr>
			<th colspan="34"; style="font-weight: bold;  text-align: center;">Internship Information from Student</th>
			</tr>
			<tr>
				<th  >Type of CGT Industry</th>
				<th  >Student Point: Behaviors</th>
				<th  >Student Point: manner</th>
				<th  >Student Point: copperates</th>
				<th  >Student Point: interest in work</th>
				<th  >Student Point: learn quickly</th>
				<th  >Student Point: show initiative</th>
				<th  >Student Point: work quality</th>
				<th  >Student Point: responsibility</th>
				<th  >Student Point: criticism</th>
				<th  >Student Point: judgment</th>
				<th  >Student Point: creativity</th>
				<th  >Student Point: analyzes problems effectively</th>
				<th  >Student Point: self reliant</th>
				<th  >Student Point: communicates well</th>
				<th  >Student Point: writes effectively</th>
				<th  >Student Point: has a professioanl attitude</th>
				<th  >Student Point: is punctual</th>
				<th  >Student Point: use time effectively</th>

	</tr>
		</thead>

		<tfoot>
		<tr>
			<td colspan="8"; style="text-align: center; font-style: italic; color: #e4ed84">Information was pulled from company supervisor form</td>
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
			<input id="radio1" type="radio" name="approve" value="Approve" >Approve
			<input id="radio2" type="radio" name="approve" value="Do Not Approve">Do Not Approve
			<a href="approval.php"><input type="submit" name="submitBox" value="Submit"></a>
		</form>
	</div>
	<?php
	include("includes/closeDBConn.php");
	?>
