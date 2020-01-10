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
            die("Connection Error " . mysqli_connect_error());
        }
        $idPass = mysqli_real_escape_string($conn,$_POST['idPassNo']);
        $firstName = mysqli_real_escape_string($conn,$_POST['fName']);
        $middleName = mysqli_real_escape_string($conn,$_POST['mName']);
        $lastName = mysqli_real_escape_string($conn,$_POST['lName']);
        $userName=mysqli_real_escape_string($conn,$_POST['uName']);
        $password=mysqli_real_escape_string($conn,$_POST['passwd']);
        $userGroup=mysqli_real_escape_string($conn,$_POST['uGroup']);
        //post data from the variables above to the DB
        $sql = "INSERT INTO `users`(`user_id`, `idPass_Number`, `first_name`, `middle_name`, `last_name`, `user_name`, `password`, `user_group`) 
VALUES (null,'$idPass','$firstName','$middleName','$lastName','$userName','$password','$userGroup')";

        //Execute in SQL
        if ($conn->query($sql)==true) {
            print "<p>New User Added Successfully</p>";
            print "<a href='Newusers.php' class='btn btn-info'>New User</a>";
        } else {
            print "<p>User Not Added</p>";
            print "<a href='Newusers.php' class='btn btn-danger'>Try Again</a>";

    }
     //Close Connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
