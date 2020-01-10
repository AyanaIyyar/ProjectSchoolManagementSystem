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
    if (isset($_POST['btn_add_new'])){
    $conn=mysqli_connect("localhost","root","","project");
    if (!$conn){
        die("Connection Error : ". mysqli_connect_error());
    }
        //Remove SQL Injection
    $receiptNumber=mysqli_real_escape_string($conn,$_POST['receipt_no']);
    $receipt=mysqli_real_escape_string($conn,$_POST['receipt_id']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $othName=mysqli_real_escape_string($conn,$_POST['oName']);
    $course=mysqli_real_escape_string($conn,$_POST['course']);
    $tuition=mysqli_real_escape_string($conn,$_POST['tuition_fee']);
    $regFee=mysqli_real_escape_string($conn,$_POST['reg_fee']);
    $accommFee=mysqli_real_escape_string($conn,$_POST['acm_fee']);
    $libFee=mysqli_real_escape_string($conn,$_POST['lib_fee']);
    $totalA=mysqli_real_escape_string($conn,$_POST['total_A']);
    $amountP=mysqli_real_escape_string($conn,$_POST['amountP']);
    $sql="UPDATE `receipt` SET `receipt_number`=null,`receipt_date`=null,`first_name`='$firstName',`other_name`='$othName',`course`='$course',`tuition_fee`='$tuition',`Registration_fee`='$regFee',`accommodation_fee`='$accommFee',`library_fee`='$libFee',`total_amount`='$totalA',`amount_paid`='$amountP' WHERE `receipt_id`='$receipt',";
    $add = mysqli_query($conn,$sql);
    //Execute query in sql
    if ($add){
        print "<p class='text-justify'>Receipt(s) updated successfully</p>";
        print "<a href='Receipt.php' class='btn btn-primary'>New Invoice</a>";
    }
    else{
        print "<p class='text-justify'>Receipt(s) not updated</p>";
        print "<a href='Receipt.php' class='btn btn-danger'>Try Again</a>";

    }
//Close DB connection
    mysqli_close($conn);
    }
    ?>
</div>
</body>
</html>
