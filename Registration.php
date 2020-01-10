<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
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
    <h3 class="text-center"><b>Registration</b></h3>
</div>
<div class="container">
    <form action="regHandler.php" method="post">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
               <label for=""><b>Student ID Number:</b></label>
               <br>
               <input type="text" name="student_id" class="form-control" placeholder="*Your ID Number Here" required>
               <br>
                <label for=""><b>First Name:</b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="*Your First Name Here" required>
                <br>
                <label for=""><b>Other Names:</b></label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="*Your Other Names Here" required>
                <br>
                <label for=""><b>Gender:</b></label>
                <br>
                <input type="radio" name="gender" value="Male" required>&nbsp; Male
                <input type="radio" name="gender" value="Female" required>&nbsp;Female
                <br>
               <label for=""><b>Date of Birth:</b></label>
               <br>
               <input type="date" name="dob" class="form-control" required>
               <br>
               <label for=""><b>Postal Address:</b></label>
               <br>
               <input type="text" name="postal_add" class="form-control" placeholder="*Postal Address Here" required>
               <br>
               <label for=""><b>Telephone Number:</b></label>
               <br>
               <input type="text" name="tel_number" class="form-control" placeholder="*Your Telephone Number Here" required>
               <br>
               <label for=""><b>Email Address:</b></label>
               <br>
               <input type="email" name="emailAdd" class="form-control"placeholder="*Your Email Address Here" required>
               <br>
               <label for=""><b>Next of Kin(NOK)</b></label>
               <br>
               <input type="text" name="nok" class="form-control" placeholder="*next of kin here" required>
               <br>
               <label for=""><b>NOK Telephone Number</b></label>
               <br>
               <input type="text" name="nokTelNumber" class="form-control" placeholder="*Next of kin telephone number" required>
               <br>
               <label for=""><b>Course:</b></label>
               <br>
               <select name="course" id="" class="form-control" required>
                   <option value="">======Select Course=====</option>
                   <option value="Concepts of MIT">Concepts of MIT</option>
                   <option value="HTML 5/CSS">HTML 5/CSS</option>
                   <option value="Bootstrap/CSS">Bootstrap/CSS</option>
                   <option value="PHP">PHP</option>
                   <option value="Java">Java</option>
                   <option value="Android">Android</option>
               </select>
               <br>
               <label for=""><b>K.C.S.E Mean:</b></label>
               <br>
               <select name="kcse_mean" id="" class="form-control" required>
                   <option value="">=====Select Grade====</option>
                   <option value="A">A</option>
                   <option value="A-">A-</option>
                   <option value="B">B+</option>
                   <option value="B">B</option>
                   <option value="B-">B-</option>
                   <option value="C">C+</option>
                   <option value="C">C</option>
                   <option value="C">C-</option>
                   <option value="D">D+</option>
                   <option value="Other">Other</option>
               </select>
               <br>
               <label for=""><b>Education Level:</b></label>
               <br>
               <select name="education_level" id="" class="form-control" required>
                   <option value="">====Select Education Level Reached</option>
                   <option value="High School">High School</option>
                   <option value="College">College</option>
                   <option value="University">University</option>
               </select>
               <br>
               <label for=""><b>School/Institution Attended:</b></label>
               <br>
               <input type="text" name="schl_inst" class="form-control" placeholder="*Indicate school/institution attended" required>
               <br>
               <label for=""><b>Year From:</b></label>
               <br>
               <input type="date" name="year_from" class="form-control" required>
               <br>
               <label for=""><b>Year To:</b></label>
               <br>
               <input type="date" name="year_to" class="form-control" required>
               <br>
            <hr>
            <div class="buttons">
                <button class="btn btn-success" type="submit" name="btn_add_new">Add New</button>
                &nbsp;&nbsp;&nbsp;
                <a href="searchRegU.php" class="btn btn-primary">Update</a>
                &nbsp;&nbsp;&nbsp;
                <a href="searchRegD.php" class="btn btn-danger">Delete</a>
            </div>
            </div>
    </form>
</div>
</body>
</html>
