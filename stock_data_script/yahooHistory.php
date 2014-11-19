<?php

/**
    Add format/parameters to be fetched
     
    s = Symbol
    n = Name
    l1 = Last Trade (Price Only)
    d1 = Last Trade Date
    t1 = Last Trade Time
    c = Change and Percent Change
    v = Volume
 */


$csv = array_map('str_getcsv', file('sp500tick.csv'));

$stockList = array();

foreach ($csv as $v1) {
	array_push($stockList, $v1);
}

foreach($stockList as $line)
	foreach($line as $stock){
{
    ?> stock = <?php echo $stock; ?>
    <?php
    
    $hist = array();
    
    $format = "sl1d1t1";
    usleep(100000);
	
	$url = "http://ichart.yahoo.com/table.csv?s=$stock&a=9&b=20&c=2013&d=9&e=20&f=2014&g=d&ignore=.csv";
	$fp = fopen($url, "r");
	
	//$hist = fgetcsv($fp , 4096 , ','); 
	
	
	while (($line = fgetcsv($fp)) !== FALSE) {
		//$line is an array of the csv elements
		foreach($line as $cell){
			print_r($cell);
		}
	}

    //fputcsv($file, $data);
    
  }  
}
fclose($file);
?>
