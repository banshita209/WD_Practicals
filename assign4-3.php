<!DOCTYPE html>
<html>
<head>
	<title>Session Management</title>
</head>
<body>
	<h1>Login</h1>
	<form action="" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
				<td><input type="reset" name="clear" value="clear"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if (isset($_POST["submit"])) {
		$username=$_POST["Username"];
		$password=$_POST["Password"];

		if ($username == 'Banshita' && $password == '123') {
			session_start();
			$_SESSION["name"]= $username;
			header("location:assign4-3b.php");
		} else {
			echo '<script>alert("incorrect username or password")</script>';
		}
	}
	
?>