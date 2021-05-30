<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

	if(isset($_POST["submit"]))
	{
// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO STUDENT (NAME, GENDER, PHONE_NO, EMAIL) VALUES ('".$_POST["name"]."', '".$_POST["gender"]."', '".$_POST["phoneno"]."','".$_POST["email"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " .  $conn->error;
}

	}
$conn->close();
?>