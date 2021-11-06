<!Doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
</head>
<style>
    .form{
        width: 300px;
        border: 1px solid black;
        margin: 0;
        padding: 10px;
    }
    .form input{
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
<form method="post">
    <div class="form">
        <h2>Future Value Calculator</h2>
        <label>
            Inventment Amount:<br>
            <input type="text" name="number" size="30px"><br>
        </label>
        <label>
            Yearly Interest Rate:<br>
            <input type="text" name="rate" size="30px"><br>
        </label>
        <label>
            Number of Years:<br>
            <input type="text" name="years" size="30px"><br>
        </label>
        <input type="submit" value="check">
    </div>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number =  $_POST["number"];
    $rate =  $_POST["rate"];
    $year = $_POST["years"];
    $future = ($number+ ($number * ($rate/100)))*$year;
   echo $future;
}

?>
