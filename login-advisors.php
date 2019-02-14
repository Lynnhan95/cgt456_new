<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; UTF-8" />
<link href="css/styles.css" type="text/css" rel="stylesheet" media="all" />	
<title>login-advisors</title>
<?php include 'header.php';?>
    </head>
 <div class="loginBox">
	<!-- <img src="../../CGT356/Project2.2/images/Ulogo.png"  class="user"> -->
	 
<form action="loginDoAdvisor.php" method="post">
	<h2 class="logintitle">Advisor, Please Login</h2>
	 <h4 class="formlabel">Username</h4>
	<input class="input-res" type="text" name="userName" required>
	<h4 class="formlabel">Password</h4>
	<input class="input-res" type="password" name="userPwd" placeholder='' required><br>
	<button class="submitBtn" id="company-submit" name="advisor_submit">Log in</button>
	<br>
	<!-- <a href="login-Student.php"><p class="formlabel">Student? Login HERE</p></a> -->
</form>	
	</div>
	<div class = "errormessage">
	<?php echo $_SESSION["errorMessage"] ?>
	</div>
	<body>
   
</body>
</html>