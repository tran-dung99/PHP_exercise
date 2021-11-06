<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scales=1.0">
    <title>Calculator</title>
</head>
<body>
<h1>Result:</h1>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $numberOne = $_POST["firstNumber"];
    $operator = $_POST["opera"];
    $numberTwo = $_POST["secondNumber"];
    try{
        if($numberOne == "") throw new Exception("Nhập dữ liệu phần tử 1");
        if($numberTwo == "") throw new Exception("Nhập dữ liệu phần tử 2");
    }
    catch (Exception $e) {
        echo $e -> getMessage();
        die();
    }
    if ($operator == "+") {
        $sum = $numberOne + $numberTwo;
        echo $numberOne . $operator . $numberTwo . " = " . $sum;
    } else if ($operator == "x") {
        $tich = $numberOne * $numberTwo;
        echo $numberOne . $operator . $numberTwo . " = " . $tich;
    } else if ($operator == "-") {
        $hieu = $numberOne - $numberTwo;
        echo $numberOne . $operator . $numberTwo . " = " . $hieu;
    } else if ($operator == "/") {
            try{
              if($numberTwo == 0) throw new Exception("Mẫu số phải khác 0");
                $thuong = $numberOne/$numberTwo;
              echo $numberOne . $operator . $numberTwo . " = " . $thuong;
            }
            catch(Exception $ex){
                echo $ex -> getMessage();
            }
    }
}
?>
