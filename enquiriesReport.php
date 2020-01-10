<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiries Report</title>
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
    <h3 class="text-center"><b>Enquiries</b></h3>
</div>
<hr>
<?php
$conn=mysqli_connect("localhost","root","","project");
//check connection
if (mysqli_connect_error())
{
    echo "Failed to connect to Mysql :". mysqli_connect_error();
}
$result=mysqli_query($conn,"SELECT * FROM `enquire`");
echo "<table class='table table-striped table-responsive-sm'> 
<tr>
<th>ID Number</th>
<th>First Name</th>
<th>Other Names</th>
<th>Telephone Number</th>
<th>Email Address</th>
<th>Course</th>
<th>How Did You Get to Know About Us</th>
<th>Comments</th>
</tr>";

while ($row=mysqli_fetch_array($result))
{
 echo "<tr>";
 echo "<td>" . $row['id_number'] . "</td>";
 echo "<td>" .$row['fName'] . "</td>";
 echo "<td>" .$row['oName'] ."</td>";
 echo "<td>" .$row['tel_Number'] ."</td>";
 echo "<td>" .$row['emailAdd'] ."</td>";
 echo "<td>" .$row['course'] ."</td>";
 echo "<td>" .$row['knw_abus'] ."</td>";
 echo "<td>" .$row['comments'] ."</td>";
 echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
</body>
</html>
