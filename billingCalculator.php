<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing Calculator</title>
</head>
<body>
<form action="#">
    <label for=""><b>Calculate</b></label>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator" id="">
        <option value="None">None</option>
        <option value="Add">ADD</option>
    </select>
    <br>
    <button name="submit" class="submit" value="submit">Calculate</button>
</form>
<p>The answer is:</p>
<?php
if (isset($_GET['submit'])){
    $result1=$_GET['num1'];
    $result2=$_GET['num2'];
    $operator=$_GET['operator'];
    switch ($operator){
        case "None":
            echo "You need to select a method!";
            break;
        case "Add":
            echo "$result1 + $result2";
            break;


    }
}
?>

</body>
</html>