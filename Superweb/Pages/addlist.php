


<?php
include ("../coonect.php");
include ("../inc/queries.php");

   $EID = mysqli_real_escape_string($db,$_GET["eid"]);
   $RPTID = mysqli_real_escape_string($db,$_GET["RPTID"]);
    $SLIC = mysqli_real_escape_string($db,$_GET["SLIC"]);
   $Status = $_GET["Status"];

 $SlicLen = strlen($SLIC);  


  if ($SlicLen < "1"){
 	$SLIC = "NONE";
  }


if ($Status == 'Remove') {

  $result = $db->query("Delete from emp_reports_email where rpt_id = '".$RPTID."' and emp_id = '".$EID."'");

	echo '1';

} elseif ($Status == 'Add') {
$row = $Useremail->fetch_assoc();
 $Email = $row["email"];


   $sql = "INSERT INTO emp_reports_email(rpt_id, email, emp_id, slic) VALUES ('$RPTID', '$Email', '$EID', '$SLIC')";
   if(mysqli_query($db, $sql)){ 
	echo '1';
	    
	   
	   
   }else{
		//  echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
	} elseif ($Status == 'OPTOUT') {
	  $result = $db->query("UPDATE emp_info SET opt=true WHERE emp_id = '".$EID."'");

	echo '1';
	}

?>