<?
session_start();

include('functions.php'); 

	if(!isset($_SESSION['user_logged_in']))
	{
		echo "You are not logged in.";
		exit();
	}else{
		echo "You are logged in.";

	}

	echo "hello, " . $_SESSION['user_logged_in'];
	echo "you have some retarded info: " . $_SESSION['info'];

?>

<html>
	

</html>