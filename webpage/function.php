<?
	session_start();

	function connect()
	{
		// edit this when you set up the server
		$con=mysqli_connect("localhost","root","root","stockdb");
		// Check connection
		if (mysqli_connect_errno()) {
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{ return $con;
		}

	}
// 	$con = connect();
	function validateUser(){
		$con = connect();
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$username' AND password='$password'");
		while($row = mysqli_fetch_array($result)) 
		{
			$_SESSION['user_logged_in'] = $row['username'];
			$_SESSION['info'] = $row['info'];
			// ^ session[stock] = blah
			//echo $_SESSION['user_logged_in'];
			//echo 'good'; 
			header('Location: home.php');
		}
		
		if(!isset($_SESSION['user_logged_in']))
		{
			echo 'bad';
		}

	}

?>
