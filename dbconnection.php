<?php

$servername = "Name;
$database = "Dbname";
$username = "Username";
 $password = "Password";



$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
