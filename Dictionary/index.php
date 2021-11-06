<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
</head>
<body>
<form method="post">
    <div>
        <h2>Từ Điển Anh - Việt</h2>
        <input type="text" placeholder="Nhập từ cần tìm" name="input">
        <input type="submit" value="Tìm">
    </div>
</form>
</body>
</html>
<?php
$dictionary = [
    "hello" => "xin chào",
    "good" => "Tốt",
    "money" => "tiền",
    "lucky" => "may mắn"
];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["input"];
    $flag = 0;
    foreach ($dictionary as $key => $value) {
        if($search == $key) {
            echo $search." có nghĩa là ".$value;
            $flag = 1;
        }
    }
    if($flag == 0) {
       echo " không tìm thấy từ cần tra";
    }
}
?>



