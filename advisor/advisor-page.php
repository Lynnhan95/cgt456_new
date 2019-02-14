<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='../css/advisor.css' rel="stylesheet">
    <title>Document</title>

</head>
<body>
<div id="wrapper">
<div id="container">
<div id="content">
    <button class="home"><a href="index.php">Log out</a></button>
    <h1 class="title">Advisor: advisor1</h1>

	<div class="header">
		<h1>Welcome Home, Admin</h1>
		<p>Search For student ID:</p>
	</div>

	<form action="show-student.php" method="post">
		<p><input type="text" name="SID"><a href="show-student.php"><input type="submit" name="submitBox" value="Search"></a></p>
	</form>

	<div id="searchResult" style="display: none">
	</div>

	<script>
		function doSearch() {
  			var x = document.getElementById("searchResult");
    		x.style.display = "block";
		}
	</script>

    </div>
    </div>
    </div>
    </div>
   <?php
	// $sql= "SELECT * FROM student_info WHERE Q5 = '".$studentID."'";
	// $result=mysqli_query($conn, $sql);
	// if(mysqli_num_rows($result) >0){
	// 	$IsStudentInfo = "Yes";
  //
	// }else{
	// 	$IsStudentInfo = "No";
	// }

	?>
</body>
</html>
