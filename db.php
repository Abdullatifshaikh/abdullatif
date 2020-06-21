<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infoport";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$user=$_POST['Name'];
$email=$_POST['Email'];
$subject=$_POST['Subject'];
$message=$_POST['Message'];

$sql = "INSERT INTO userinfo (name, email, subject, message) 
VALUES ('$user','$email','$subject','$message')" ;

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>