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

/*
 * Some test data base on:
 * Date     |Role      |Name
   =============================
   01/02/14 |Musician  |Bob
   01/02/14 |Leader    |Jerry
   01/02/14 |Singer    |Carol
   08/02/14 |Musician  |Charles
   08/02/14 |Leader    |Baz
   08/02/14 |Singer    |Norman
 *
 */

 /* sample output:
  *
  * Role     |01/02/14  |08/02/14
    ===============================
    Musician |Bob       |Charles
    Leader   |Jerry     |Baz
    Singer   |Carol     |Norman
  */

//$db = mysqli_connect('localhost', 'test', 'test', 'testmysql');

// 1) Must return three columns only.
// 2) Can return any number of 'ELEMENTS' - one per row
// 3) Any date range but beware you may need a wide page!
// 4) Must sort by date!  
$query = mysqli_query($db, "SELECT SLIC, CurrDate, Element, if(Freq > 1, FORMAT(Freq,2), concat(FORMAT((Freq*100),2),'%')) FROM oe_scv_addaline WHERE TimePeriod = 'DAILY' AND SLIC = '92' ORDER BY CurrDate ASC ");
//DATE_FORMAT(CurrDate, '%m/%d/%Y')
// i prefer to used named subscripts to make the code easier to read.
// These MUST match up with column alias from the above query!
define('THE_DATE', "CurrDate"); // !important
define('SLICS',     'SLIC');         // !important
define('ELEMENTS',     'Element');         // !important
define('FREQS',   "if(Freq > 1, FORMAT(Freq,2), concat(FORMAT((Freq*100),2),'%'))");       // !important

/*
 * Now, we need a complete array of ELEMENTS in the order that they are to be displayed.
 *
 * These names must match with the names of the ELEMENTS in the input data.
 * They will be printed out in the order that they appear in the array.
 *
 * These are the only roles that will appear in the $outputDates array.
 * Add more and in any order to control which 'ELEMENTS' are shown.  
 *
 */

$query2 = "SELECT Element from oe_scv_addaline Group By Element Order By Element ASC";
$result = mysqli_query($db, $query2);

$allRoles = array();

while(($row =  mysqli_fetch_array($result))) {
    $allRoles[] = $row[0];
}

//$allRoles = array('End to End', 'Smalls', 'NDA_Committed Services', 'Pickup Compliance', 'Delivery Scan'); // !important

/*
 * At some point we will need an output array that we can easily traverse and
 * print out as a row of dates. i.e. a 'page' of data.
 *
 * We will build it up as we go along...
 */
$outputDates = array(); // !important -- this is the 'pivoted' output array

/*
 * Start to process the input data.
 *
 * To make my life easier, i will use the 'read ahead' technique to simplify the code.
 */

$currentInputRow = mysqli_fetch_array($query);

while (isset($currentInputRow[THE_DATE])) { // process all the input array...

  // must be a new day...
  $currentDay = $currentInputRow[THE_DATE];

  // create an array to hold ALL the possible roles for this day...
  $theDayRoles = array();

  // initialise the array with default values for all the requested roles.
  foreach ($allRoles as $role) {
    $theDayRoles[$role] = '--';
  }

  // now we need to fill theDayRoles with what we actually have for the current day...
  while ($currentInputRow[THE_DATE] == $currentDay) { // loop around all records for the current day

    // set the appropiate DayELEMENTS to the current FREQS
    $theDayRoles[$currentInputRow[ELEMENTS]] = $currentInputRow[FREQS];

    // read the next input row - may be current day, new day or no more
    $currentInputRow = mysqli_fetch_array($query);
  }
  // end of day on the input for whatever reason...

  /* we now have:
   *   1) Current Date
   *
   *   2) an array of members for ALL the roles on that day.
   *
   *   We need to output it to another array ($outputDates) where we can print it out
   *   by scanning the array line by line later.
   *
   *   I will 'pivot' the array and produce an output array we can scan sequentially later.
   */

   // to ensure that we are updating the correct $outputDates row i will use a subscript
   $currentOutputRowIdx = 0;

   // first add the current date to the output...
   $outputDates[$currentOutputRowIdx][] = $currentDay;
   $currentOutputRowIdx++; // next output row

   // we need to drive off the '$allRoles' array to add the role data in the correct order
   foreach ($allRoles as $outRole) {
     $outputDates[$currentOutputRowIdx][] = $theDayRoles[$outRole];
     $currentOutputRowIdx++; // next output row
   }

} // end of all the input data


/*
 * Now we just need to print the outputDates array one row at a time...
 */

// need the roles as the first column...
// so we need an index for which one we are currently printing

$currentRoleIdx = -1; // increment each time but allow for the first row being the title 'Roles'

echo '<table>';
foreach ($outputDates as $oneOutputRow) {

  echo '<tr>';

  // this is the first column...
  if ($currentRoleIdx < 0) {
    echo '<td>'. 'Elements' .'</td>';
  }
  else {
    echo '<td>'. $allRoles[$currentRoleIdx] .'</td>';
  }

  // now output the day info
  foreach($oneOutputRow as $column) {
    echo '<td>'. $column .'</td>';
  }
  echo '</tr>';
  $currentRoleIdx++; // next output Role to show...

}
echo '</table>';

?>
</body>
</html>



//echo $columns;
//mysqli_fetch_field(result);

//var_dump($values);