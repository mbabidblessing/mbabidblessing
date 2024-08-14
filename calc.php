<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body
{
    background-color: mediumaquamarine;
    margin-left: 160px;
    margin-top: 100px;
    margin-right: 50px;
    margin-bottom: 55px;
    border-radius: 10px; 
}

form
{ 
  background-color:black;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 8px;
  box-sizing: border-box;
  border-radius: 10px; 
  size: 200px;  

}
button
{
background-color:black;
border-radius: 10px;
color: white;
padding: 10px 30px;
text-decoration: none;
font-size: 10px;
margin: 8px 8px;
}

</style>
<body>
<Form  action="calc.php"  method ="POST">
    <label for= "num1">Enter the first number: </label><br>
    <input type ="number" id ="num1" name="num1"> <br>
    <label for= "num2">Enter the second number: </label><br>
    <input type ="number" id= "num2" name="num2"> <br>
    <Select name = "operation"><br>
    <Option value = >Select operator</option>
    <Option value = "+">+</option>
    <Option value = "-">-</Option>
    <Option value = "*">*</Option>
    <Option value = "/">/</Option>
    <Option value = "sqrt">sqrt</Option>
    <Option value = "%">%</Option>
    <Option value = "**">**</Option>
    </select><br><br> 
    <input type = "submit" name="Submit">
</Form>
<stlye>

</stlye>
</body>
</html>
<?php

$_num1 = $_POST["num1"];
$_num2= $_POST["num2"];
$operator = $_POST["operation"];
$Addition = null;
$Subtraction = null;
$Division = null;
$sqrt = null;
$mod = null;
$power = null;


$Addition = $_num1 + $_num2;
$Subtraction = $_num2 - $_num1;
$Multiplication = $_num1 * $_num2;
$Division = $_num1 / $_num2;
$sqrt = sqrt($_num1);
$power =$_num1 ** $_num2;

switch($operator){
    case "+";
        echo "$Addition";
        break;
    case "-";
        echo "$Subtraction";
        break;
    case "*";
        echo "$Multiplication";
        break;
    case "/";
    if($num2=0){
        $result ="maths error";
    }else{
        $result = $_num1 /$_num2;
    }
        echo "$Division";
        break;
    case "sqrt($num1)";
        echo "$sqrt";
        break; 
    case "**";
        echo "$power";
        break;
    
}
 
 
?>




































