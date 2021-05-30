<!DOCTYPE html>
<html>
<head>
	<title> Assignment 4</title>
</head>
<body>
	<h1 align="center">Student Registration</h1>
	<form name="from1" action="assign4-2b.php" method="post">
		<table align="center">
			<tr>
				<td>Name:-</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Gender:-</td>
				<td><input type="radio" name="gender" value="Female" required>Female<br>
					<input type="radio" name="gender" value="Male" >Male</td>
			</tr>
			<tr>
				<td>Phone no:-</td>
				<td><input type="text" name="phoneno" required></td>
			</tr>
			<tr>
				<td>Email:-</td>
				<td><input type="Email" name="email" required></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Save"></td>
				<td><input type="reset" name="reset" value="Clear"></td>
			</tr>
		</table>
	</form>
</body>
</html>