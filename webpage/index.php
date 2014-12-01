<?php 
	include('functions.php'); 
	connect(); 
?>

<html>
	<form action="master.php" method="POST">
		<input type="text" name="Username" placeholder="Username">
		<br>
		<!-- $_POST['Username']; -->
		<input type="password" name = "Password" placeholder="Password">
		<br>
		<input type="submit" value="Submit">
	</form>
</html>