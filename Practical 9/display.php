<!DOCTYPE html>
<html>
<head>
	<title>Practical 9</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="center">
		<fieldset>
			<legend>Data</legend>
			<table border="1">
				<thead>
					<td>ID</td>
					<td>Name</td>
					<td>Email</td>
					<td>Edit</td>
					<td>Delete</td>
				</thead>
				<?php
					session_start();
					
					foreach ($_SESSION["result"] as $row)
					{
						/*echo print_r($row);*/
	               		echo '<tr>
	               				<td>'.$row[0].'</td>
	               				<td>'.$row[1].'</td>
	               				<td>'.$row[3].'</td>
	               				<td><a href="controller.php?action=edit&&id='.$row[0].'">Edit</a></td>
	               				<td><a href="controller.php?action=delete&&id='.$row[0].'">Delete</a></td>
	               		</tr>';
	            	}
				?>
			</table>
			<br>
			<a href="insert.php" class="add">ADD NEW USER</a>
		</fieldset>
	</div>
</body>
</html>