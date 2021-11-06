<?php
for($i = 1; $i <= 7; $i++) {
    for ($j = $i; $j < 7; $j++){
       echo "&nbsp&nbsp";
  }
    for($z = 1; $z <= (2*$i - 1); $z++){
        echo "<span style='color: green'>*</span>";
    }
    echo"<br/>";
}
 echo "<br/>";
$dong = 7;
for($i = 1; $i <= $dong; $i++) {
    for ($j = 1; $j < $i; $j++){
        echo "&nbsp&nbsp";
    }
    for($z = 1; $z <= ($dong*2 -(2*$i - 1)); $z++){
        echo "<span style='color: green'>*</span>";
    }
    echo"<br/>";
}

?>


