<?php
$servername = "localhost"; // replace with your server name
$username = $_POST["system"]; // get the username from the form
$password = $_POST["mosin2003"]; // get the password from the form
$dbname = "Oracle"; // replace with your database name

// Create connection
$conn = oci_connect($username, $password, "//".$servername."/".$dbname);

// Check connection
if (!$conn) {
    $error_message = oci_error();
    echo "Login failed: " . htmlentities($error_message['message']);
} else {
    // Connection successful
    echo "Hello";
}

// Close connection
oci_close($conn);
?>
