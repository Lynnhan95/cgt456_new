<?php

if(isset($_POST['supervisor_submit'])){

    include_once 'dbh.inc.php';
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $userPwd = mysqli_real_escape_string($conn, $_POST['userPwd']);
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO supervisor_login (supervisor_username, supervisor_password) VALUES 
    ('$userName','$hashedPwd');";

    mysqli_query($conn, $sql);
    header('Location: ../supervisor-page.php');
    exit();
}else{
    header('Location: ../index.php');
    exit();
}