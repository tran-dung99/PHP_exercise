<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scales=1.0">
    <title>ĐỌC SỐ</title>
</head>
</html>
<body>
<form method="post">
    <div>
        <label>
            <input type="text" name="number" placeholder="Nhập số muốn đọc">
        </label>
        <input type="submit" value="start">
    </div>
</form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr_donvi = [
        "0" => "",
        "1" => "one",
        "2" => "two",
        "3" => "three",
        "4" => "four",
        "5" => "five",
        "6" => "six",
        "7" => "seven",
        "8" => "eight",
        "9" => "nine"
    ];
    $arr_chuc = [
        "2" => "twenty",
        "3" => "thirty",
        "4" => "forty",
        "5" => "fifty",
        "6" => "sixty",
        "7" => "seventy",
        "8" => "eighty",
        "9" => "ninety"
    ];
    $arr_dacbiet = [
        "11" => "elevent",
        "12" => "twelve",
        "13" => "thirteen",
        "14" => "fourteen",
        "15" => "fifteen",
        "16" => "sixteen",
        "17" => "seventeen",
        "18" => "eighteen",
        "19" => "nineteen"
    ];
    $arr_hangtram = [
      "1" => "one hundred",
      "2" => "two hundred",
      "3" => "three hundred",
      "4" => "four hundred",
      "5" => "five hundred",
      "6" => "six hundred",
      "7" => "seven hundred",
      "8" => "eight hundred",
      "9" => "nine hundred",
    ];

    $usernumber = $_REQUEST["number"];
    if(strlen($usernumber) < 2) {
        echo $arr_donvi[$usernumber];
    }else if(strlen($usernumber) < 3) {
        $firstCharacter = substr($usernumber,0,1);
        $lastCharacter = substr($usernumber,1,1);
        if($firstCharacter == 1) {
            echo $arr_dacbiet[$usernumber];
        }else {
         echo $arr_chuc[$firstCharacter].$arr_donvi[$lastCharacter];
        }
    }else if(strlen($usernumber) < 4) {
        $firstCharacter = substr($usernumber,0,1);
        $middleCharacter = substr($usernumber,1,1);
        $doublenumber = substr($usernumber,1,2);
        $lastCharacter = substr($usernumber,2,2);
        if($middleCharacter == 1) {
            echo $arr_hangtram[$firstCharacter]." and ".$arr_dacbiet[$doublenumber];
        }else if($middleCharacter == 0) {
            echo $arr_hangtram[$firstCharacter]." and ".$arr_donvi[$lastCharacter];
        }else{
            echo $arr_hangtram[$firstCharacter]." and ".$arr_chuc[$middleCharacter].$arr_donvi[$lastCharacter];
        }
    }
}

?>
