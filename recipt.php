<?php
// PHP processing code to retrieve data from backend or database
// ...

require 'config.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION["id"];
    $result1 = mysqli_query($conn, "SELECT * FROM userdetails WHERE id = $id");
    $row= mysqli_Fetch_assoc($result1);
}
else{
    header("Location: index.php");
}

    $query = " select * from userdetails";
    $result= mysqli_query($conn,$query);

// Sample data
$visitorName = "John Doe";
$visitDate = "2023-05-24";
$paymentAmount = 100.00;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Industrial Visit Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        .receipt {
            border: 1px solid #ccc;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
        }
        

        
        .receipt-details {
            margin-bottom: 20px;
        }
        
        .receipt-details p {
            margin: 5px 0;
        }
        
        .item-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .item-table th,
        .item-table td {
            padding: 8px;
            border-bottom: 1px solid #ccc;
        }
        
        .total {
            text-align: right;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body style="background-image:url('image/userdetails.png');
background-repeat: no-repeat;
background-size: 1600px 900px;
background-attachment: fixed;color:black;
">
    <div class="receipt">
        <h1>Receipt</h1>

        <div class="receipt-details">
            <p><strong>Date:</strong> <?php echo date('Y-m-d'); ?></p>
            <p><strong>Receipt No:</strong> 5648</p>
            <p><strong>Visitor Name:</strong> KS</p>
            <p><strong>Visit Date:</strong> <?php echo date('Y-m-d'); ?></p>
        </div>

        <table class="item-table">
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>amount</td>
                <td>1</td>
                <td>rs. 50</td>
                <td>rs. 50</td>
            </tr>
           
        </table>

     
    </div>
<center>
        <button onclick="window.print()">Print Receipt</button></center>
</body>
</html>








