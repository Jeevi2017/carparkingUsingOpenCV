<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM userdetails WHERE id = $id");
    $row= mysqli_Fetch_assoc($result);
}
else{
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carparking home</title>
    <link rel="stylesheet" href="form.css"> 
    <link rel="stylesheet" href="model.css">
    <style>
      body{
        background-image: url("home.jpg");
        background-size: cover;
      }
        button {
  background-color: transparent ;
  position: sticky ;
  top: 32px;
  
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
 button:hover{
  transform: rotateY(180deg);
  transition: transform 0.8s;
  background-color: darkgoldenrod;
  transform: rotateY(  180deg );
  color: white;
 
}

        </style>
   
   <script>
    function myfunction(){
    document.getElementById("element").style.display="block";}
   </script>

</head>
<body><div style='background-color:brown; text-align: right;'class='bnt'>
<p style='background-color: transparent ;
  color: white;
  text-align: right;
  margin-right: 10%;
  display: inline ;
  font-size: 25px;'>AI ENABLE Pre-PARKING USING OPENCV</p>
   <a href="index.php">  <button>HOME</BUTTON></a>

     <button onclick="myfunction()">Model</button>

    
     <a href="booking.php"> <button>BOOKING DETAILS</button></a>
    <a href="logout.php"> <button>Logout</button></a>
   
</div>


<b><div class='centered' >
<div class='box' id="element" style='display:none; padding:20px;
    color: wheat;
    font-size: large;background-color: rgba(115, 21, 21, 0.901);'>


   <h1 style="font-size:50px;text-align:center;"> &#128516; Click the click me for parking slot &#128071; </h1>
   <br>
   <div style='text-align:center;'>
  
   

   <a href="pyconnection.php"> <button>Click Me</button></a>
        
</div>        
    </div>
</div></b>



</body>
</html>