<?php

/**
    Add format/parameters to be fetched
     
  symbol, name, price, prev close, open, bid, ask, mkt cap, PE, EPS, 	
 */


$csv = array_map('str_getcsv', file('sp500tick.csv'));

$stockList = array();

foreach ($csv as $v1) {
	array_push($stockList, $v1);
}

$conn = new Mongo('localhost');
//$file = fopen("quoteInfo.csv","w");
foreach($stockList as $line)
	foreach($line as $stock){
{
    ?> stock = <?php echo $stock; ?>
    <?php
    
    $format = "sl1cxrevbaw";
    usleep(100000);
	$s = file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$stock&f=$format&e=.csv");
	$data = explode(",", $s);
    $i = 0;
    foreach($data as $ppp){
		$i++;
		 ?> <?php echo $ppp; ?>
    <?php
	}
    
	
	$servername = "localhost";
	$username = "eddie";
	$password = "12345789";
	$dbname = "3308stocks";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO StockData (ticker, last_trade, percent_change, exchange, PE, EPS, volume, 52_week_range)
	VALUES (data[0], data[1], data[2], data[3], data[4], data[5], data[6], data[7], data[8])";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	
	/* MONGODB CODE
	// access database
	$db = $conn->test;

	// access collection
	$collection = $db->items2;
    
    $collection->insert($data);
    */        
    //fputcsv($file, $data);
    
  }  
}
//fclose($file);
$conn->close();
?>
