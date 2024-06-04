<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodline";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message= $_POST['message'];



$sql = "INSERT INTO order (name, email,subject,message)
VALUES ('$name', '$email', '$subject','$message')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

