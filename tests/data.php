<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Data2019');
define('DB_NAME', 'socaloe');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT ELEMENT, CurrDate ,Freq FROM oe_scv_addaline where TimePeriod ='Daily' and SLIC='DISTRICT' and Years ='2019' and CurrDate IN (SELECT MAX(CurrDate) FROM oe_scv_addaline WHERE CurrDate NOT IN (SELECT MAX(CurrDate) FROM oe_scv_addaline))" );

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);