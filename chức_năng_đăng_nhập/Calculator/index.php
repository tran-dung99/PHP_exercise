<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scales=1.0">
    <title>Calculator</title>
</head>
<style>
    .form input{
        margin-left: 50px;
    }
    .form select {
        margin-left: 100px;
        width: 30px;
    }
    .form fieldset input{
        position: absolute;
        left: 60px;
    }
</style>
<body>
<form action="result.php" method="post">
    <div>
        <h1>Simple Calculator</h1>
        <fieldset style="width: 300px">
            <legend>Calculator</legend>
            First operand: <label><input type="text" name="firstNumber" style="margin-left: 15px"></label><br><br>
            Operator :   &nbsp  <select name="opera" style="margin-left: 30px" >
                <option value="+"> + </option>
                <option value="-"> - </option>
                <option value="*"> x </option>
                <option value="/"> / </option>
            </select><br><br>
            Second operand: <input type="text" name="secondNumber"><br><br>
            <input type="submit" value="Calculate" style="margin-left: 110px">
        </fieldset>

    </div>
</form>
</body>
</html>

