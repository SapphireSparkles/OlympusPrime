<?php


//Current Report List
$Current_reports = $db->query('SELECT sub_reports.rpt_Name, sub_reports.rpt_Desc ,sub_scriptions.rpt_ID FROM (sub_emplist INNER JOIN sub_scriptions ON sub_emplist.EEID = sub_scriptions.EEID) INNER JOIN sub_reports ON sub_scriptions.rpt_ID = sub_reports.rpt_ID WHERE sub_emplist.EEID = '. $EID. ' ' ); 


$openreports =  $db->query('select * from sub_reports where sub_reports.activated = true and sub_reports.rpt_ID IN (select sub_scriptions.rpt_ID from sub_scriptions where sub_scriptions.EEID <> '. $EID. ')');
$allreports =  $db->query('select * from sub_reports where sub_reports.activated = true ORDER BY rpt_Name ');
// $allslics =  $db->query('select * from tbl_slic');

$userinfo =  $db->query("SELECT * FROM  sub_emplist  WHERE  EEID = '$EID'");
//check if currently in the database 
function recordExists($db, $where) { 
$query = "SELECT * FROM  sub_emplist  WHERE  EEID = '$where'"; 
$result = $db->query($query); 
if($result->num_rows > 0) {
 return true; // The record(s) do exist 
} 
return false; // No record found 
}
function reportcheck($db, $EID, $RPTID ) { 
$query = "SELECT * FROM  sub_scriptions   WHERE  EEID = '$EID' and  rpt_ID='$RPTID'"; 
$result = $db->query($query); 
if($result->num_rows > 0) {
 return true; // The record(s) do exist 
} 
return false; // No record found 
}
function reportSLIC($db, $EID, $RPTID ) { 
$query = "SELECT * FROM  sub_scriptions   WHERE  EEID = '$EID' and  rpt_ID='$RPTID'"; 
$result = $db->query($query); 
$theslic = "";
while ( $row3 = $result->fetch_assoc() ) { 
	 $theslic = $theslic . " " . $row3['slic'];

}
echo $theslic;
}

function txtcheck($db, $EID) { 
$query = "SELECT * FROM  sub_emplist  WHERE  EEID = '$EID' and cell ='' and opt = false"; 
$result = $db->query($query); 
if($result->num_rows > 0) {
 return true; // The record(s) do exist 
} 
return false; // No record found 
}


function Username($db, $EID ) { 
$query = "SELECT * FROM  sub_emplist  WHERE  EEID = '$EID'"; 
$result = $db->query($query); 

while ( $row4 = $result->fetch_assoc() ) { 
	echo "Hello " . $row4['name_first'] . " " . $row4['name_last'];

}

}
$Useremail = $db->query('SELECT * FROM `sub_emplist` WHERE 
sub_emplist.EEID = '. $EID. ' ' ); 

function Dropdownme($db,$EID,$rpt_ID,$Status) { 

$result =  $db->query('select * from tbl_slic'); 

if($result->num_rows > 0) {
 	echo  "<select name='SLIC' id='SLIC'> <option value = ''>---Select---</option>";
while ( $row2 = $result->fetch_assoc() ) { 
	 echo "<option  value='eid=" . $EID . "&RPTID=" . $rpt_ID . "&SLIC=" .$row2['Slic'] ."&Status=". $Status ."'>".$row2['Slic']." - " .$row2['Ctr']." </option>";
}
echo "</select>";
} 
return false; // No record found 



}

function Dropdowncarrier($db,$curcarrier) { 

$result =  $db->query('select * from tbl_phone'); 

if($result->num_rows > 0) {
	
	if($curcarrier==""){
 	echo  "<select name='CARRIER'   class='form-control' id='CARRIER'> <option value = ''>---Select---</option>";
while ( $row4 = $result->fetch_assoc() ) { 
	 echo "<option  value='".$row4['Carrier'] ."'>".$row4['Carrier']." </option>";
}
echo "</select>";
} else{
	echo  "<select name='CARRIER'  class='form-control' id='CARRIER'> <option value = ''>---Select---</option>";
while ( $row4 = $result->fetch_assoc() ) { 
	if($curcarrier==$row4['Carrier']){
	 echo "<option  value='".$row4['Carrier'] ."' selected='selected' >".$row4['Carrier']." </option>";
 }else{
	  echo "<option  value='".$row4['Carrier'] ."'  >".$row4['Carrier']." </option>";
}}
echo "</select>";
 }}
return false; // No record found 
}


?>