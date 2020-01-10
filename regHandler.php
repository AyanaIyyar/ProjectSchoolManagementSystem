<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
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
<div class="heading">
    <h3 class="text-center"><b>Success</b></h3>
</div>
<hr>
<div class="container">
    <?php
        //Establishing a connection
    $conn=mysqli_connect("localhost","root","","project");
    if (!$conn){
        die("Connection Error ". mysqli_connect_error());
    }
            //Removing sql injections

            $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
            $otherName=mysqli_real_escape_string($conn,$_POST['oName']);
            $gender=mysqli_real_escape_string($conn,$_POST['gender']);
            $dateOfBirth=mysqli_real_escape_string($conn,$_POST['dob']);
            $postalAdd=mysqli_real_escape_string($conn,$_POST['postal_add']);
            $telephone=mysqli_real_escape_string($conn,$_POST['tel_number']);
            $email=mysqli_real_escape_string($conn,$_POST['emailAdd']);
            $nok=mysqli_real_escape_string($conn,$_POST['nok']);
            $nokTel=mysqli_real_escape_string($conn,$_POST['nokTelNumber']);
            $course=mysqli_real_escape_string($conn,$_POST['course']);
            $kcseM=mysqli_real_escape_string($conn,$_POST['kcse_mean']);
            $eduLevel=mysqli_real_escape_string($conn,$_POST['education_level']);
            $schl=mysqli_real_escape_string($conn,$_POST['schl_inst']);
            $yearF=mysqli_real_escape_string($conn,$_POST['year_from']);
            $yearT=mysqli_real_escape_string($conn,$_POST['year_to']);

            //Post data from the variables above to the DB
            $sql="INSERT INTO `registration`(`student_admission_number`, `registration_date`, `first_name`, `other_names`, `gender`, `Date_of_Birth`, `postal_address`, `telephone_number`, `email`, `nok`, `nok_tel`, `course`, `kcse_mean`, `education_level`, `highschool_attended`, `year_from`, `year_to`, `university_attended`) 
VALUES (null,null,'$firstName','$otherName','$gender','$dateOfBirth','$postalAdd','$telephone','$email','$nok','$course','$',value-13],[value-14],[value-15],[value-16],[value-17],[value-18])";

            //Execute the query in sql
    if ($conn->query($sql)==true){
        print "<p>Registration Completed Successfully</p>";
        print "<a href='Registration.php' class='btn btn-info'>New Registration</a>";
    }
    else{
        print "<p>Registration Not Completed </p>";
        print "<a href='Registration.php' class='btn btn-danger'>Try Again</a>";
    }

    //Close Connection
            mysqli_close($conn);

    ?>
</div>
</body>
</html>
