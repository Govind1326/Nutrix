<?php

$servername = "localhost";
$username = "root";
//$password = "password";

// Create connection
$conn = new mysqli($servername, $username);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

mysqli_select_db($conn, 'nutrix');

$email=$_POST['email'];
$fname=$_POST['fname'];
$address=$_POST['add'];
$city=$_POST['city'];
$pcode=$_POST['pcode'];
$state=$_POST['state'];
$zip=$_POST['zip'];


$query="INSERT INTO invoice (fname, email, address, city, pcode, state, pincode) VALUES ('$fname','$email','$address','$city','$pcode','$state','$zip')";
mysqli_query($conn, $query);
header('location:invoice.php');
?>
