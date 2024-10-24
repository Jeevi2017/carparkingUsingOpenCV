<?php 
session_start();
define('DB_HOST', 'sql12.freesqldatabase.com');
define('DB_PORT', 3306);
define('DB_USER', 'sql12673883');
define('DB_PASSWORD', 'Kirthika23');
define('DB_NAME', 'sql12673883');


// Establish a MySQL database connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
if (!$conn) {
     echo "failed!";
    die("Connection failed: " . mysqli_connect_error());
}
