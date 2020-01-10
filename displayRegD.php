<?php
$conn=mysqli_connect("localhost","root","","project");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Remove SQL Injection
$idNumber=mysqli_real_escape_string($conn,$_POST['idnumber']);
$sql="SELECT * FROM `staff_table` WHERE id_Number='$idNumber'";
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
            <title>Delete Staff Details</title>
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
            <h3 class="text-center"><u>Delete Staff Details</u></h3>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="RegDelete.php" method="post">
                        <label for=""><b>Student Admission Number:</b></label>
                        <br>
                        <input type="text" name="student_admin" class="form-control" placeholder="*Student admission number here" required value="<?php print $row['studentadmin_number'];?>">
                        <br>
                        <label for=""><b>Student ID Number:</b></label>
                        <br>
                        <input type="text" name="student_id" class="form-control" placeholder="*Your ID Number Here" required value="<?php print $row['student_id'];?>">
                        <br>
                        <label for=""><b>Registration Date:</b></label>
                        <br>
                        <input type="text" name="reg_date" class="form-control" required value="<?php print $row['registration_date'];?>" >
                        <br>
                        <label for=""><b>First Name : </b></label>
                        <br>
                        <input type="text"name="fName" class="form-control" placeholder="*First Name Here" required value="<?php print $row['first_name'];?>">
                        <br>
                        <label for=""><b>Other Names:</b></label>
                        <br>
                        <input type="text" name="oName" class="form-control" placeholder="*Your Other Names Here" required value="<?php print $row['other_names'];?>">
                        <br>
                        <label for=""><b>Gender:</b></label>
                        <br>
                        <input type="radio" name="gender" value="gender" required ="<?php print $row['gender'];?>">
                        <br>
                        <label for=""><b>Date of Birth:</b></label>
                        <br>
                        <input type="date" name="dob" class="form-control" required value="<?php print $row['dob'];?>">
                        <br>
                        <label for=""><b>Postal Address:</b></label>
                        <br>
                        <input type="text" name="postal_add" class="form-control" placeholder="*Postal Address Here" required value="<?php print $row['postal_address'];?>">
                        <br>
                        <label for=""><b>Telephone Number:</b></label>
                        <br>
                        <input type="text" name="tel_number" class="form-control" placeholder="*Your Telephone Number Here" required value="<?php print $row['telephone_number'];?>">
                        <br>
                        <label for=""><b>Email Address:</b></label>
                        <br>
                        <input type="email" name="emailAdd" class="form-control"placeholder="*Your Email Address Here" required value="<?php print $row['email'];?>">
                        <br>
                        <label for=""><b>Next of Kin(NOK)</b></label>
                        <br>
                        <input type="text" name="nok" class="form-control" placeholder="*next of kin here" required value="<?php print $row['nok'];?>">
                        <br>
                        <label for=""><b>NOK Telephone Number</b></label>
                        <br>
                        <input type="text" name="nokTelNumber" class="form-control" placeholder="*Next of kin telephone number" required value="<?php print $row['nok_tel'];?>">
                        <br>
                        <label for=""><b>Course:</b></label>
                        <br>
                        <input type="text" name="course" class="form-control" required value="<?php print $row['course'];?>"">
                        <br>
                        <label for=""><b>K.C.S.E Mean:</b></label>
                        <br>
                        <input type="text" name="kcse_mean" class="form-control" required value="<?php print $row['kcse_mean'];?>"" >
                        <br>
                        <label for=""><b>Education Level:</b></label>
                        <br>
                        <input type="text" name="education_level" class="form-control" required value="<?php print $row['education_level'];?>">
                        <br>
                        <label for=""><b>School/Institution Attended:</b></label>
                        <br>
                        <input type="text" name="schl_inst" class="form-control" placeholder="*Indicate school/institution attended" required value="<?php print $row['school/instituition attended'];?>">
                        <br>
                        <label for=""><b>Year From:</b></label>
                        <br>
                        <input type="date" name="year_from" class="form-control" required value="<?php print $row['Year_from'];?>">
                        <br>
                        <label for=""><b>Year To:</b></label>
                        <br>
                        <input type="date" name="year_to" class="form-control" required value="<?php print $row['Year_to'];?>">
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