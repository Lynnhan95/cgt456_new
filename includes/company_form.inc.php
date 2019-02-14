<?php 
session_start();
if(isset($_POST['company_submit'])){
    include_once 'dbh.inc.php';

    $StudentFirstName = mysqli_real_escape_string($conn, $_POST['StudentFirstName']);
    $StudentMiddleName = mysqli_real_escape_string($conn, $_POST['StudentMiddleName']);
    $StudentLastName = mysqli_real_escape_string($conn, $_POST['StudentLastName']);
    $companyName= mysqli_real_escape_string($conn, $_POST['companyName']);
    $CompanyAddress= mysqli_real_escape_string($conn, $_POST['companyAdd']);
    $CompanyContact= mysqli_real_escape_string($conn, $_POST['companyContact']);
    
    //select checkbox
    $CompanyType= mysqli_real_escape_string($conn, $_POST['compType']);

    $StudentManner= mysqli_real_escape_string($conn, $_POST['spRate1']);
    $StudentCopperte= mysqli_real_escape_string($conn, $_POST['spRate2']);
    $StudentInterest= mysqli_real_escape_string($conn, $_POST['spRate3']);
    $StudentLearn= mysqli_real_escape_string($conn, $_POST['spRate4']);
    $StudentIntiative= mysqli_real_escape_string($conn, $_POST['spRate5']);
    $StudentWorkQuality= mysqli_real_escape_string($conn, $_POST['spRate6']);
    $StudentResponsibility= mysqli_real_escape_string($conn, $_POST['spRate7']);
    $StudentCriticism= mysqli_real_escape_string($conn, $_POST['spRate8']);
    $StudentOrganizationalSkill= mysqli_real_escape_string($conn, $_POST['spRate9']);
    $StudentExperience= mysqli_real_escape_string($conn, $_POST['spRate10']);
    $StudentJudgment= mysqli_real_escape_string($conn, $_POST['spRate11']);
    $StudentCreativity= mysqli_real_escape_string($conn, $_POST['spRate12']);
    $StudentAnalyzesEffective= mysqli_real_escape_string($conn, $_POST['spRate13']);
    $StudentSelfReliant= mysqli_real_escape_string($conn, $_POST['spRate14']);
    $StudentCommunication= mysqli_real_escape_string($conn, $_POST['spRate15']);
    $StudentWrite= mysqli_real_escape_string($conn, $_POST['spRate16']);
    $StudentAttitude= mysqli_real_escape_string($conn, $_POST['spRate17']);
    $StudentApperance= mysqli_real_escape_string($conn, $_POST['spRate18']);
    $StudentPuctual= mysqli_real_escape_string($conn, $_POST['spRate19']);
    $StudentTimeEffective= mysqli_real_escape_string($conn, $_POST['spRate20']);
    $PUID= mysqli_real_escape_string($conn, $_SESSION['PUID']);
    debug_to_console($_SESSION['PUID']);

    $sql = "INSERT INTO company_info (StudentFirstName,StudentMiddleName,StudentLastName,CompanyName,
    CompanyAddress,CompanyContact,CompanyType,StudentManner,StudentCopperte,StudentInterest,StudentLearn,
    StudentIntiative,StudentWorkQuality,StudentResponsibility,StudentCriticism,StudentOrganizationalSkill,
    StudentExperience,StudentJudgment,StudentCreativity,StudentAnalyzesEffective,StudentSelfReliant,
    StudentCommunication,StudentWrite,StudentAttitude,StudentApperance,StudentPuctual,StudentTimeEffective,
    PUID
    )
    VALUES
    ('$StudentFirstName',
    '$StudentMiddleName ',
    '$StudentLastName',
    '$companyName',
    '$CompanyAddress',
    '$CompanyContact',
    '$CompanyType',
    '$StudentManner',
    '$StudentCopperte',
    '$StudentInterest',
    '$StudentLearn',
    '$StudentIntiative',
    '$StudentWorkQuality',
    '$StudentResponsibility',
    '$StudentCriticism',
    '$StudentOrganizationalSkill',
    '$StudentExperience',
    '$StudentJudgment',
    '$StudentCreativity',
    '$StudentAnalyzesEffective',
    '$StudentSelfReliant',
    '$StudentCommunication',
    '$StudentWrite',
    '$StudentAttitude',
    '$StudentApperance',
    '$StudentPuctual',
    '$StudentTimeEffective',
    '$PUID'

    );";
    $queryResult = mysqli_query($conn, $sql);
    header('Location: ../success.php');
    exit();
}else{
    Header('Location: ../index.php');
    exit();
}