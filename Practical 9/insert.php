<!DOCTYPE html>
<html>
<head>
	<title>Practical -9</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="center" style="width: 30%;">
		<fieldset>
			<legend>Add New User</legend>
				<form action="controller.php" method="post">
				Name:<br>
				<input type="text" name="name" required><br>
				Email:<br>
				<input type="email" name="email" required><br>
				Password:<br>
				<input type="Password" name="pswd" required>
				Confirm Password:<br>
				<input type="Password" name="c_pswd" required>
				<br><br>
				<input type="Submit" name="action" value="Add" class="btn">
			</form>
		</fieldset>
	</div>
</body>
</html>