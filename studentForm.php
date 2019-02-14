<?php
session_start()

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href="css/formstyles.css" type="text/css" rel="stylesheet" media="all" />
<meta http-equiv="Content-Type" content="text/html; UTF-8" />
<title>Form Page</title>
<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
   <form action="includes/intern_form.inc.php" method="post">
	<div class="studentinfo">
	<label title="campus" for="campus">Campus </label>
	            <select name="campuses[]" id="campuses" required>
                    <option value="West Lafayette">West Lafayette</option>
                    <option value="Purdue Northwest">Purdue Northwest</option>
				</select>
	<p>Today's date: <input type="text" name="Q-1" required>
	</p>
	<p>Work Period of Internship - Start Date: <input type="text" name="Q-2" required></p>
	<p>Work Period of Internship - End Date: <input type="text" name="Q-3" required></p>
	<p>Total Hours worked @ internships over 4 summers</p>
    <div class="semesterform">
	<p class="semester">1:<input style="width: 80%;" type="text" name="Q-4-1" required> </p>
	<p class="semester">2:<input style="width: 80%;" type="text" name="Q-4-2" required> </p>
	<p class="semester">3:<input style="width: 80%;" type="text" name="Q-4-3" required> </p>
	<p class="semester">4:<input style="width: 80%;" type="text" name="Q-4-4" required> </p>
	<p style="width:18%; float:left;">total:<input style="width: 70%;" type="text" name="Q-4-5" required> </p>
	</div>
	<br/>
	<p><b>Student Info:</b></p>
 		<p>Purdue ID number: <input type="text" name="Q-5" required></p>
	   <p>Student Firstname: <input type="text" name="Q-6" required></p>
	   	<p>Student Middle: <input type="text" name="Q-7" required></p>
	   	<p>Student Lastname: <input type="text" name="Q-8" required></p>
    <p>Student Email: <input type="text" name="Q-9" required></p>
	<p>Student Phone: <input type="text" name="Q-10" required></p>

	<!-- change input type from input to select -->
	<label title="campus" for="advisors">Academic Advisor:</label>
			<select name="advisors" id="campuses">
				<option value="TR Oneal">TR Oneal</option>
				<option value="Heather Mayorga">Heather Mayorga</option>
				<option value="Advisor 1">Advisor 1</option>
				<option value="Advisor 2">Advisor 2</option>
			</select>
<!--	<p>Academic Advisor: <input type="text" name="studentAd"></p>-->
	</div>

	<div class="jobinfo">
	<p><b>Job Title</b></p>
	<p>Name of Company.<br/><input type="text" name="Q-11" required></p>
	<p>Address of Home/Main Office.<br/> <input type="text" name="Q-12" required></p>
	<p>Location of office or job site where you worked if it is different than main office<br/> <input type="text" name="Q-13" required></p>
	<p>Name of Supervisor—direct <br/><input type="text" name="Q-14" required></p>
	<p>Supervisor Phone <br/><input type="text" name="Q-15" required></p>
	<p>Supervisor Email <br/><input type="text" name="Q-16" required></p>
	   <label title="workspace" for="workspace">Workspace </label><br/>
	            <select name="workspaces" id="workspace">
                    <option value="Home">Home</option>
                    <option value="Office">Office</option>
										<option value="Both">Both</option>
				</select>
<!--	<p>List 5 activities that you regularly performed during internship. <br/> <input type="text" name="activityList"></p>-->
	<p>
	<label for="activityList">List 5 activities that you regularly performed during internship.</label>
    <textarea id="activityList" name="Q-17" placeholder="Write something.." required></textarea>
	</p>
	<p>
	<label for="activityEx">Give examples of activities.</label><br/>
    <textarea id="activityEx" name="Q-18" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Give examples of activities. <br/><input type="text" name="activityEx"></p>-->
<!--	<p>Did supervisor give you relevant work to accomplish- specify!<br/> <input type="text" name="relevantWork"></p>-->
	<p>
	<label for="relevantWork">Did supervisor give you relevant work to accomplish- specify!</label><br/>
    <textarea id="relevantWork" name="Q-19" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Difficulties or problem areas encountered during internship.<br/> <input type="text" name="problemEncontered"></p>-->
	<p>
	<label for="problemEncontered">Difficulties or problem areas encountered during internship.</label><br/>
    <textarea id="problemEncontered" name="Q-20" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Is there anything you wanted to learn during internship that you were not able to? <input type="text" name="withToLearn"></p>-->
	<p>
	<label for="withToLearn">Is there anything you wanted to learn during internship that you were not able to?</label><br/>
    <textarea id="withToLearn" name="Q-21" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Explain how work experience related to your major. <br/><input type="text" name="majorRelated"></p>-->
	<p>
	<label for="withToLearn">Explain how work experience related to your major. </label><br/>
    <textarea id="withToLearn" name="Q-22" placeholder="Write something.." required></textarea>
	</p>

<!--	<p>Has this work experience changed your mind about which sector of CGT you might be most interested in pursuing?<br/> <input type="text" name="yourChange"></p>-->
	<p>
	<label for="withToLearn">Has this work experience changed your mind about which sector of CGT you might be most interested in pursuing? </label><br/>
    <textarea id="yourChange" name="Q-23" placeholder="Write something.." required></textarea>
	</p>
<!--	<p>Internship provided me with contacts which may lead to future employment.<br/> <input type="text" name="futureContacts"></p>-->
	<p>
	<label for="withToLearn">Internship provided me with contacts which may lead to future employment.</label><br/>
    <textarea id="futureContacts" name="Q-24" placeholder="Write something.." required></textarea>
	</p>
	<p>Considering your overall experience—how would you rate this internship?</p>
  	<input type="radio" name="overallRate" id="veryDis" value="veryDis">
		<label for="veryDis">Very Dissatisfied</label>
  	<input type="radio" name="overallRate" id="normDis" value="normDis">
		<label for="normDis">Dissatisfied</label>
  	<input type="radio" name="overallRate" id="neutral" value="neutral">
		<label for="neutral">Neutral</label>
  	<input type="radio" name="overallRate" id="satisfied" value="satisfied">
		<label for="satisfied">Satisfied</label>
  	<input type="radio" name="overallRate" id="verySatis" value="verySatis">
		<label for="verySatis">Very Satisfied</label>
	<br/>
	</div>


	<div class="salary">
	<p><b>Salary/Hourly rate</b></p>
	<p>Were you paid?
	<select name="ispaids" id="ispaid" required>
       	<option value="Yes">Yes</option>
        <option value="No">No</option>
	</select>
	</P>
	<p>If so, how much?
	<input type="text" name="Q-25" required>
	</p>
	<p>Did you receive housing stipend?
	<select name="isHousingStipends" id="isHousingStipend" required>
       	<option value="Yes">Yes</option>
        <option value="No">No</option>
	</select>
	</p>
	<p>Did you receive any other financial assistance from the company for your internship? Please select all that apply</p>
	<table>
		<tr>
			<th><input type="checkbox" name="finaAssist1" value="finaAssist1" id="FAC"></th>
			<th>Per Diem Allowance</th>
	  	</tr>
		<tr>
			<th><input type="checkbox" name="finaAssist2" value="finaAssist2" id="FAC"></th>
			<th>Gas Reimbursement</th>
	  	</tr>
		<tr>
			<th><input type="checkbox" name="finaAssist3" value="finaAssist3" id="FAC"></th>
			<th>Company Vehicle</th>
	  	</tr>
		<tr>
			<th><input type="checkbox" name="finaAssist4" value="finaAssist4" id="FAC"></th>
			<th>Paid Airfare or travel to/from internship location</th>
	  	</tr>
		<tr>
			<th><input type="checkbox" name="finaAssist5" value="finaAssist5" id="FAC"></th>
			<th>Other</th>
	  	</tr>
	</table>
	</div>
	<div class="submit-file">
	<label class="upload-label" for="">Upload CV<br><input type="file" name="upload_file" accept=".pdf,.doc,.docx,image/png, image/jpeg" placeholder="whhah" ></label>
	<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload CV</button>

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" accept=".pdf,.doc,.docx,image/png, image/jpeg" />
    <div class="drag-text">
      <h3>Drag or Drop files here</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
</div>

	<!-- error session-->
	<div class="submit">
	<input type="submit" name="intern_submit" value="Submit">
	</div>
	</form>
</div>
</div>
</div>
</div>
<script>
	function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();
      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

</script>
</body>
</html>
