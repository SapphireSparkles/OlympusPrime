<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Service Add-a-Line Application</title>
  </head>
  <body>
  <style type="text/css">

  		tr:hover {background:#AAAAAA;}
		  td {
	        border-bottom: 1px solid grey;
	        padding-left: 10px;
	        padding-right:10px;
		      }
	</style>
<?php
 include "config.php";  // including configuration file
 
 ?>

<form name="frmdropdown" method="post" >
     <center>
            <h2 align="center">Service Add-a-Line Application</h2>

            <strong> Select Year : </strong> 
            <select id="OpYr" name="OpYr" > 
             <option value=""></option> 

            <?php
	  $query = "Select Years from oe_scv_addaline WHERE Years is not Null or Years !='' Group By Years"; 
	 $dd_res = $db->query($query); 
	                // $dd_res=mysqli_query("Select Years from oe_scv_addaline");
	                 while($y=mysqli_fetch_row($dd_res))
	                 { 
	                       echo "<option value='$y[0]'> $y[0] </option>";
	                 }
	             ?>
              </select>

	              <strong> Select Time Frame : </strong> 
	            <select id="OpTm" name="OpTm" > 
	             <option value=""></option> 
	            <?php
	  $query = "Select TimePeriod from oe_scv_addaline Group By TimePeriod"; 
	 $dd_res = $db->query($query); 
	                // $dd_res=mysqli_query("Select SLIC from oe_scv_addaline");
	                 while($r=mysqli_fetch_row($dd_res))
	                 { 
	                       echo "<option value='$r[0]'> $r[0] </option>";
	                 }
	             ?>
	              </select>

			<br><br>

			<center>
            <strong> Select Operation SLIC : </strong><br> 
            <select id="OpName" name="OpName" >
             <option value=""></option> 
            <option value="All"> -----------ALL----------- </option> 
            <?php
  $query = "Select SLIC, Ctr from t_SLIC_List ORDER by OP, SLIC"; 
 $dd_res = $db->query($query); 
                // $dd_res=mysqli_query("Select SLIC from oe_scv_addaline");
                 while($r=mysqli_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] _ $r[1] </option>";
                 }
             ?>
              </select>
 
     <input type="submit" name="find" value="find"/>
     <br><br>


</form>

 
     <?php 
     if($_SERVER['REQUEST_METHOD'] == "POST")
  {
        
         $op=$_POST["OpName"];
         $tm=$_POST["OpTm"];
         $yr=$_POST["OpYr"];
         
     if (! empty($_POST['OpName'])) 
         { $OPnam= $op;
         } elseif ($_POST['OpName'] =="All") {
	         $OPnam= "";
         }else  { $OPnam= "92";  }
         
     if (! empty($_POST['OpTm'])) 
         { $tmpr= $tm;
         }else  { $tmpr= "MTD";  }

//      if (! empty($_POST['OpTm'])) 
//          { $tmpr= $_POST["OpTm"];
//          } else { $tmpr= "MTD";  }
         
     if (! empty($_POST['OpYr'])) 
         { $Yrrr= $yr;
         }else  { $Yrrr= date("Y");  }
        
//      if (! empty($_POST['OpYr'])) 
//          { $Yrrr= $_POST["OpYr"];
//          } else { $Yrrr=  date("Y");  }

//$db = mysqli_connect('localhost', 'test', 'test', 'testmysql');

// 1) Must return three columns only.
// 2) Can return any number of 'ELEMENTS' - one per row
// 3) Any date range but beware you may need a wide page!
// 4) Must sort by date!

//echo $_POST['OpName'];
//echo $Yrrr;
//echo $tmpr;
//echo $OPnam;

if ($_POST['OpName'] =="All") {  
$query = mysqli_query($db, "SELECT CurrDate, CONCAT(oe_scv_addaline.Element, '</nobr></td><td><span style=\"text-align:center;white-space:nowrap;\"> ', t_slic_list.Ctr) as ELEMENTses, if(Freq >= 1, FORMAT(Freq,2), if(Freq = 0, FORMAT(Freq,0), concat(FORMAT((Freq*100),2),'%'))) as FREQses FROM oe_scv_addaline INNER JOIN t_slic_list ON oe_scv_addaline.SLIC = t_slic_list.SLIC WHERE TimePeriod = '$tmpr' AND Years = '$Yrrr'  ORDER BY CurrDate ASC ");
				 //echo "   SELECT CurrDate, CONCAT(oe_scv_addaline.Element, ' </nobr></td><td><nobr> ', t_slic_list.Ctr) as ELEMENTses, if(Freq > 1, FORMAT(Freq,2), concat(FORMAT((Freq*100),2),'%')) as FREQses FROM oe_scv_addaline INNER JOIN t_slic_list ON oe_scv_addaline.SLIC = t_slic_list.SLIC WHERE TimePeriod = '$tmpr'AND Years = '$Yrrr'  ORDER BY CurrDate ASC ";
} else {
$query = mysqli_query($db, "SELECT CurrDate, CONCAT(oe_scv_addaline.Element, '</nobr></td><td><span style=\"text-align:center;white-space:nowrap;\"> ', t_slic_list.Ctr) as ELEMENTses, if(Freq >= 1, FORMAT(Freq,2), if(Freq = 0, FORMAT(Freq,0), concat(FORMAT((Freq*100),2),'%'))) as FREQses FROM oe_scv_addaline INNER JOIN t_slic_list ON oe_scv_addaline.SLIC = t_slic_list.SLIC WHERE oe_scv_addaline.TimePeriod = '$tmpr' AND oe_scv_addaline.Years = '$Yrrr' AND oe_scv_addaline.SLIC = '$OPnam' ORDER BY CurrDate ASC  ");	
				 //echo "   SELECT CurrDate, CONCAT(oe_scv_addaline.Element, ' </nobr></td><td><nobr> ', t_slic_list.Ctr) as ELEMENTses, if(Freq > 1, FORMAT(Freq,2), concat(FORMAT((Freq*100),2),'%')) as FREQses FROM oe_scv_addaline INNER JOIN t_slic_list ON oe_scv_addaline.SLIC = t_slic_list.SLIC WHERE oe_scv_addaline.TimePeriod = '$tmpr' AND oe_scv_addaline.Years = '$Yrrr' AND oe_scv_addaline.SLIC = '$OPnam' ORDER BY CurrDate ASC  ";
}

}
//DATE_FORMAT(CurrDate, '%m/%d/%Y')
// i prefer to used named subscripts to make the code easier to read.
// These MUST match up with column alias from the above query!
define('THE_DATE', "CurrDate"); // !important
define('ELEMENTS', "ELEMENTses");         // !important
define('FREQS',   "FREQses");       // !important


if ($_POST['OpName'] =="All") {  
$query2 = "SELECT CONCAT(oe_scv_addaline.Element, '</nobr></td><td><span style=\"text-align:center;white-space:nowrap;\"> ', t_slic_list.Ctr) as ELEMENTses FROM oe_scv_addaline  INNER JOIN t_slic_list ON oe_scv_addaline.SLIC = t_slic_list.SLIC  GROUP By CONCAT(oe_scv_addaline.Element, '</nobr></td><td><span style=\"text-align:center;white-space:nowrap;\"> ', t_slic_list.Ctr) Order By CONCAT(oe_scv_addaline.Element, '</nobr></td><td><span style=\"text-align:center;white-space:nowrap;\"> ', t_slic_list.Ctr) ASC";
//echo "-- SELECT CONCAT(oe_scv_addaline.Element, ' </nobr></td><td><nobr> ', t_slic_list.Ctr) as ELEMENTses FROM oe_scv_addaline  INNER JOIN t_slic_list ON oe_scv_addaline.SLIC = t_slic_list.SLIC  GROUP By CONCAT(oe_scv_addaline.Element, ' </nobr></td><td><nobr> ', t_slic_list.Ctr) Order By CONCAT(oe_scv_addaline.Element, ' </nobr></td><td><nobr> ', t_slic_list.Ctr) ASC";
} else {
$query2 = "SELECT CONCAT(oe_scv_addaline.Element, '</nobr></td><td><span style=\"text-align:center;white-space:nowrap;\"> ', t_slic_list.Ctr) as ELEMENTses FROM oe_scv_addaline  INNER JOIN t_slic_list ON oe_scv_addaline.SLIC = t_slic_list.SLIC  WHERE oe_scv_addaline.SLIC = '$OPnam' GROUP By CONCAT(oe_scv_addaline.Element, '</nobr></td><td><span style=\"text-align:center;white-space:nowrap;\"> ', t_slic_list.Ctr) Order By CONCAT(oe_scv_addaline.Element, '</nobr></td><td><span style=\"text-align:center;white-space:nowrap;\"> ', t_slic_list.Ctr) ASC";
//echo "-- SELECT CONCAT(oe_scv_addaline.Element, ' </nobr></td><td><nobr> ', t_slic_list.Ctr) as ELEMENTses FROM oe_scv_addaline  INNER JOIN t_slic_list ON oe_scv_addaline.SLIC = t_slic_list.SLIC  WHERE oe_scv_addaline.SLIC = '$OPnam' GROUP By CONCAT(oe_scv_addaline.Element, ' </nobr></td><td><nobr> ', t_slic_list.Ctr) Order By CONCAT(oe_scv_addaline.Element, ' </nobr></td><td><nobr> ', t_slic_list.Ctr) ASC" ;
}
//$query2 = "SELECT CONCAT(`oe_scv_addaline`.`Element`, ' </nobr></td><td><nobr> ', `t_slic_list`.`Ctr`) as ELEMENTses FROM oe_scv_addaline  INNER JOIN `t_slic_list` ON `oe_scv_addaline`.`SLIC` = `t_slic_list`.`SLIC` GROUP BY CONCAT(`oe_scv_addaline`.`Element`, ' </nobr></td><td><nobr> ', `t_slic_list`.`Ctr`) Order By CONCAT(`oe_scv_addaline`.`Element`, ' </nobr></td><td><nobr> ', `t_slic_list`.`Ctr`) ASC";
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

echo 'Selected Year: <span style="color:brown" name="first_field" id="first_field"><b><u>',$Yrrr,'</u></b>&nbsp&nbsp&nbsp&nbsp</SPAN> ';
echo 'Selected Operation: <span style="color:brown" name="Secnd_field" id="Secnd_field"><b><u>',$OPnam,'</u></b>&nbsp&nbsp&nbsp&nbsp</SPAN>  '; 
echo 'Selected Time Frame: <span style="color:brown" name="Third_field" id="Third_field"><b><u>',$tmpr,'</u></b></SPAN>  <br><br>' ;



//echo '<script src="/Java/jquery.min.js"></script><table border="1">';
echo '<table border="1">';

foreach ($outputDates as $oneOutputRow) {  //for each row...

 if ($currentElementIdx % 2 == 0) {
   echo '<tr style="background-color:#d9b38c;">';  //even rows
   } 
 else {
   echo '<tr>';   //odd rows
   }
//echo '<tr>';

  // this is the first column...
  if ($currentElementIdx < 0) {
    echo '<td><B>'. 'Elements' .'</B></td><td><B><SPAN style="color:brown">Operation</SPAN></B></td>';
  }
  else {
    echo '<td><nobr>'. $allElements[$currentElementIdx] .' </SPAN></td>';
  }

  // now output the day info
  foreach($oneOutputRow as $column) {
    if ($currentElementIdx < 0) {  
		echo '<td><B>'. $column .'</B></td>';
  		}
  	else {
	  	echo '<td>'. $column .'</td>';
  		}
	}

  echo '</tr>';  //end of individual row
  $currentElementIdx++; // next output row...

}
echo '</table>';

?>



</body>
</html>