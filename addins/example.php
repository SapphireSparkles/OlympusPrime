<?php
/*
 * Include required file
 */
 set_time_limit(0);
 $rustart = getrusage();
include("ftpcrawler.php");

//echo "<pre>";

try
{
    /*
     * Create a new instance of the class
     */
    $ftpcrawler = new ftpcrawler;
    
    /*
     * Set FTP server to connect to
     */
    $ftpcrawler->server = "ftp://us-ops-sp.inside.ups.com:21/92/IND/";

    /*
     * Crawl and print the result in HTML format
     */
    print_r($ftpcrawler->crawl("xml"));
} catch (Exception $e)
{
    echo $e->getMessage();
}

function rutime($ru, $rus, $index) {
    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
     -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
}

$ru = getrusage();
echo "This process used " . rutime($ru, $rustart, "utime") .
    " ms for its computations\n";
echo "It spent " . rutime($ru, $rustart, "stime") .
    " ms in system calls\n";
?>