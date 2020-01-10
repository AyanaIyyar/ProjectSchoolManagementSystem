<?php
$conn=mysqli_connect("localhost","root","","project");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Remove SQL Injection
$idPass=mysqli_real_escape_string($conn,$_POST['idPassNo']);
$sql="DELETE FROM `users` WHERE idPass_number='$idPass'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>


        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Delete User </title>
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
            <h3 class="text-center"><u>Delete User</u></h3>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="UserDelete.php" method="post">
                        <label for=""><b>User ID:</b></label>
                        <br>
                        <input type="text" name="user_id" class="form-control" placeholder="*User ID Here" required value="<?php print $row['user_id'];?>">
                        <br>
                        <label for=""><b>ID/Passport Number:</b></label>
                        <br>
                        <input type="text" name="idPassNo" class="form-control" placeholder="*Your ID Number Here" required value="<?php print $row['idPass_number'];?>">
                        <br>
                        <label for=""><b>First Name : </b></label>
                        <br>
                        <input type="text" name="fName" class="form-control" placeholder="*First Name Here" required value="<?php print $row['first_name'];?>">
                        <br>
                        <label for=""><b>Middle Name : </b></label>
                        <br>
                        <input type="text" name="mName" class="form-control" placeholder="*Middle Name Here" required value="<?php print $row['middle_name'];?>">
                        <br>
                        <label for=""><b>Last Name : </b></label>
                        <br>
                        <input type="text" name="lName" class="form-control" placeholder="*Last Name Here" required value="<?php print $row['last_name'];?>">
                        <br>
                        <label for=""><b>User Name:</b></label>
                        <br>
                        <input type="text" name="uName" class="form-control" placeholder="*User Name Here" required value="<?php print $row['user_name'];?>">
                        <br>
                        <label for=""><b>Password:</b></label>
                        <br>
                        <input type="password" name="passwd" class="form-control" placeholder="*Enter Password Here" required value="<?php print $row['password'];?>">
                        <br>
                        <label for=""><b>User Group:</b></label>
                        <br>
                        <input type="text" name="uGroup" class="form-control" placeholder="*User Group Here" required value="<?php print $row['user_group'];?>">
                        <br>
                        <hr>
                                  <div class="buttons">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        </body>
        </html>


        <?php
    }
}
mysqli_close($conn);
?>