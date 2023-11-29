<?php


//Current Report List
$Current_reports = $db->query('SELECT rpt_reports.report, rpt_reports.description ,emp_reports_email.rpt_id FROM (emp_info INNER JOIN emp_reports_email ON emp_info.emp_id = emp_reports_email.emp_id) INNER JOIN rpt_reports ON emp_reports_email.rpt_id = rpt_reports.rpt_id WHERE emp_info.emp_id = '. $EID. ' ' ); 


$openreports =  $db->query('select * from rpt_reports where rpt_reports.deactivated = false and rpt_reports.rpt_id IN (select emp_reports_email.rpt_id from emp_reports_email where emp_reports_email.emp_id <> '. $EID. ')');
$allreports =  $db->query('select * from rpt_reports where rpt_reports.deactivated = false ORDER BY report ');
$allslics =  $db->query('select * from tbl_slic');

$userinfo =  $db->query("SELECT * FROM  emp_info  WHERE  emp_id = '$EID'");
//check if currently in the database 
function recordExists($db, $where) { 
$query = "SELECT * FROM  emp_info  WHERE  emp_id = '$where'"; 
$result = $db->query($query); 
if($result->num_rows > 0) {
 return true; // The record(s) do exist 
} 
return false; // No record found 
}
function reportcheck($db, $EID, $RPTID ) { 
$query = "SELECT * FROM  emp_reports_email   WHERE  emp_id = '$EID' and  rpt_id='$RPTID'"; 
$result = $db->query($query); 
if($result->num_rows > 0) {
 return true; // The record(s) do exist 
} 
return false; // No record found 
}
function reportSLIC($db, $EID, $RPTID ) { 
$query = "SELECT * FROM  emp_reports_email   WHERE  emp_id = '$EID' and  rpt_id='$RPTID'"; 
$result = $db->query($query); 
$theslic = "";
while ( $row3 = $result->fetch_assoc() ) { 
	 $theslic = $theslic . " " . $row3['slic'];

}
echo $theslic;
}

function txtcheck($db, $EID) { 
$query = "SELECT * FROM  emp_info  WHERE  emp_id = '$EID' and cell ='' and opt = false"; 
$result = $db->query($query); 
if($result->num_rows > 0) {
 return true; // The record(s) do exist 
} 
return false; // No record found 
}


function Username($db, $EID ) { 
$query = "SELECT * FROM  emp_info  WHERE  emp_id = '$EID'"; 
$result = $db->query($query); 

while ( $row4 = $result->fetch_assoc() ) { 
	echo "Hello " . $row4['name_first'] . " " . $row4['name_last'];

}

}
$Useremail = $db->query('SELECT * FROM `emp_info` WHERE 
emp_info.emp_id = '. $EID. ' ' ); 

function Dropdownme($db,$EID,$rpt_id,$Status) { 

$result =  $db->query('select * from tbl_slic'); 

if($result->num_rows > 0) {
 	echo  "<select name='SLIC' id='SLIC'> <option value = ''>---Select---</option>";
while ( $row2 = $result->fetch_assoc() ) { 
	 echo "<option  value='eid=" . $EID . "&RPTID=" . $rpt_id . "&SLIC=" .$row2['Slic'] ."&Status=". $Status ."'>".$row2['Slic']." - " .$row2['Ctr']." </option>";
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