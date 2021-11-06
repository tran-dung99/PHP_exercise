<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scales=1.0">
    <meta http-equiv="X-UA-Compatible" context="ie=edge">
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
    $usernumber = $_REQUEST["number"];
    $array = [
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
    if (10 > $usernumber) {
        switch ($usernumber) {
            case "8" :
            case "1" :
            case "2" :
            case "3" :
            case "4" :
            case "5" :
            case "6" :
            case "7" :
            case "9" :
                echo $array[$usernumber];
        }
    } else if (20 > $usernumber) {
        $ones = $usernumber % 10;
        switch ($ones) {
            case "0" :
                echo "ten";
                break;
            case "1" :
                echo "elevent";
                break;
            case "2" :
                echo "tweteen";
                break;
            case "3" :
                echo "thirteen";
                break;
            case "5" :
                echo "fifteen";
                break;
            case "8" :
                echo "eighteen";
                break;
            case "4" :
            case "6" :
            case "7" :
            case "9" :
                echo $array[$ones] . "teen";
        }
    } else if (100 > $usernumber) {
        $ten = ((int)($usernumber / 10));
        $one = $usernumber % 10;
        switch ($ten) {
            case "2" :
                echo "twenty" . $array[$one];
                break;
            case "3" :
                echo "thirty" . $array[$one];
                break;
            case "4" :
                echo "forty" . $array[$one];
                break;
            case "5" :
                echo "fifty" . $array[$one];
                break;
            case "8" :
                echo "eighty" . $array[$one];
                break;
            case "6" :
            case "7" :
            case "9" :
                echo $array[$ten] . "ty" . $array[$one];
        }
    } else if (1000 > $usernumber) {
        $hunderd = ((int)$usernumber / 100);
        $newnumber = $usernumber % 100;
        $tenn = ((int)($newnumber / 10));
        $onen = $newnumber % 10;
        switch ($tenn) {
            case "0" :
                echo $array[$hunderd] . " hundred " . " and " . $array[$onen];
                break;
            case "1" :
                switch ($onen) {
                    case "0" :
                        echo $array[$hunderd] . " hundred " . " and " . "ten";
                        break;
                    case "1" :
                        echo $array[$hunderd] . " hundred " . " and " . "elevent";
                        break;
                    case "2" :
                        echo $array[$hunderd] . " hundred " . " and " . "tweteen";
                        break;
                    case "3" :
                        echo $array[$hunderd] . " hundred " . " and " . "thirteen";
                        break;
                    case "5" :
                        echo $array[$hunderd] . " hundred " . " and " . "fifteen";
                        break;
                    case "8" :
                        echo  $array[$hunderd] . " hundred " . " and " ."eighteen";
                        break;
                    case "4" :
                    case "6" :
                    case "7" :
                    case "9" :
                        echo $array[$hunderd] . " hundred " . " and " . $array[$onen] . "teen";
                }
                break;
            case "2" :
            case "3" :
            case "4" :
            case "5" :
            switch ($tenn) {
                case "2" :
                    echo $array[$hunderd] . " hundred " . " and " . "twenty " . $array[$onen];
                    break;
                case "3" :
                    echo $array[$hunderd] . " hundred " . " and " . "thirty " . $array[$onen];
                    break;
                case "4" :
                    echo $array[$hunderd] . " hundred " . " and " . "forty " . $array[$onen];
                    break;
                case "5" :
                    echo $array[$hunderd] . " hundred " . " and " . "fifty " . $array[$onen];
                case "8" :
                    echo $array[$hunderd] . " hundred " . " and " . "eighty " . $array[$onen];
            }
            break;
            case "6" :
            case "7" :
            case "9" :
                echo $array[$hunderd] . " hundred " . " and " . $array[$tenn] . " ty " . $array[$onen];
        }
    }
}
?>
