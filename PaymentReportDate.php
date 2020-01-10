<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment(Receipt) By Date</title>
    <link rel="icon" href="images/techThree.jpeg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="logo">
    <img src="images/techThree.jpeg" alt="techThree.jpeg" width="300" height="200">
</div>
<hr>
<div class="heading">
    <h3 class="text-center"><b>Payment(Receipt) Report</b></h3>
</div>
<hr>
<?php
//Establishing a connection
$conn=mysqli_connect("localhost","root","","project");
if (mysqli_connect_error())
{
    echo "Failed To Connect to Mysql:" .mysqli_connect_error();
}
//Remove the injections
$DateFrom=mysqli_real_escape_string($conn,$_POST['dFrom']);
$DateTo=mysqli_real_escape_string($conn,$_POST['dTo']);
$result=mysqli_query($conn,"SELECT * FROM `receipt` WHERE receipt_id>='$DateFrom' &&receipt_id<='$DateTo'");
echo "<table class='table table-striped table-responsive-sm'>
<tr>
<th>Receipt ID</th>
<th>First Name</th>
<th>Other Names</th>
<th>Course</th>
<th>Tuition</th>
<th>Registration</th>
<th>Accommodation</th>
<th>Library Fee</th>
<th>Total Amount</th>
<th>Amount Paid</th>
</tr>";

while ($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['student_id'] . "</td>";
    echo "<td>" .$row['fName'] . "</td>";
    echo "<td>" .$row['oName'] ."</td>";
    echo "<td>" .$row['tuition_fee'] ."</td>";
    echo "<td>" .$row['reg_fee'] ."</td>";
    echo "<td>" .$row['acm_fee'] ."</td>";
    echo "<td>" .$row['lib_fee'] ."</td>";
    echo "<td>" .$row['total_A'] . "</td>";
    echo "<td>" .$row['amountP'] ."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);

?>
</body>
</html>
