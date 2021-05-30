<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "test";

	
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
		else
		{
			function displayAll()
			{
				$sql = "SELECT * From user";
				$result = mysqli_query($GLOBALS["conn"], $sql);
				if (mysqli_num_rows($result) > 0) 
				{
					session_start();
	            	$_SESSION["result"]= $result->fetch_all();
	            	header("location: display.php");
	            	mysqli_close($conn);
	        	} else {
	            	echo "0 results";
	        	}
			}
			
			$action = $_REQUEST["action"];

			if ($action == null || !isset($action)) {
				displayAll();
			} 

			else if($action == "edit"){
				$id=$_REQUEST["id"];
				echo $id;

				$sql = "SELECT * From user where id =".$id;
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) >0) 
				{
					session_start();
	            	$_SESSION["result"]= $result->fetch_row();
	            	header("location: update.php");
	            	mysqli_close($conn);
	        	} else {
	            	echo "0 results";
	        	}

			}
			else if($action == "delete"){
				$id=$_REQUEST["id"];
				echo $id;

				$sql = "DELETE FROM user where id =".$id;
				$result = mysqli_query($conn, $sql);

				if ($conn->query($sql) === TRUE) 
				{
					displayAll();
	        	} else {
	            	echo "0 results";
	        	}

			}
			else if($action == "Update" || $action == "Add"){
				
				$name=$_POST["name"];
				$pswd=$_POST["pswd"];
				$email=$_POST["email"];
				if ($action == "Update") 
				{
					$id=$_POST["id"];
					
					$sql = "UPDATE user SET name='".$name."', password='".$pswd."', email='".$email."' where id =".$id;

					if ($conn->query($sql) === TRUE) 
					{
  						
  				 		displayAll();
  					} else {
  						echo "Error: " .  $conn->error;
					}
				} else if ($action == "Add")
				{
					$sql = "INSERT INTO user (name, password, email) VALUES ('".$name."', '".$pswd."','".$email."')";
					if ($conn->query($sql) === TRUE) {
	  				
	  					displayAll();
	  				} else {
	  				echo "Error: " .  $conn->error;
					} 
				}	
			}
			
        }
?>  