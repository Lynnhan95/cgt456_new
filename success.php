<?php
	session_start()
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Information successfully insert</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
	<style>
		
		body{
			font-family: Comfortaa, Helvetica, sans-serif;
		}
		div.success{
			margin-top:10em;
			text-align:center;
			
		}
		button.goBack{
			display:inline-block;
			margin-top:2em;
			margin-bottom:4em;
			font-size: 1em;
			padding:10px 20px;
			background-color: #fff;
			border:1px solid rgba(0,0,0,0.3);
			border-radius:6px;
			font-family: Comfortaa, sans-serif;
			cursor: pointer;
		}
		button.goBack:hover{
			background:#F9CF6D;
			transition:all 0.15s linear ;
	
		}
		a{
			text-decoration:none;
		}
		a:hover{
			color:#fff;
		}
	</style>

<body>
	<div class="success">
		<h1>You have been successfully inserted into the database</h1>
		<h2>Please wait your advisor and company to verify your information</h2>
		<button class="goBack"><a href="index.php">Go back<a></button>
	</div>
	<?php
session_destroy();
?>
	</body>
</html>
