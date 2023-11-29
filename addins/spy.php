<?php

 $string = "/IND/OE/DWS vs GSS/SpecialAccounts/AddALine_TargetedAcounts_MissingGSS_Scans.xlsx";
 echo $string;
 echo "<br>";
$dircount =  substr_count($string, '/');

$pieces = explode("/", $string);
echo $pieces[0];
echo "<br>"; // piece1
echo $pieces[1]; 
echo "<br>"; 
echo $pieces[2];
echo "<br>"; 
echo $pieces[3]; // piece2
echo "<br>"; 
echo $pieces[4]; // piece2
echo "<br>"; 
echo $pieces[5]; // piece2
echo "<br>";
if($dircount >=5) {

	Echo "<dir> $pieces[2]; ";
	Echo "<subdir> $pieces[3]; ";
}else {
Echo "<dir> $pieces[2]; ";
	Echo "<subdir>  ";
}


?>