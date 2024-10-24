<?php
require 'config.php';
if(isset($_POST["submit"])){
       $username = $_POST["username"];
       $email = $_POST["email"];
       $password = $_POST["password"];
       $confirmpassword = $_POST["confirmpassword"];
       $duplicate = mysqli_query($conn, "SELECT * FROM userdetails WHERE username='$username' OR email ='$email'");
       if(mysqli_num_rows($duplicate)>0){
         echo
         "<script> alert('Username or Email Has Already Taken');</script>";
       }
       else{
              if($password == $confirmpassword){
                     $query= "INSERT INTO userdetails VALUES('','$username','$email','$password')";
                     mysqli_query($conn,$query);
                     echo
                     "<script> alert('Registration Suscccessfully Done');</script>";
              }
              else{
                     echo
                     "<script> alert('Password is Mismatching ');</script>";
              }
       }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
   <h1 style="font-size:50px; text-align: center;">User Register </h1>



   <label for="username">User Name: </label>
            <input type="text" id="username" name="username" placeholder="Enter the Username" required style='  width:100%;'>
            <br><br>


            <label for="email">E-mail:  </label>
            <input type="text" id="email" name="email" placeholder="Enter the E-mail" required style='  width:100%;'>
            <br><br>

            <label for="password">Password:            </label>
             <input type="password" id="password" name="password" placeholder="Create a password" required style='  width:100%;'>
            

            <br><br>
         <label for="confirmpassword">Conform Password:            </label>
             <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Your password" required style='  width:100%;'>
            <br><br>
         <button type="submit" name="submit" style='  width:100%;' >Register</button >
          </form>
</div></b>



</body>
</html>