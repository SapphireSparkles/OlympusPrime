<?php

include ("Superweb/coonect.php");
include ("Superweb/inc/queries.php");


if($Updateme==0){
if(!$EID){
include("addins/views.php");
Include "index.php";
}else {
if(RecordExists($db,$EID)== True) { 

include ("profile.php");

	
} else if(RecordExists($db,$EID)== False) { 

include ("Pages/NewUser.php");

}
}
}else{
	include ("Pages/UpdateUser.php");
}
?>
