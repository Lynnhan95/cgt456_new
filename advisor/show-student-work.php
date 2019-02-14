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
			<th colspan="35"; style="font-weight: bold; background-color: #8381a8; text-align: center; text-decoration: underline;">Internship Information from Student</th>
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