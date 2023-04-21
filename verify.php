<?php
// Start session
session_start();

// Get username and password from form
$username = $_POST["username"];
$password = $_POST["password"];

// Check if username and password are correct
if ($username == "mosin" && $password == "123") {
	// Username and password are correct, redirect to welcome page
	$_SESSION["loggedin"] = true;
	header("location: welcome.html");
	exit;
} else {
	// Username and password are incorrect, redirect to login page
	header("location: login.html");
	exit;
}
?>
