<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
body
{
    background-color: mediumaquamarine;
    margin-left: 160px;
    margin-top: 100px;
    margin-right: 50px;
    margin-bottom: 55px;
}

form
{ 
  background-color:#9A6696  ;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 8px;
  box-sizing: border-box;
  border-radius: 10px; 
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
</head>

<body>

    <form action = "Day5.php" method = "POST">
    <label>GUESS MY NUMBER</label><br>
    <input type="number" name="guess"><br>
    <Button type ="submit" name ="submit">DID YOU WIN?</Button> 
</html>


</body>
<?php
$rand = rand(1, 5);
if(isset($_POST['submit'])){
$guess = $_POST['guess'];

//checks
if($guess < 1 ||$guess > 5){
    echo "<br>Number must be between 1 and 5";
}
    if($guess ==$rand){
        echo "you win";
    }else {
        echo "<br>The number you guessed was wrong. The correcy value is {$rand}";
    }
    if($rand > 5){
        echo "Restart";
    }
    
}
    
    

    
    





?>