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

$emails=$_POST['emails'];
$query="INSERT INTO newsletter(emails) VALUES ('$emails')";
mysqli_query($conn, $query);
header('location:aboutus.php');
?>