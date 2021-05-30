<?php require_once 'header.php'; ?>
			<legend>Home Page</legend>
				<?php
					session_start();
					if (isset($_SESSION["name"])) 
					{
						echo '<h1>Welcome!!! '.$_SESSION["name"].'</h1>
						<h3>This is your Home page</h3>
						<form method="post">
							<input type="submit" name="btn" value="Logout" class="btn">
						</form>';
					} else {
						echo '
						<h3>This is your Home page</h3>
						<h1>You Need to login first !!! </h1>
						<a href="login.php"><button class="btn">Login</button></a>';
					}
				?>		
		</fieldset>
	</div>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
	session_destroy();
	header("location: login.php");
}
?>

