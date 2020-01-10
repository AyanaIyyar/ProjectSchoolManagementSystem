<?php
$conn=mysqli_connect("localhost","root","","project");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Remove SQL Injection
$receipt=mysqli_real_escape_string($conn,$_POST['receipt_id']);
$sql="DELETE FROM `enquire` WHERE receipt_id='$receipt'";
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
            <title>Delete Receipt</title>
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
            <h3 class="text-center"><u>Delete Receipt</u></h3>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="ReceiptDelete.php" method="post">
                        <label for=""><b>Receipt Number:</b></label>
                        <br>
                        <input type="text" name="receipt_no" class="form-control" placeholder="*Receipt Number Here" required value="<?php print $row['receipt_number'];?>" >
                        <br>
                        <label for=""><b>Receipt ID </b></label>
                        <br>
                        <input type="text" name="receipt_id" class="form-control" placeholder="*Your Invoice ID Number Here" required value="<?php print $row['receipt_id'];?>">
                        <br>
                        <label for=""><b>First Name : </b></label>
                        <br>
                        <input type="text"name="fName" class="form-control" placeholder="*First Name Here" required value="<?php print $row['first_name'];?>">
                        <br>
                        <label for=""><b>Other Names:</b></label>
                        <br>
                        <input type="text" name="oName" class="form-control" placeholder="*Other Names Here" required value="<?php print $row['other_names'];?>">
                        <br>
                        <label for=""><b>Course:</b></label>
                        <br>
                        <input type="text" name="course" class="form-control" placeholder="*Course Here" required value="<?php print $row['course'];?>">
                        <br>
                        <label for=""><b>Tuition Fee:</b></label>
                        <br>
                        <input type="number" name="tuition_fee" class="form-control" placeholder="*Enter the tuition Fee Here" required value="<?php print $row['tuition_fee'];?>"">
                        <br>
                        <label for=""><b>Registration Fee</b></label>
                        <br>
                        <input type="number" name="reg_fee" class="form-control" placeholder="*Enter Registration Fee Here" required value="<?php print $row['Registration_fee'];?>"">
                        <br>
                        <label for=""><b>Accommodation Fee:</b></label>
                        <br>
                        <input type="number" name="acm_fee" class="form-control" placeholder="*Enter Accommodation Fee" required value="<?php print $row['accommodation_fee'];?>"">
                        <br>
                        <label for=""><b>Library Fee:</b></label>
                        <br>
                        <input type="number" name="lib_fee" class="form-control" placeholder="*Enter Accommodation Fee" required <?php print $row['library_fee'];?>">
                        <br>
                        <label for=""><b>Total Amount:</b></label>
                        <br>
                        <input type="number" name="total_A" class="form-control" placeholder="*Enter Accommodation Fee" required value="<?php print $row['total_amount'];?>"">
                        <br>
                        <label for=""><b>Amount Paid:</b></label>
                        <br>
                        <input type="number"name="amountP" class="form-control" placeholder="*Enter Amount Paid" required value="<?php print $row['amount_paid'];?>">
                        <br>
                        <hr>

                        <br>
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