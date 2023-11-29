<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Q2220229 - Pivot table</title>
    <style>
      td {
        border-bottom: 1px solid grey;
        width: 10em;
      }
    </style>
  </head>

  <body>
  <?php
 include "config.php";  // including configuration file
 ?>
 
 
<?php

//$db = mysqli_connect('localhost', 'test', 'test', 'testmysql');

// 1) Must return three columns only.
// 2) Can return any number of 'ELEMENTS' - one per row
// 3) Any date range but beware you may need a wide page!
// 4) Must sort by date!  
$query = mysqli_query($db, "SELECT CurrDate, CONCAT(`oe_scv_addaline`.`Element`, ' </nobr></td><td><nobr> ', `t_slic_list`.`Ctr`) as ELEMENTses, if(Freq > 1, FORMAT(Freq,2), concat(FORMAT((Freq*100),2),'%')) FROM oe_scv_addaline INNER JOIN `t_slic_list` ON `oe_scv_addaline`.`SLIC` = `t_slic_list`.`SLIC` WHERE TimePeriod = 'WTD'  ORDER BY CurrDate ASC ");
//DATE_FORMAT(CurrDate, '%m/%d/%Y')
// i prefer to used named subscripts to make the code easier to read.
// These MUST match up with column alias from the above query!
define('THE_DATE', "CurrDate"); // !important
define('ELEMENTS',     'ELEMENTses');         // !important
define('FREQS',   "if(Freq > 1, FORMAT(Freq,2), concat(FORMAT((Freq*100),2),'%'))");       // !important


$query2 = "SELECT CONCAT(`oe_scv_addaline`.`Element`, ' </nobr></td><td><nobr> ', `t_slic_list`.`Ctr`) as ELEMENTses FROM oe_scv_addaline  INNER JOIN `t_slic_list` ON `oe_scv_addaline`.`SLIC` = `t_slic_list`.`SLIC` GROUP BY CONCAT(`oe_scv_addaline`.`Element`, ' </nobr></td><td><nobr> ', `t_slic_list`.`Ctr`) Order By CONCAT(`oe_scv_addaline`.`Element`, ' </nobr></td><td><nobr> ', `t_slic_list`.`Ctr`) ASC";
$result = mysqli_query($db, $query2);

$allElements = array();

while(($row =  mysqli_fetch_array($result))) {
    $allElements[] = $row[0];
}

$outputDates = array(); // !important -- this is the 'pivoted' output array


$currentInputRow = mysqli_fetch_array($query);

while (isset($currentInputRow[THE_DATE])) { // process all the input array...

  // must be a new day...
  $currentDay = $currentInputRow[THE_DATE];

  // create an array to hold ALL the possible roles for this day...
  $theDayElements = array();

  // initialise the array with default values for all the requested roles.
  foreach ($allElements as $element) {
    $theDayElements[$element] = '...';
  }

  // now we need to fill theDayRoles with what we actually have for the current day...
  while ($currentInputRow[THE_DATE] == $currentDay) { // loop around all records for the current day

    // set the appropiate DayELEMENTS to the current FREQS
    $theDayElements[$currentInputRow[ELEMENTS]] = $currentInputRow[FREQS];

    // read the next input row - may be current day, new day or no more
    $currentInputRow = mysqli_fetch_array($query);
  }
  // end of day on the input for whatever reason...


   // to ensure that we are updating the correct $outputDates row i will use a subscript
   $currentOutputRowIdx = 0;

   // first add the current date to the output...
   $outputDates[$currentOutputRowIdx][] = $currentDay;
   $currentOutputRowIdx++; // next output row

   // we need to drive off the '$allElements' array to add the role data in the correct order
   foreach ($allElements as $outElement) {
     $outputDates[$currentOutputRowIdx][] = $theDayElements[$outElement];
     $currentOutputRowIdx++; // next output row
   }

} // end of all the input data


/*
 * Now we just need to print the outputDates array one row at a time...
 */

// need the roles as the first column...
// so we need an index for which one we are currently printing

$currentElementIdx = -1; // increment each time but allow for the first row being the title 'Roles'

echo '<table border="1">';
foreach ($outputDates as $oneOutputRow) {

  echo '<tr align="center">';

  // this is the first column...
  if ($currentElementIdx < 0) {
    echo '<td>'. 'Elements' .'</td><td>Operation</td>';
  }
  else {
    echo '<td><nobr>'. $allElements[$currentElementIdx] .'</nobr></td>';
  }
  // now output the day info
  foreach($oneOutputRow as $column) {
    echo '<td>'. $column .'</td>';
  }
  echo '</tr>';
  $currentElementIdx++; // next output Role to show...

}
echo '</table>';

?>
</body>
</html>