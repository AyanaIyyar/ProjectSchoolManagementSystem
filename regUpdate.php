<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Success</title>
    <link rel="icon" href="images/techThree.jpeg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/techThree.jpeg" alt="techThree.jpeg" width="300" height="200">
</div>
<hr>
<div class="heading">
    <h3 class="text-center"><b>Update Success</b></h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","project");
    if (!$conn){
        die("Connection Error : ". mysqli_connect_error());
    }
        //Remove SQL Injection
    $studentAdmin=mysqli_real_escape_string($conn,$_POST['student_admin']);
    $studentId=mysqli_real_escape_string($conn,$_POST['student_id']);
    $regDate=mysqli_real_escape_string($conn,$_POST['reg_date']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $othName=mysqli_real_escape_string($conn,$_POST['oName']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $dob=mysqli_real_escape_string($conn,$_POST['dob']);
    $postalAdd=mysqli_real_escape_string($conn,$_POST['postal_add']);
    $telephone=mysqli_real_escape_string($conn,$_POST['tel_Number']);
    $email=mysqli_real_escape_string($conn,$_POST['emailAdd']);
    $nok=mysqli_real_escape_string($conn,$_POST['nok']);
    $nokTel=mysqli_real_escape_string($conn,$_POST['nokTelNumber']);
    $course=mysqli_real_escape_string($conn,$_POST['course']);
    $kcseM=mysqli_real_escape_string($conn,$_POST['kcse_mean']);
    $eduLevel=mysqli_real_escape_string($conn,$_POST['education_level']);
    $schl=mysqli_real_escape_string($conn,$_POST['schl_inst']);
    $yearF=mysqli_real_escape_string($conn,$_POST['year_from']);
    $yearT=mysqli_real_escape_string($conn,$_POST['year_to']);
    $sql="UPDATE `registration` SET `studentadmin_number`='$studentAdmin',`registration_date`='$regDate',`first_name`='$firstName',`other_names`='$othName',`gender`='$gender',`dob`='$dob',`postal_address`='$postalAdd',`telephone_number`='$telephone',`email`='$email',`nok`='$nok',`nok_tel`='$nokTel',`course`='$course',`ksce_mean`='$kcseM',`education_level`='$eduLevel',`school/instituition attended`='$schl',`Year_from`='$yearF',`Year_to`='$yearT' WHERE `student_id`='$studentId'";
    //Execute query in sql
    if ($conn->query($sql)==true){
        print "<p class='text-justify'>Enquiries updated successfully</p>";
        print "<a href='Registration.php' class='btn btn-primary'>New Person</a>";
    }
    else{
        print "<p class='text-justify'>Enquiries not updated</p>";
        print "<a href='Registration.php' class='btn btn-danger'>Try Again</a>";
    }
//Close DB connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
