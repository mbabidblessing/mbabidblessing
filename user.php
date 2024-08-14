<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day2</title>
</head>
<body>
<Form  action="user.php"  method ="POST">
    <label for= "name">Enter your name: </label><br>
    <input type ="text"  name="username"> <br>
    <label for= "email">Enter your email: </label><br>
    <input type ="text"  name="email"><br>
    <label for= "number">Enter your phone number: </label><br>
    <input type ="number"  name="phone_number"> <br>
    <label for= "password">Enter your password:</label><br>
    <input type ="text"  name="password"> <br>
    <input type = "submit" value ="Log in";><br>
</form>
</body>
</html>
<?php

echo $_POST["username"] . "<br>";
echo $_POST["email"] . "<br>" ;
echo $_POST["phone_number"] . "<br>";
echo $_POST["password"] . "<br>";

if(isset($_POST['butten name'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
}


?>