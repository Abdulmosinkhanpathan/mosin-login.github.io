<?php
$servername = "localhost"; // replace with your server name
$username = "system"; // replace with your Oracle username
$password = "mosin2003"; // replace with your Oracle password
$dbname = "oracle"; // replace with your database name

// Create connection
$conn = oci_connect($username, $password, "//".$servername."/".$dbname);

// Check connection
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
} else {
    // Connection successful
    echo "Connected to Oracle database<br>";
    
    // Check if inputs are correct
    $input1 = "mosinkhan"; // replace with your input
    $input2 = "12345"; // replace with your input
    if ($input1 == "hello" && $input2 == "world") {
        echo "Hello";
    } else {
        echo "Inputs are not correct";
    }
}

// Close connection
oci_close($conn);
?>
