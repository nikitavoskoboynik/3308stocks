<?php
/**
 * Class to fetch stock data from Yahoo! Finance
 *
 */
 
class YahooStock {
     
    /**
     * Array of stock code
     */
    private $stocks = array();
     
    /**
     * Parameters string to be fetched  
     */
    private $format;
 
    /**
     * Populate stock array with stock code
     *
     * @param string $stock Stock code of company   
     * @return void
     */
    public function addStock($stock)
    {
        $this->stocks[] = $stock;
    }
     
    /**
     * Populate parameters/format to be fetched
     *
     * @param string $param Parameters/Format to be fetched
     * @return void
     */
    public function addFormat($format)
    {
        $this->format = $format;
    }
 
    /**
     * Get Stock Data
     *
     * @return array
     */
    public function getQuotes()
    {       
        $result = array();     
        $format = $this->format;
        $file = fopen("history1.csv","w");
        
        $i=0;
        
        foreach ($this->stocks as $stock)
        {           
            sleep(1);
            /**
             * fetch data from Yahoo!
             * s = stock code
             * f = format
             * e = filetype
             */
             
             
            $his = file_get_contents("http://ichart.yahoo.com/table.csv?s=$stock&a=9&b=20&c=2013&d=9&e=20&f=2014&g=d&ignore=.csv");
            //$s = file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$stock&f=$format&e=.csv");
             
            /**
             * convert the comma separated data into array
             */
            
            
            $j = 1;
            
            $boom = array();
            
            $data = explode(',', $his);
            
            foreach($data as $dd)
            {
				$boom[$i][0] = $stock;
				$boom[0][$j] = $data[$j][0];
				$boom[$i+1][$j] = $data[$j][4];
				
				$j = $j+1;
			}
            
            fputcsv($file, $boom);
			
            /**
             * populate result array with stock code as key
             */
            $result[$stock] = $data;
        }
        $i = $i+1;
        fclose($file); 
        return $result;
    }
}
