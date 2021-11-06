<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scales=1.0">
    <title>Số nguyên tố</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="prime" placeholder="nhập số lượng">
    <input type="submit" value="Search">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["prime"];
    $count = 0;
    function isPrime($number) {
        if( $number < 2 ) {
            return false;
        }else if($number == 2){
            return true;
        }else {
            for($x = 2; $x < $number; $x++) {
                if($number % $x == 0) {
                    return false;
                }
            }
        }
        return true;
    }
    $snt = 2;
    while($count < $number) {
       if(isPrime($snt)) {
           echo "$snt"." ";
           $count++;
       }
       $snt++;
    }
}
?>
