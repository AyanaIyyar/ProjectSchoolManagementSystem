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
            $enquiryId=mysqli_real_escape_string($conn,$_POST['enquiry_id']);
            $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
            $othName=mysqli_real_escape_string($conn,$_POST['oName']);
            $telephone=mysqli_real_escape_string($conn,$_POST['tel_Number']);
            $email=mysqli_real_escape_string($conn,$_POST['emailAdd']);
            $course=mysqli_real_escape_string($conn,$_POST['course']);
            $knabus=mysqli_real_escape_string($conn,$_POST['knw_abus']);
            $comments=mysqli_real_escape_string($conn,$_POST['comments']);

            //Post data from the variables above to the DB
            $sql="INSERT INTO `enquire`(`enquiry_id`, `enquiry_number`, `enquiry_date`, `first_name`, `other_names`, `tel_number`, `email`, `course`, `knw_abtus`, `comments`)
 VALUES ('$enquiryId',null ,null ,'$firstName','$othName','$telephone','$email','$course','$knabus','$comments')";
            //Execute the query in sql
    if ($conn->query($sql)==true){
        print "<p>New Enquiry Added Successfully</p>";
        print "<a href='enquiries.php' class='btn btn-info'>New Enquiry</a>";
    }
    else{
        print "<p>Enquiry Not Added</p>";
        print "<a href='enquiries.php' class='btn btn-danger'>Try Again</a>";
    }

    //Close Connection
            mysqli_close($conn);

    ?>
</div>
</body>
</html>
