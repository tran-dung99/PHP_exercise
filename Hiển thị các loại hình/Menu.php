<!Doctype html>
<html lang="en" >
<head>
    <title>Menu</title>
</head>
<body>
<h1>Menu</h1>
<ol>
    <li><a href="rectangle.php"><?php echo "Print the rectangle" ?></a></li>
    <li><a href="square%20triangle.php"><?php echo "Print the square triangle" ?></a></li>
    <li><a href="tamgiaccan.php"><?php echo "Print isosceles triangle" ?></a></li>
    <li><a href=""><?php echo "Exit" ?></a></li>
</ol>
</body>
</html>
<?php

for($i = 0; $i < 6; $i++) {
    for($j = 0; $j < 16; $j++) {
        echo "*";
    }
    echo "<br/>";
}
?>

