<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
<?php include 'header.php';?>
</head>

<body>
	<div class="container">
		<div class="backgroundImage"></div>
		<div class="logintitle forTitle">Welcome to Purdue Student Internship System</div>
		<div class="logoContainter"><image src="images/purdue_logo.png" class="logo"></div>
		<div class="buttons">
			<div class="button"><a href="login-student.php">Student Login</a></div>
			<div class="button"><a href="login-supervisor.php">Supervisor Login</a></div>
			<div class="button"><a href="login-advisors.php">Advisor Login</a></div>

		</div>
	</div>
</body>
</html>
