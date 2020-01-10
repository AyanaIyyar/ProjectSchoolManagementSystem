<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Report</title>
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
    <h3 class="text-center"><b>Registration Report</b></h3>
</div>
<hr>
<?php
$conn=mysqli_connect("localhost","root","","project");
//check connection
if (mysqli_connect_error())
{
    echo "Failed to connect to Mysql :". mysqli_connect_error();
}
$result=mysqli_query($conn,"SELECT * FROM `registration`");
echo "<table class='table table-striped table-responsive-sm'> 
<tr>
<th>Student ID Number</th>
<th>First Name</th>
<th>Other Names</th>
<th>Gender</th>
<th>Date of Birth</th>
<th>Postal Address</th>
<th>Telephone Number</th>
<th>Email Address</th>
<th>Next of Kin(NOK)</th>
<th>NOK Telephone Number</th>
<th>Course</th>
<th>K.C.S.E Mean</th>
<th>Education Level</th>
<th>School/Institution Attended</th>
<th>Year From</th>
<th>Year To</th>
</tr>";

while ($row=mysqli_fetch_array($result))
{
 echo "<tr>";
 echo "<td>" . $row['student_id'] . "</td>";
 echo "<td>" .$row['fName'] . "</td>";
 echo "<td>" .$row['oName'] ."</td>";
 echo "<td>" .$row['gender'] ."</td>";
 echo "<td>" .$row['dob'] ."</td>";
 echo "<td>" .$row['postal_add'] ."</td>";
 echo "<td>" .$row['tel_number'] ."</td>";
 echo "<td>" .$row['emailAdd'] ."</td>";
 echo "<td>" .$row['nok'] ."</td>";
 echo "<td>" .$row['nokTelNumber'] ."</td>";
 echo "<td>" .$row['course'] ."</td>";
 echo "<td>" .$row['kcse_mean'] ."</td>";
 echo "<td>" .$row['education_level'] ."</td>";
 echo "<td>" .$row['schl_inst'] ."</td>";
 echo "<td>" .$row['year_from'] ."</td>";
 echo "<td>" .$row['year_to'] ."</td>";
 echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
</body>
</html>
