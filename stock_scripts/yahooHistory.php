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
	array_push($csv, $v1);
}


$i=0;
$file = fopen("historyQuotes.csv","w");
foreach($csv as $line){
	
	
	foreach($line as $stock)
{
    ?> stock = <?php echo $stock; ?>
    <?php
    
    //$format = "snl1d1t1cv";
    sleep(1);
    
    $his = file_get_contents("http://ichart.yahoo.com/table.csv?s=$stock&a=9&b=20&c=2013&d=9&e=20&f=2014&g=d&ignore=.csv");
	$data = explode(',', $s);
    $boom = array();
    $j = 1;
    
    foreach($data as $dd)
    {
		$boom[$i][0] = $stock;
		$boom[0][$j] = $data[$j][0];
		$boom[$i+1][$j] = $data[$j][4];
			
		$j = $j+1;
	}
            
    fputcsv($file, $boom);
    
  }  
  
   $i=$i+1;
}
fclose($file);
?>
