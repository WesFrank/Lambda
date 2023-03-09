<?php 

// Credentials

$dbServername = "";
$dbUsername = "";
$dbPassword = "";
$dbName = "";

// Connection Established

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Database Access

if (!$conn) {

  die("connection failed: " . mysqli_connecti_error());

};
