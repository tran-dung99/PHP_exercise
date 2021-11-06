<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $product =  $_POST["product"];
    $price=  $_POST["price"];
    $discount =  $_POST["discount"];
    $discountAmount = $price*($discount/100);
    $gia = $price-$discountAmount;

echo "Tên sản phầm :".$product;
echo"<br>";
echo "Lượng chiết khấu : ".$discountAmount;
echo"<br>";
echo "Giá sau khi được chiết khấu : ".$gia;
}

?>
