<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<?php
					session_start();
 
	?>

	<h1>Welcome!!! <?php echo $_SESSION["name"]; ?></h1>
	<h2>This is your Home page</h2>
</body>
</html>