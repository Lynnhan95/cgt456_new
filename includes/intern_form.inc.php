<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(isset($_POST['intern_submit'])){

    include_once 'dbh.inc.php';
    foreach($_POST['campuses'] as $select){
        // echo 'you have select ' .$select;
        $S1 = mysqli_real_escape_string($conn, $_POST['campuses']);
    }
    foreach($_POST['advisors[]'] as $select){
        // echo 'you have select ' .$select;
        $S2 = mysqli_real_escape_string($conn, $_POST['advisors']);
    }
    foreach($_POST['workspaces[]'] as $select){
        // echo 'you have select ' .$select;
        $S3 = mysqli_real_escape_string($conn, $_POST['workspaces']);
    }
    foreach($_POST['ispaids[]'] as $select){
        // echo 'you have select ' .$select;
        $S4 = mysqli_real_escape_string($conn, $_POST['ispaids']);
    }
    foreach($_POST['isHousingStipends[]'] as $select){
        // echo 'you have select ' .$select;
        $S5 = mysqli_real_escape_string($conn, $_POST['ispaids']);
    }

    $Q1 = mysqli_real_escape_string($conn, $_POST['Q-1']);
    $Q2 = mysqli_real_escape_string($conn, $_POST['Q-2']);
    $Q3 = mysqli_real_escape_string($conn, $_POST['Q-3']);
    $Q41 = mysqli_real_escape_string($conn, $_POST['Q-4-1']);
    $Q42 = mysqli_real_escape_string($conn, $_POST['Q-4-2']);
    $Q43 = mysqli_real_escape_string($conn, $_POST['Q-4-3']);
    $Q44 = mysqli_real_escape_string($conn, $_POST['Q-4-4']);
    $Q45 = mysqli_real_escape_string($conn, $_POST['Q-4-5']);
    $Q5 = mysqli_real_escape_string($conn, $_POST['Q-5']);
    $Q6 = mysqli_real_escape_string($conn, $_POST['Q-6']);
    $Q7 = mysqli_real_escape_string($conn, $_POST['Q-7']);
    $Q8 = mysqli_real_escape_string($conn, $_POST['Q-8']);
    $Q9 = mysqli_real_escape_string($conn, $_POST['Q-9']);
    $Q10 = mysqli_real_escape_string($conn, $_POST['Q-10']);
    $Q11 = mysqli_real_escape_string($conn, $_POST['Q-11']);
    $Q12 = mysqli_real_escape_string($conn, $_POST['Q-12']);
    $Q13 = mysqli_real_escape_string($conn, $_POST['Q-13']);
    $Q14 = mysqli_real_escape_string($conn, $_POST['Q-14']);
    $Q15 = mysqli_real_escape_string($conn, $_POST['Q-15']);
    $Q16 = mysqli_real_escape_string($conn, $_POST['Q-16']);
    $Q17 = mysqli_real_escape_string($conn, $_POST['Q-17']);
    $Q18 = mysqli_real_escape_string($conn, $_POST['Q-18']);
    $Q19 = mysqli_real_escape_string($conn, $_POST['Q-19']);
    $Q20 = mysqli_real_escape_string($conn, $_POST['Q-20']);
    $Q21 = mysqli_real_escape_string($conn, $_POST['Q-21']);
    $Q22 = mysqli_real_escape_string($conn, $_POST['Q-22']);
    $Q23 = mysqli_real_escape_string($conn, $_POST['Q-23']);
    $Q24 = mysqli_real_escape_string($conn, $_POST['Q-24']);
    $S1 = mysqli_real_escape_string($conn, $_POST['campuses']);
    $S2 = mysqli_real_escape_string($conn, $_POST['advisors']);
    $S3 = mysqli_real_escape_string($conn, $_POST['workspaces']);
    $S4 = mysqli_real_escape_string($conn, $_POST['ispaids']);
    $S5 = mysqli_real_escape_string($conn, $_POST['isHousingStipends']);

    // doing the email stuff

    // generate random AccountName and Password
    $randomAccountName = str_replace(' ','',$Q11).generateRandomString();
    $randomAccountPwd = generateRandomString(10);

    $to = $Q16; //To whom you are sending the mail.

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                     // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'cgt456group6@gmail.com';                 // SMTP username
        $mail->Password = 'wersdfxcv';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('cgt456group6@gmail.com', 'CGT456');
        // $mail->addAddress($to, 'Fred Chen');     // Add a recipient
        $mail->addAddress($to);               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'CGT456 Testing';
        $mail->Body    = '
            Dear '.$Q11.':<br /><br />
            Please help filled up the performance form for this student<br /><br />
            Here is the <a href="http://cgtweb2.tech.purdue.edu/courses/cgt456/han536/login-supervisor.php">link</a><br /><br />
            Please login with: <br />
            Account Name: '.$randomAccountName.'<br />
            Password: '.$randomAccountPwd.'<br /><br /><br />
            Thank you very much<br />
        ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // header('Location: ../success.php');
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }


    $sql = "INSERT INTO student_info (Q1,Q2,Q3,Q41,Q42,Q43,Q44,Q45,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15,Q16,Q17,Q18,Q19,Q20,Q21,Q22,Q23,Q24,S1,S2,S3,S4,S5,randomAccount,randomAccountPwd) VALUES
    ('$Q1',
    '$Q2',
    '$Q3',
    '$Q41',
    '$Q42',
    '$Q43',
    '$Q44',
    '$Q45',
    '$Q5',
    '$Q6',
    '$Q7',
    '$Q8',
    '$Q9',
    '$Q10',
    '$Q11',
    '$Q12',
    '$Q13',
    '$Q14',
    '$Q15',
    '$Q16',
    '$Q17',
    '$Q18',
    '$Q19',
    '$Q20',
    '$Q21',
    '$Q22',
    '$Q23',
    '$Q24',
    '$S1',
    '$S2',
    '$S3',
    '$S4',
    '$S5',
    '$randomAccountName',
    '$randomAccountPwd'
    );";
   
    $queryResult = mysqli_query($conn, $sql);
    debug_to_console($queryResult);
    header('Location: ../success.php');
    debug_to_console('tst');
    exit();
}else{
    header('Location: ../index.php');
    exit();
}
