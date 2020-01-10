<?php
$conn=mysqli_connect("localhost","root","","project");

if (!$conn){
    die("Connection Failed : " .mysqli_connect_error());
}
//Remove SQL Injection
$enquiryId=mysqli_real_escape_string($conn,$_POST['enquiry_id']);
$sql="SELECT * FROM `enquire` WHERE enquiry_id='$enquiryId'";
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
    <title>Update Enquiries</title>
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
    <img src="images/techThree.jpeg" alt="techThree" width="300" height="200">
</div>
<hr>
<div class="heading">
    <h3 class="text-center"><b>Update Enquiries</b></h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="enquiryUpdate.php"method="post">
                <label for=""><b> Enquiry ID :</b></label>
                <br>
                <input type="text" name="enquiry_id" class="form-control" placeholder="*Enquiry ID Here" required value="<?php print $row['enquiry_id'];?>">
                <br>
                <label for=""><b>Enquiry Number:</b></label>
                <br>
                <input type="text" name="enquiry_no" class="form-control" required value="<?php print $row['enquiry_number'];?>">
                <br>
                <label for=""><b>Enquiry Date:</b></label>
                <br>
                <input type="text" name="enquiry_date" class="form-control" required value="<?php print $row['enquiry_date'];?>">
                <br>
                <label for=""><b>First Name : </b></label>
                <br>
                <input type="text"name="fName" class="form-control" placeholder="*First Name Here" required value="<?php print $row['first_name'];?>">
                <br>
                <label for=""><b>Other Names:</b></label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="*Other Names Here" required value="<?php print $row['other_names'];?>">
                <br>
                <label for=""><b>Telephone Number:</b></label>
                <br>
                <input type="text" name="tel_Number" class="form-control" placeholder="*Telephone Number Here" required value="<?php print $row['tel_number'];?>">
                <br>
                <label for=""><b>Email Address:</b></label>
                <br>
                <input type="email" name="emailAdd" class="form-control"placeholder="*Your Email Address Here" required value="<?php print $row['email'];?>">
                <br>
                <label for=""><b>Course:</b></label>
                <br>
                <input type="text" name="course" class="form-control" required value="<?php print $row['course'];?>">
                <br>
                <label for=""><b>How Did You Get to Know About Us:</b></label>
                <br>
                <input type="text" name="knw_abus" class="form-control" required value="<?php print $row['knw_abtus'];?>">
                <br>
                <label for=""><b>Comments</b></label>
                <br>
                <input type="text" required value="<?php print $row['comments'];?>">
                <br>
                <hr>
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