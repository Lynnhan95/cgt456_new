<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<?php
		session_start();
		include("includes/openDBConn.php");
		$puid = mysqli_real_escape_string($conn, $_SESSION["SID"]);
    	$approve = mysqli_real_escape_string($conn, $_POST['approve']);
		$sql = "INSERT INTO report_Approve (puid, approve) VALUES ('$puid', '$approve');";
		mysqli_query($conn, $sql);
		header('Location: ../success.php');
	?>
<body>
</body>
</html>