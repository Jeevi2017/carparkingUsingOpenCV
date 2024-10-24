<?php
$pythonScript = "main.py";

// Use the exec() function to run the Python script
$output = exec("python $pythonScript");

// Print the output of the Python script
echo $output;
?>