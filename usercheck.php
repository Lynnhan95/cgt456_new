<?php
session_start();
if(empty($_SESSION["ID"])){
$_SESSION["errorMessage"] = "You have to login first to see your information saved in database!!";
header("Location:index.php");
}

?>