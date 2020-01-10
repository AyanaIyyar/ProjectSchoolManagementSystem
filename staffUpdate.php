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
    $staffID=mysqli_real_escape_string($conn,$_POST['staffID']);
    $idPass=mysqli_real_escape_string($conn,$_POST['idPassNo']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $position=mysqli_real_escape_string($conn,$_POST['position']);
    $department=mysqli_real_escape_string($conn,$_POST['dept']);
    $joinDate=mysqli_real_escape_string($conn,$_POST['joinDate']);
    $sql="UPDATE `staff_table` SET `staff_id`='$staffID',`first_name`='$firstName',`middle_name`='$middleName',`last_name`='$lastName',`gender`='$gender',`position`='$position',`department`='$department',`join_date`='$joinDate' WHERE `idPass_Number`='$idPass',";
    //Execute query in sql
    if ($conn->query($sql)==true){
        print "<p class='text-justify'> staff details updated successfully</p>";
        print "<a href='staff.php' class='btn btn-primary'>New Person</a>";
    }
    else{
        print "<p class='text-justify'> staff details not updated</p>";
        print "<a href='staff.php' class='btn btn-danger'>Try Again</a>";
    }
//Close DB connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
