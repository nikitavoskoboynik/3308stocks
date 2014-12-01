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


$file = fopen("quoteInfo.csv","w");
foreach($stockList as $line)
	foreach($line as $stock){
{
    ?> stock = <?php echo $stock; ?>
    <?php
    
    $format = "sl1d1t1";
    usleep(100000);
	$s = file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$stock&f=$format&e=.csv");
	$data = explode(',', $s);
            
    fputcsv($file, $data);
    
  }  
}
fclose($file);
?>
