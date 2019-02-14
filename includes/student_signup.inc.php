<?php

if(isset($_POST['student_submit'])){

    include_once 'dbh.inc.php';
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $userPwd = mysqli_real_escape_string($conn, $_POST['userPwd']);
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO student_login (student_name, student_password) VALUES 
    ('$userName','$hashedPwd');";

    mysqli_query($conn, $sql);
    header('Location: ../studentForm.php');
    exit();
}else{
    header('Location: ../index.php');
    exit();
}