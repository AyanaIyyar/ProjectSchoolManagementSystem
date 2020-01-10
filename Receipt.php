<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt</title>
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
    <h3 class="text-center"><b>Receipt</b></h3>
</div>
<hr>
<div class="container">
    <form action="ReceiptHandler.php" method="post">
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Receipt ID </b></label>
                <br>
                <input type="text" name="receipt_id" class="form-control" placeholder="*Your Invoice ID Number Here" required>
                <br>
                <label for=""><b>First Name:</b></label>
                <br>
                <input type="text" name="fName" class="form-control"placeholder="*Your First Name Here" required>
                <br>
                <label for=""><b>Other Names:</b></label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="*Other Names Here" required>
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
                <label for=""><b>Tuition Fee:</b></label>
                <br>
                <input type="number" name="tuition_fee" class="form-control" placeholder="*Enter the tuition Fee Here" required>
                <br>
                <label for=""><b>Registration Fee</b></label>
                <br>
                <input type="number" name="reg_fee" class="form-control" placeholder="*Enter Registration Fee Here" required>
                <br>
                <label for=""><b>Accommodation Fee:</b></label>
                <br>
                <input type="number" name="acm_fee" class="form-control" placeholder="*Enter Accommodation Fee" required>
                <br>
                <label for=""><b>Library Fee:</b></label>
                <br>
                <input type="number" name="lib_fee" class="form-control" placeholder="*Enter Library Fee" required>
                <br>
                <label for=""><b>Total Amount:</b></label>
                <br>
                <input type="number" name="total_A" class="form-control" placeholder="*Enter Total Fee" required>
                <br>
                <label for=""><b>Amount Paid:</b></label>
                <br>
                <input type="number"name="amountP" class="form-control" placeholder="*Enter Amount Paid" required>
                <br>
                <hr>

                <div class="buttons">
                    <button class="btn btn-success" type="submit" name="btn_add_new">Add New</button>
                    &nbsp;&nbsp;&nbsp;
                    <a href="searchReceiptU.php" class="btn btn-primary">Update</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="searchReceiptD.php" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
