<p>Botton-left</p>
<?php
 for($i = 1; $i < 6; $i++) {
     for($j = 0; $j < $i; $j++) {
         echo "<span style='color: green'>*</span>";
     }
     echo"<br/>";
 }
?>
<p>Botton-right</p>
<?php
for($i = 0; $i < 5; $i++) {
    for($j = 0; $j < 5; $j++) {
        if($i + $j >= 4) {
            echo "<span style='color: green'>*</span>";
        }else {
            echo "<span style='color: white'>*</span>";
        }
    }
    echo"<br/>";
}
?>
<p>top-left</p>
<?php
for($i = 5; $i >= 1; $i--) {
    for($j = 1; $j <= $i; $j++) {
        echo "<span style='color: green'>*</span>";
    }
    echo"<br/>";
}
?>
<p>top-right</p>
<?php
for($i = 0; $i <= 5 ; $i++) {
    for($j = 0; $j <= 5; $j++) {
        if($i - $j >= 1) {
            echo "<span style='color: white'>*</span>";
        }else {
            echo "<span style='color: green'>*</span>";
        }
    }
    echo"<br/>";
}
?>


