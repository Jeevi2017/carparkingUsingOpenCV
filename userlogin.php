<?php
require 'config.php';
if(isset($_POST["submit"])){
    $usernameemail= $_POST["usernameemail"];
    $password = $_POST["password"];
    $result= mysqli_query($conn,"SELECT * FROM userdetails WHERE username='$usernameemail' OR email='$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password == $row["password"]){
            $_SESSION["login"]=true;
            $_SESSION["id"] = $row["id"];
            header("Location: model.php");
        }
        else{
            echo
            "<script> alert('Wrong Password');</script>";
        }
    }
    else{
        echo"<script> alert('user Not Registed');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userlogin</title>
    <link rel="stylesheet" href="form.css">
    <style>
      body{
        background-image: url("home.jpg");
        background-size: cover;
      }
        .bnt button {
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
 .bnt button:hover{
  transform: rotateY(180deg);
  transition: transform 0.8s;
  background-color: darkgoldenrod;
  transform: rotateY(  180deg );
  color: white;
 
}

        </style>
   

</head>
<body><div style='background-color:brown; text-align: right;'class='bnt'>
<p style='background-color: transparent ;
  color: white;
  text-align: right;
  margin-right: 10%;
  display: inline ;
  font-size: 25px;'>AI ENABLE Pre-PARKING USING OPENCV</p>
   <a href="index.php">  <button>HOME</BUTTON></a>
   <a href="aboutus.php"> <button>ABOUT US</button></a>
    <a href="userlogin.php"> <button>LOGIN</button></a>
    <a href="Register.php"> <button>REGISTER</button></a>
    <button>CONTACT</button>
   
</div>
<b><div class='centered'>
<form method="post" >
   <h1 style="font-size:50px;text-align:center;">User Login </h1>
   <br>
        <label for="usernameemail">UserName or Email:  </label>
            <input type="text" id="usernameemail" name="usernameemail" placeholder="Enter the Username or email" required style='  width:100%;'>
            <br><br>
         <label for="password">Password:            </label>
             <input type="password" id="password" name="password" placeholder="Enter the password" required style='  width:100%;'>
             <br><br>
         <button type="submit" name="submit" style='  width:100%;' >Login</button >
          </form>
</div></b>



</body>
</html>