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
    $enquiryId=mysqli_real_escape_string($conn,$_POST['enquiry_id']);
    $enquiryNumber=mysqli_real_escape_string($conn,$_POST['enquiry_no']);
    $enquiryDate=mysqli_real_escape_string($conn,$_POST['enquiry_date']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $othName=mysqli_real_escape_string($conn,$_POST['oName']);
    $telephone=mysqli_real_escape_string($conn,$_POST['tel_Number']);
    $email=mysqli_real_escape_string($conn,$_POST['emailAdd']);
    $course=mysqli_real_escape_string($conn,$_POST['course']);
    $knabus=mysqli_real_escape_string($conn,$_POST['knw_abus']);
    $comments=mysqli_real_escape_string($conn,$_POST['comments']);
    $sql="UPDATE `enquire` SET `enquiry_number`='$enquiryNumber',`enquiry_date`='$enquiryDate',`first_name`='$firstName',`other_names`='$othName',`tel_number`='$telephone',`email`='$email',`course`='$course',`knw_abtus`='$knabus',`comments`='$comments' WHERE `enquiry_id`='$enquiryId',";
    //Execute query in sql
    if ($conn->query($sql)==true){
        print "<p class='text-justify'>Enquiries updated successfully</p>";
        print "<a href='enquiries.php' class='btn btn-primary'>New Person</a>";
    }
    else{
        print "<p class='text-justify'>Enquiries not updated</p>";
        print "<a href='enquiries.php' class='btn btn-danger'>Try Again</a>";
    }
//Close DB connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
