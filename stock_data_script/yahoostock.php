<?php
include_once('class.yahoostock.php');
 
$objYahooStock = new YahooStock;
 
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
$objYahooStock->addFormat("snl1d1t1cv");
 
/**
    Add company stock code to be fetched
     
    msft = Microsoft
    amzn = Amazon
    yhoo = Yahoo
    goog = Google
    aapl = Apple   
 */
$csv = array_map('str_getcsv', file('sp500tick.csv'));

foreach ($csv as $v1) {
    foreach ($v1 as $v2) {
        $objYahooStock->addStock($v2);
    }
}

// $objYahooStock->addStock("msft");

 
/**
 * Printing out the data
 */
 $file = fopen("quotesDawg.csv","w");

 
foreach( $objYahooStock->getQuotes() as $code => $stock)
{
    fputcsv($file, $stock);
    
    
    /*
    foreach($stock as $da)
    {
		 fputcsv($file, $boom);
		
	}
	* */
    /*
    ?>
    Code: <?php echo $stock[0]; ?> <br />
    Name: <?php echo $stock[1]; ?> <br />
    Last Trade Price: <?php echo $stock[2]; ?> <br />
    Last Trade Date: <?php echo $stock[3]; ?> <br />
    Last Trade Time: <?php echo $stock[4]; ?> <br />
    Change and Percent Change: <?php echo $stock[5]; ?> <br />
    Volume: <?php echo $stock[6]; ?> <br /><br />
    <?php
    * */
}
fclose($file);
?>
