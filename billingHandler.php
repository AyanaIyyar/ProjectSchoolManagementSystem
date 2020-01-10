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
            $invoice=mysqli_real_escape_string($conn,$_POST['invoice_id']);
            $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
            $othName=mysqli_real_escape_string($conn,$_POST['oName']);
            $course=mysqli_real_escape_string($conn,$_POST['course']);
            $tuition=mysqli_real_escape_string($conn,$_POST['tuition_fee']);
            $regFee=mysqli_real_escape_string($conn,$_POST['reg_fee']);
            $accommFee=mysqli_real_escape_string($conn,$_POST['acm_fee']);
            $libFee=mysqli_real_escape_string($conn,$_POST['lib_fee']);
            $totalA=mysqli_real_escape_string($conn,$_POST['total_A']);
            //Post data from the variables above to the DB
            $sql="INSERT INTO `billing`(`invoice_number`, `invoice_id`, `invoice_date`, `first_name`, `other_name`, `course`, `tuition_fee`, `Registration_fee`, `accommodation_fee`, `library_fee`, `total_amount`) 
VALUES (null,'$invoice',null,'$firstName','$othName','$course','$tuition','$regFee','$accommFee','$libFee','$totalA')";
            //Execute the query in sql
    if ($conn->query($sql)==true){
        print "<p>Billing Added Successfully</p>";
        print "<a href='Billing.php' class='btn btn-info'>New Billing</a>";
    }
    else{
        print "<p>Billing Not Added</p>";
        print "<a href='Billing.php' class='btn btn-danger'>Try Again</a>";
    }

    //Close Connection
            mysqli_close($conn);

    ?>
</div>
</body>
</html>
