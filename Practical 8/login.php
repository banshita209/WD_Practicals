<?php require_once 'header.php'; ?>
			<legend>Login</legend>
			<form action="controller.php" method="post">
				Username:<br>
				<input type="text" name="u_name" required><br>
				Password:<br>
				<input type="Password" name="pswd" required>
				<br><br>
				<input type="Submit" name="submit" value="Login" class="btn">
			</form>
			<br>New User?<br>
			<a href="register.php">Register Here</a>
		</fieldset>
	</div>
</body>
</html>
