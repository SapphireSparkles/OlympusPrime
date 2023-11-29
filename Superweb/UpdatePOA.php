<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include("coonect.php");
include("coonect2.php");
// $db3 = socaloe
 if($_POST['Thisvalue'])
 {

 $_criteria = mysqli_real_escape_string($db3,$_POST['criteria']);     //$allElements[$currentElementIdx] . $CurrSort . $outputDates[0][$ColumnNumber]
 $this_value=mysqli_real_escape_string($db3,$_POST['Thisvalue']);
 $EleValue=mysqli_real_escape_string($db3,$_POST['EleValue']);
 $OpValue=mysqli_real_escape_string($db3,$_POST['OpValue']);
 $DatesValue=mysqli_real_escape_string($db3,$_POST['DatesValue']);
 $FreqValue=mysqli_real_escape_string($db3,$_POST['FreqValue']);

 $YearString = date("Y");
 	if(ctype_alpha(substr($DatesValue, 3, 1))){
	    $TimePeriodString =  "MTD";
 	} else {
 	    $TimePeriodString =  "WTD";
	 }

$queryPct = "SELECT numpercent FROM tbl_elements WHERE ElementID = '". $EleValue . "' "	;
$result0 = $db->query($queryPct) or die($db->error);
while ( $row0 = $result0->fetch_assoc() ) { 
    $thePct = $row0['numpercent'];
}

$Pctthis_value = substr($this_value, -1,1);
$PctFreqValue = substr($FreqValue, -1,1);
if ($thePct == '%'){
    if ($Pctthis_value == '%'){  
        $this_value = floatval(preg_replace('/[^\d.]/', '', $this_value)) / 100;
    }else{
        $this_value = $this_value / 100;
        //$this_value = str_replace('%%','%',$this_value);
    }
    if ($PctFreqValue == '%'){  
        $FreqValue = floatval(preg_replace('/[^\d.]/', '', $FreqValue)) / 100;
    }else{
        $FreqValue = $FreqValue / 100;
        //$FreqValue = str_replace('%%','%',$FreqValue);
    }
}
    

 //$sql = "update oe_scv_addaline set Freq='$this_value' where CONCAT(Element, SLIC, CurrDate)='$_criteria'";  
 $sql = "DELETE FROM oe_scv_addaline where CONCAT(Element, SLIC, CurrDate)='$_criteria'";  
 
//echo "<script type='text/javascript'>alert('$sql');</script>";

 	if(mysqli_query($db3, $sql)){
	    echo "Records were updated successfully.  Pctthis_value=" . $Pctthis_value. " PctFreqValue=" . $PctFreqValue. " FreqValue=" . $FreqValue. " this_value=". $this_value ;
 	} else {
 	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db3);
 	}


 //$sql = "update oe_scv_addaline set Freq='$this_value' where CONCAT(Element, SLIC, CurrDate)='$_criteria'";  
 $sql2 = "INSERT INTO `oe_scv_addaline`(`Element`, `CurrDate`, `TimePeriod`, `SLIC`, `Freq`, `POA`, `Years`) VALUES ('$EleValue','$DatesValue','$TimePeriodString','$OpValue','$FreqValue','$this_value','$YearString') " ;//'$this_value'";  

//echo "<script type='text/javascript'>alert('$sql');</script>";

 	if(mysqli_query($db3, $sql2)){
	    echo "Records were updated successfully.  sql =" . $sql2;
 	} else {
 	    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($db3);
 	}


 }
?>