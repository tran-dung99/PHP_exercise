<?php
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
echo "Các số nguyên tố nhỏ hơn 100 là: "."<br/>";
for($i = 0; $i <= 100; $i++) {
    if(isPrime($i)) {
        echo "$i"."<br/>";
    }
}
?>