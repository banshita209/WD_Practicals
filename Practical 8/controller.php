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
		else{
			if ($_POST["submit"] == "Register")
			{
				$sql = "INSERT INTO user (name, password, email) VALUES ('".$_POST["u_name"]."', '".$_POST["c_pswd"]."','".$_POST["email"]."')";
				if ($conn->query($sql) === TRUE) {
  				echo "New record created successfully";
  				} else {
  				echo "Error: " .  $conn->error;
				}
				header("location: login.php");
			} 
			elseif ($_POST["submit"] == "Login") 
			{
				$sql = "SELECT password From user where name ='".$_POST['u_name']."' and password ='".$_POST['pswd']."'";
				$result=$conn->query($sql);
				if ($result->num_rows ==1) {
  					session_start();
  					$_SESSION['name'] = $_POST["u_name"];
  				} else {
  				echo "Error: " .  $conn->error;
				}
				header('location: home.php');
			}
		} 
		$conn->close();
	}
?>