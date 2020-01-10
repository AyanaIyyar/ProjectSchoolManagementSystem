<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiries</title>
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
    <h3 class="text-center"><b>Enquiries</b></h3>
</div>
<hr>
<div class="container">
    <form action="enquiriesHandler.php" method="post">
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>Enquiry ID :</b></label>
                <br>
                <input type="text" name="enquiry_id" class="form-control" placeholder="*Your ID Number Here" required>
                <br>
                <label for=""><b>First Name:</b></label>
                <br>
                <input type="text" name="fName" class="form-control"placeholder="*Your First Name Here" required>
                <br>
                <label for=""><b>Other Names:</b></label>
                <br>
                <input type="text" name="oName" class="form-control" placeholder="*Other Names Here" required>
                <br>
                <label for=""><b>Telephone Number:</b></label>
                <br>
                <input type="text" name="tel_Number" class="form-control" placeholder="*Telephone Number Here" required>
                <br>
                <label for=""><b>Email Address:</b></label>
                <br>
                <input type="email" name="emailAdd" class="form-control"placeholder="*Your Email Address Here" required>
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
                <label for=""><b>How Did You Get to Know About Us:</b></label>
                <br>
                <select name="knw_abus" id="" class="form-control" required>
                    <option value="Newspaper">Newspaper</option>
                    <option value="Television">Television</option>
                    <option value="Student">Student</option>
                    <option value="Friend">Friend</option>
                    <option value="Student">Student</option>
                    <option value="Alumni">Alumni</option>
                    <option value="Staff Member">Staff Member</option>
                    <option value="Social Media">Social Media</option>
                </select>
                <br>
                <label for=""><b>Comments:</b></label>
                <br>
                <textarea name="comments" id="comments" cols="30" rows="10" placeholder="*Comments Here" required></textarea>
                <br>
                <br>
                <div class="buttons">
                    <button class="btn btn-success" type="submit" name="btn_add_new">Add New</button>
                    &nbsp;&nbsp;&nbsp;
                    <a href="searchEnquiryU.php" class="btn btn-primary">Update</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="searchEnquiryD.php" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
