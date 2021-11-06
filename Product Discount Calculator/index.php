<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"
    <meta name="viewport"
          content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .fom{
        width: 300px;
        margin: 0;
        padding: 10px;
        border: 2px solid green;
    }
    .form input{
        padding: 5px;
        margin: 5px;
    }
</style>
<body style="margin-left: 500px; margin-top: 10px">
<form action="display_discount.php" method="post">
    <div class="fom">
        <h2>Product Discount Calculator</h2>
        <label>
            Product Description:<br>
            <input type="text" name="product" size="30px"><br>
        </label>
        <label>
            List Price:<br>
            <input type="text" name="price" size="30px"><br>
        </label>
        <label>
            Discount Percent:<br>
            <input type="text" name="discount" size="30px"><br><br>
        </label>
        <input type="submit" value="Calculate">
    </div>
</form>
</body>
</html>

