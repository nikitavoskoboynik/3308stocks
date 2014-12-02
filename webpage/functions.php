<?
	session_start();

	function connect(){

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
	
		$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");
		while($row = mysqli_fetch_array($result)) 
		{
			$_SESSION['user_logged_in'] = $row['username'];
			$_SESSION['userID'] = $row['id'];
			$_SESSION['info'] = $row['info'];
			// ^ session[stock] = blah
			//echo $_SESSION['user_logged_in'];
			//echo 'good'; 
			header('Location: portfolio.php');
		}
		
		if(!isset($_SESSION['user_logged_in']))
		{
			header('Location: login-failed.php');
		}

	}

	 function getStockByUserId($entered_id){
        $con = connect();
        if(!isset($_SESSION['user_logged_in']))
		{
		
			echo '<p1>Please login to view your portfolio. </p1>';
		
		}else{

        	$result = mysqli_query($con,"SELECT * FROM stocks WHERE userID = '$entered_id'");    
        
        	echo '<table><tbody>
                	<tr><th>Ticker</th>
        	            <th>Purchase Price</th>
    	                <th>Current Price</th>
	                    <th>Quantity</th>
	                    <th>Current Value</th>
	                    <th>Net</th></tr>';

	        $portfolioValue = 0; //set it to their capital when implemented
	        $portfolioNet = 0; //do not change w/ capital
        	while($row = mysqli_fetch_array($result)) 
        	{
        		$currentValue = $row['quantity']*$row['currentPrice'];
        		$portfolioValue += $currentValue;
        		$netGain = $currentValue - ($row['quantity']*$row['purchasePrice']);
            	$portfolioNet += $netGain;

            	echo '<tr><td>'.$row['ticker'].'</td>
                    	  <td>'.$row['purchasePrice'].'</td>
                	      <td>'.$row['currentPrice'].'</td>
            	          <td>'.$row['quantity'].'</td>
            	          <td>'.$currentValue.'</td>
            	          <td>'.$netGain.'</td></tr>';
        	}
        	    echo '</tbody></table>';
        	    echo '<br>Total Worth: '.$portfolioValue;
        	    echo '<br>Total Net : '.$portfolioNet;
 		}
    } 

?>
