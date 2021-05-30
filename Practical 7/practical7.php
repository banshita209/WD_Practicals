<!DOCTYPE html>
<html>
<head>
	<title>Practical 7</title>
	<style type="text/css">
		.sty{
			width: 100%;
		}
	</style>
</head>
<body>
	<fieldset>
	<legend>Student Registration</legend>
		<form name="from1" action="practical7b.php" method="post">
		Name:-
		<input type="text" name="name" required class="sty">
		<br><br>
		Gender:-
		<input type="radio" name="gender" value="Female" required >Female 
			&nbsp;&nbsp;
		<input type="radio" name="gender" value="Male" >Male <br><br>
		Phone no:-
		<input type="text" name="phoneno" required class="sty">
		Email:-
		<input type="Email" name="email" required class="sty">
		<br><br>
		<input type="submit" name="submit" value="Register" class="sty">
	</form>
	</fieldset>

</body>
</html>
