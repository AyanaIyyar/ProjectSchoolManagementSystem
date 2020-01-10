<?php
session_start();

if(isset($_POST['submit'])){
    //include 'db_connect.php';
    $conn = mysqli_connect("localhost","root","","logins");
    if (!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($conn,$_POST['uName']);
    $password = mysqli_real_escape_string($conn,$_POST['passwd']);
    $usergroup = mysqli_real_escape_string($conn,$_POST['uGroup']);

    $qry=mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password' AND user_group='$usergroup'");
    $row = mysqli_fetch_assoc($qry);
    $active = $row['active'];

    $count = mysqli_num_rows($qry);

    // If result matched $username,$password and $usertype, table row must be 1 row

    if($count == 1) {

        if(!empty($username) && !empty($password) && $usergroup=='Systems Administrator'){
            header("LOCATION:sysadmin.php");
        }

        else if(!empty($username) && !empty($password) && $usergroup=='Administrator'){
            header("LOCATION:admin.php");
        }

        else if(!empty($username) && !empty($password) && $usergroup=='Accounts'){
            header("LOCATION:accounts.php");
        }

        else if(!empty($username) && !empty($password) && $usergroup=='Front Office'){
            header("LOCATION:reception.php");
        }

    }else {
        header("LOCATION:login_error.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    <img src="images/techThree.jpeg" alt="Logo" width="150" height="150">
</div>
<hr>
<div class="heading">
    <h3 class="text-center">Login</h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="#" method="post">
                <label for=""><b>Username : </b></label>
                <br>
                <input type="text" name="uName" class="form-control" placeholder="* Username Here" required>
                <br>
                <label for=""><b>Password : </b></label>
                <br>
                <input type="password" name="passwd" class="form-control" placeholder="* Password Here" required>
                <br>
                <label for=""><b>User Group : </b></label>
                <br>
                <select name="uGroup" id="" class="form-control" required>
                    <option value="">=====Select User Group=====</option>
                    <option value="Systems Administrator">Systems Administrator</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Front Office">Front Office</option>
                </select>
                <br>
                <div class="buttons">
                    <button class="btn btn-primary" type="submit" name="submit">Login</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="users.php" class="btn btn-info">Register</a>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>