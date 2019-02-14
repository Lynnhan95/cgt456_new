<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href="css/formstyles.css" type="text/css" rel="stylesheet" media="all" />
<meta http-equiv="Content-Type" content="text/html; UTF-8" />
<title>Form Page</title>
<style>
	table {
	  table-layout: fixed;
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 60%;
	}
	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 6px;
	}
	</style>
</head>
	
<body>
	
<div id="wrapper">
<div id="container">	
<div id="content">
<h2>Internship Report Form</h2>	

<div class="Form">
   <form action="upload_student.php" method="post">	   
	<div class="studentinfo">
	<label title="campus" for="campus">Campus </label>
	            <select name="campuses" id="campuses" required>
                    <option value="campus">West Lafayette</option>
                    <option value="campus">Purdue Northwest</option>
				</select>
	<p>Today's date: <input type="text" name="dateToday" required>
	</p>
	<p>Work Period of Internship - Start Date: <input type="text" name="dateWorkStart" required></p>
	<p>Work Period of Internship - End Date: <input type="text" name="dateWorkEnd" required></p>
	<p>Total Hours worked @ internships over 4 summers</p>
    <div class="semesterform">
	<p class="semester">1:<input style="width: 80%;" type="text" name="totalHour1" required> </p>
	<p class="semester">2:<input style="width: 80%;" type="text" name="totalHour2" required> </p>
	<p class="semester">3:<input style="width: 80%;" type="text" name="totalHour3" required> </p>
	<p class="semester">4:<input style="width: 80%;" type="text" name="totalHour4" required> </p>
	<p style="width:18%; float:left;">total:<input style="width: 70%;" type="text" name="totalHourSum" required> </p>
	</div>
	<br/>
	<p><b>Student Info:</b></p>
 		<p>Purdue ID number: <input type="text" name="PUID" required></p>
	   <p>Student Firstname: <input type="text" name="FN" required></p>
	   	<p>Student Middle: <input type="text" name="MN" required></p>
	   	<p>Student Lastname: <input type="text" name="LN" required></p>
    <p>Student Email: <input type="text" name="studentEmail" required></p>
	<p>Student Phone: <input type="text" name="studentPhone" required></p>
		
	<!-- change input type from input to select --> 
	<label title="campus" for="campus">Academic Advisor:</label>
			<select name="campuses" id="campuses" required>
				<option value="campus">TR Oneal</option>
				<option value="campus">Heather Mayorga</option>
				<option value="campus">Advisor 1</option>
				<option value="campus">Advisor 2</option>
			</select>
<!--	<p>Academic Advisor: <input type="text" name="studentAd"></p>-->
	</div>	
	
	   
	<div class="jobinfo">
	<p><b>Job Title</b></p>
	<p>Name of Company.<br/><input type="text" name="companyName" required></p>
	<p>Address of Home/Main Office.<br/> <input type="text" name="companyAdd" required></p>
	<p>Location of office or job site where you worked if it is different than main office<br/> <input type="text" name="workAdd" required></p>
	<p>Name of Supervisor—direct <br/><input type="text" name="supervisorName" required></p>
	<p>Supervisor Phone <br/><input type="text" name="supervisorPhone" required></p>
	<p>Supervisor Email <br/><input type="text" name="supervisorEmail" required></p>
	   <label title="workspace" for="workspace">Workspace </label><br/>
	            <select name="workspace" id="workspace" required>
                    <option value="workspace">Home</option>
                    <option value="workspace">Office</option>
					<option value="workspace">Both</option>
				</select>
<!--	<p>List 5 activities that you regularly performed during internship. <br/> <input type="text" name="activityList"></p>-->
	<p>
	<label for="activityList">List 5 activities that you regularly performed during internship.</label>
    <textarea id="activityList" name="activityList" placeholder="Write something.." required></textarea>
	</p>
	<p>
	<label for="activityEx">Give examples of activities.</label><br/>
    <textarea id="activityEx" name="activityEx" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Give examples of activities. <br/><input type="text" name="activityEx"></p>-->
<!--	<p>Did supervisor give you relevant work to accomplish- specify!<br/> <input type="text" name="relevantWork"></p>-->
	<p>
	<label for="relevantWork">Did supervisor give you relevant work to accomplish- specify!</label><br/>
    <textarea id="relevantWork" name="relevantWork" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Difficulties or problem areas encountered during internship.<br/> <input type="text" name="problemEncontered"></p>-->
	<p>
	<label for="problemEncontered">Difficulties or problem areas encountered during internship.</label><br/>
    <textarea id="problemEncontered" name="problemEncontered" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Is there anything you wanted to learn during internship that you were not able to? <input type="text" name="withToLearn"></p>-->
	<p>
	<label for="withToLearn">Is there anything you wanted to learn during internship that you were not able to?</label><br/>
    <textarea id="withToLearn" name="withToLearn" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Explain how work experience related to your major. <br/><input type="text" name="majorRelated"></p>-->
	<p>
	<label for="withToLearn">Explain how work experience related to your major. </label><br/>
    <textarea id="withToLearn" name="withToLearn" placeholder="Write something.." required></textarea>
	</p>

<!--	<p>Has this work experience changed your mind about which sector of CGT you might be most interested in pursuing?<br/> <input type="text" name="yourChange"></p>-->
	<p>
	<label for="withToLearn">Has this work experience changed your mind about which sector of CGT you might be most interested in pursuing? </label><br/>
    <textarea id="yourChange" name="yourChange" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Internship provided me with contacts which may lead to future employment.<br/> <input type="text" name="futureContacts"></p>-->
	<p>
	<label for="withToLearn">Internship provided me with contacts which may lead to future employment.</label><br/>
    <textarea id="futureContacts" name="futureContacts" placeholder="Write something.." required></textarea>
	</p>
	<p>Considering your overall experience—how would you rate this internship?</p>        
  	<input type="radio" name="overallRate" id="veryDis" value="veryDis" required>
		<label for="veryDis">Very Dissatisfied</label>
  	<input type="radio" name="overallRate" id="normDis" value="normDis" required>
		<label for="normDis">Dissatisfied</label>
  	<input type="radio" name="overallRate" id="neutral" value="neutral" required>
		<label for="neutral">Neutral</label>
  	<input type="radio" name="overallRate" id="satisfied" value="satisfied" required>
		<label for="satisfied">Satisfied</label>
  	<input type="radio" name="overallRate" id="verySatis" value="verySatis" required>
		<label for="verySatis">Very Satisfied</label>
	<br/>
	</div>
	   
	   
	   
	   
	   
	<div class="salary"> 
	<p><b>Salary/Hourly rate</b></p>
	<p>Were you paid? 
	<select name="ispaid" id="ispaid" required>
       	<option value="ispaid">Yes</option>
        <option value="ispaid">No</option>
	</select>
	</P>
	<p>If so, how much?
	<input type="text" name="sallary" required>
	</p>
	<p>Did you receive housing stipend?
	<select name="isHousingStipend" id="isHousingStipend" required>
       	<option value="isHousingStipend">Yes</option>
        <option value="isHousingStipend">No</option>
	</select>
	</p>
	<p>Did you receive any other financial assistance from the company for your internship? Please select all that apply</p>
	<table>
		<tr>			 			 	
			<th><input type="checkbox" name="finaAssist1" value="finaAssist1" id="FAC" ></th>
			<th>Per Diem Allowance</th>
	  	</tr>
		<tr>			 			 	
			<th><input type="checkbox" name="finaAssist2" value="finaAssist2" id="FAC" ></th>
			<th>Gas Reimbursement</th>
	  	</tr>
		<tr>			 			 	
			<th><input type="checkbox" name="finaAssist3" value="finaAssist3" id="FAC" ></th>
			<th>Company Vehicle</th>
	  	</tr>
		<tr>			 			 	
			<th><input type="checkbox" name="finaAssist4" value="finaAssist4" id="FAC" ></th>
			<th>Paid Airfare or travel to/from internship location</th>
	  	</tr>
		<tr>			 			 	
			<th><input type="checkbox" name="finaAssist5" value="finaAssist5" id="FAC" ></th>
			<th>Other</th>
	  	</tr>
	</table>
	</div> 
	<div class="submit">
	<!-- error session-->
	<input type="submit" name="submitBox" value="Submit">
	</div> 

	</form>
</div>
</div>
</div>
</div>

</body>
</html>