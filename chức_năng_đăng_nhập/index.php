<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scales=1.0">
     <meta http-equiv="X-UA-Compatible"  context="ie=edge">
    <style type="text/css">
      .login{
          width: 230px;
          margin : 0;
          padding: 10px;
          border: 1px solid black;

      }
      h2{
          text-align: center;
      }
      .login input{
          padding: 5px;margin: 5px;
      }

    </style>
</head>
</html>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <label>
            Username:
            <input type="text" name="username" size="25" placeholder="User name">
        </label>
        <label>
            Password:
            <input type="text" name="password" size="25" placeholder="Password">
        </label>
        <input type="submit" value="Sign in">
    </div>
</form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "admin" && $password == "admin") {
        echo "<h3>Welcome <span style='color: red'>".$username."</span> to website</h3>";
    }else {
        echo  "Login Error";
    }
}
?>
