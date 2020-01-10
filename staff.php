<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff</title>
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
    <h3 class="text-center"><b>Staff Details</b></h3>
</div>
<div class="container">
    <form action="newstaffHandler.php" method="post">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <label for=""><b>ID Passport/Number:</b></label>
                <br>
                <input type="text" name="idPassNo" class="form-control" placeholder="*ID/Passport Number Here" required>
                <br>
                <label for=""><b>First Name:</b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="*First Name Here" required>
                <br>
                <label for=""><b>Middle Name:</b></label>
                <br>
                <input type="text" name="mName" class="form-control" placeholder="*Middle Name Here" required>
                <br>
                <label for=""><b>Last Name:</b></label>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="*Last Name Here" required>
                <br>
                <label for=""><b>Gender:</b></label>
                <br>
                <input type="radio" name="gender" value="Male" required>&nbsp; Male
                <input type="radio" name="gender" value="Female" required>&nbsp;Female
               <br>
                <label for=""><b>Position:</b></label>
                <br>
                <input type="text" name="position" class="form-control" placeholder="* Position Here" required>
                <br>
               <label for=""><b>Department:</b></label>
               <br>
                <select name="dept" id="" class="form-control" required>
                <option value="Systems Administrator">Systems Administrator</option>
                <option value="Administrator">Administrator</option>
                <option value="Front Office">Front Office</option>
                <option value="Accounts">Accounts</option>
                <option value="Management">Management</option>
                </select>
               <br>
            <hr>
            <div class="buttons">
                <button class="btn btn-success" type="submit" name="btn_add_new">Add New</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="searchStaffU.php" class="btn btn-primary">Update</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="searchStaffD.php" class="btn btn-danger">Delete</a>
            </div>
    </form>
    <div class="col-sm-3"></div>
</div>
</body>
</html>
