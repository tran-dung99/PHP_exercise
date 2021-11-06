<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scales=1.0">
        <title>Đổi tiền tệ</title>
    </head>
    <style>
        .fom{
            border: 2px solid burlywood;
            width: 300px;
        }
    </style>
    <body>
    <form action="" method="post">
        <div class="fom">
            <h2> Ứng dụng đổi tiền tệ</h2>
        USD: <input type="text" name="usd" placeholder="Nhập số tiền"><br><br>
        <input type="submit" value="Đổi" style="margin-left: 40px">
        </div>
    </form>
    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $usd = $_POST["usd"];
    $VND = $usd * 23000;
    echo "$usd"."$ "." tương đương "."$VND"." VNĐ";
}
?>