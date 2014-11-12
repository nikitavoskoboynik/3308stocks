<?php

function joinFiles(array $files, $result) {
    if(!is_array($files)) {
        throw new Exception('`$files` must be an array');
    }

    $wH = fopen($result, "w+");

    foreach($files as $file) {
        $fh = fopen($file, "r");
        while(!feof($fh)) {
            fwrite($wH, fgets($fh));
        }
        fclose($fh);
        unset($fh);
        fwrite($wH, "\n"); //usually last line doesn't have a newline
    }
    fclose($wH);
    unset($wH);
}


$file= file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=AAPL+GOOG+MSFT&f=nab");
$array = array_map("str_getcsv", explode("\n", $file));
print json_encode($array);
?>
