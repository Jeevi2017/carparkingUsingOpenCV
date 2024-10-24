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
    <title>Payment Page</title>
    <link rel="stylesheet" href="home.css">
       <style>

input{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button{
    
    width: 100%;
    background-color: darkgrey;
    color: #133a1b;
    padding:14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button:hover{
    background-color: #02c837;
}
form{
    border-radius: 5px;
    background-color: #DDD8B8;
    padding:20px;
}

        .btn-group button{
    background-color: rgb(142, 139, 139);
    border: 0px solid gray;
    color:white;
    padding: 10px 24px;
    cursor: pointer;
    float: left;
    width: 33%;
    border-radius: 0px;
   
    margin:0px 1px;

                            }
        .btn-group button:not(:last-child){
               border-right:none;
                                            }
        .btn-group:after{
               content: "";
               clear: both;
               display: table-row-group;
                        }
.btn-group button:hover{
    background-color: #3e8e41;
}
</style>

</head>
<body>

<div class="split right">
 <div class="centered">
    <form  method="post">
        
    <h1>Payment Form</h1>
        <!-- Payment fields -->
        <label for="cardholder">Cardholder's Name:</label>
        <input type="text" id="cardholder" name="cardholder" required><br><br>

        <label for="lotno">Parking slot Number:</label>
        <input type="text" id="lotno" name="lotno" required><br><br>

        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" name="cardNumber" required><br><br>

        <label for="expiration">Expiration Date:</label>
        <input type="text" id="expiration" name="expiration" required><br><br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required><br><br>

        <!-- Submit button -->
        
    </form>
    <a href="recipt.php"><button type="submit">Pay NOw</button></a>



            
            </div>
 </div>
    
</body>
</html>
