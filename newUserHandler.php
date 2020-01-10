<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Success</title>
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
    <img src="images/techThree.jpeg" alt="Logo" width="300" height="200">
</div>
<hr>
<div class="heading">
    <h3 class="text-center">Registration Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","login");
    if (!$conn)
    {
        die("Connection Error : " . mysqli_connect_error());
    }
    //Remove SQL Injections
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $userName=mysqli_real_escape_string($conn,$_POST['uName']);
    $password=mysqli_real_escape_string($conn,$_POST['passwd']);
    $userGroup=mysqli_real_escape_string($conn,$_POST['uGroup']);
    //Write an SQL INSERT statement to post the data to the DB table users
    //Store this statement in $sql
    $sql="INSERT INTO `users`(`user_id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `user_group`) 
VALUES (null,'$firstName','$middleName','$lastName','$userName','$password','$userGroup')";
    //Execute the query in $sql above
    if ($conn->query($sql)==true){
        print "<p>User Registration Successful.</p>";
        print "<a href='logout.php' class='btn btn-primary'>Register New User</a>";
    }
    else{
        print "<p>User Registration Failed.</p>";
        print "<a href='logout.php' class='btn btn-danger'>Try Again</a>";
    }
    //Closing the connection in $conn
    mysqli_close($conn);
    ?>
</div>
</body>
</html>