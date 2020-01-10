<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
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
    <h3 class="text-center"> User</h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="userHandler.php" method="post">
                <label for=""><b>ID /Passport Number</b></label>
                <br>
                <input type="text" name="idPassNo" class="form-control" placeholder="*ID/Passport Number Here" required>
                <br>
                <label for=""><b>First Name</b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
                <br>
                <label for=""><b>Middle Name</b></label>
                <br>
                <input type="text" name="mName" class="form-control" placeholder="* Middle Name Here" required>
                <br>
                <label for=""><b>Last Name</b></label>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="* Last Name Here" required>
                <br>
                <label for=""><b>Username</b></label>
                <br>
                <input type="text" name="uName" class="form-control" placeholder="* Username Here" required>
                <br>
                <label for=""><b>Password</b></label>
                <br>
                <input type="password" name="passwd" class="form-control" placeholder="* Password Here" required>
                <br>
                <label for=""><b>User Group</b></label>
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
                    <button class="btn btn-success" type="submit" name="btn_add_new">Add New</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="searchStaffU.php" class="btn btn-primary">Update</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="searchStaffD.php" class="btn btn-danger">Delete</a>
                </div>
                <br>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>