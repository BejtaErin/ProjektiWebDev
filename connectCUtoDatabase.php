<?php

$servername = "your_server_name";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);


$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

if(mysqli_query($conn, $sql)){
  echo "Records added successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


mysqli_close($conn);

?>