<?php require_once 'header.php'; ?>
			<legend>Register</legend>
				<form action="controller.php" method="post">
				Name:<br>
				<input type="text" name="u_name" required><br>
				Email:<br>
				<input type="email" name="email" required><br>
				Password:<br>
				<input type="Password" name="pswd" required>
				Confirm Password:<br>
				<input type="Password" name="c_pswd" required>
				<br><br>
				<input type="Submit" name="submit" value="Register" class="btn">
			</form>
			<br>Have Account?<br>
			<a href="login.php">Login Here</a>	
		</fieldset>
	</div>
</body>
</html>