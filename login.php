<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
body
{
    background-color:black;
    margin-left: 160px;
    margin-top: 100px;
    margin-right: 50px;
    margin-bottom: 30px;
}

form
{ 
  background-color:#9A6696  ;
  width: 100%;
  padding: 12px 20px;
  margin: 8px ;
  box-sizing: border-box;
  border-radius: 10px; 
  
}
button
{
border: none;
color: pink;
padding: 10px 30px;
text-decoration: none;
font-size: 10px;
border-radius: 20px; 
}

    </style>

</head>
<body>
<Form  action="login.php"  method ="POST">
    <label>LOGIN FORM</label><br>
    <label for= "name">Enter your name: </label><br>
    <input type ="text" id ="name" name="username"><br> 
    <label for= "Password">Enter your password: </label><br>
     <input type ="text" id ="password" name="password"><br> 
     <!-- <input type = "submit" name="Submit"><br> -->
     <input type = "submit" value ="login"name= "login"><br>
</body>
</html>

<?php



//checking if the button is set
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

//pressent check for username
if(empty($username)){
    echo "please enter your name <br>";
}
if(empty($password)){
    echo "please enter your password<br>";
}
//checking the length of username and password
// if(strlen($username < 4)){
//     echo"username must be more than 4 characters<br>";

if(strlen($password < 8)){
    echo"password must be more than 8 characters";

}

}

?>