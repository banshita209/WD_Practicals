<!DOCTYPE html>
<html>
<head>
	<title>Practical -9</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		session_start();
		$data=$_SESSION["result"];
		
	?>
	<div class="center" style="width: 30%;">
		<fieldset>
			<legend>Update</legend>
				<form action="controller.php" method="post">

				<input type="hidden" name="id" required value="<?php echo $data[0] ?>">
				Name:<br>
				<input type="text" name="name" required value="<?php echo $data[1] ?>"><br>
				Email:<br>
				<input type="email" name="email" required value="<?php echo $data[3] ?>"><br>
				Password:<br>
				<input type="Password" name="pswd" required value="<?php echo $data[2] ?>">
				Confirm Password:<br>
				<input type="Password" name="c_pswd" required placeholder="please re-enter your password when if u dont want to change it">
				<br><br>
				<input type="Submit" name="action" value="Update" class="btn">
			</form>
		</fieldset>
	</div>
</body>
</html>