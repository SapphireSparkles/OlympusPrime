<?php
if(isset($_GET['submit_row']))
{
 include ("coonect.php");
 
 $Date=mysqli_real_escape_string($db,$_GET['date']);
  $OPS=mysqli_real_escape_string($db,$_GET['ops']);
 $aflight=$_GET['aflight'];
 $atail=$_GET['atail'];
 $aplan=$_GET['aplan'];
  $aact=$_GET['aact'];
 $amin=$_GET['amin'];
 $acode=$_GET['acode'];
  $aremarks=$_GET['aremarks'];
  
  
   $dflight=$_GET['dflight'];
 $dtail=$_GET['dtail'];
 $dplan=$_GET['dplan'];
  $dact=$_GET['dact'];
 $dmin=$_GET['dmin'];
 $dcode=$_GET['dcode'];
  $dremarks=$_GET['dremarks'];
  
     $sflight=$_GET['sflight'];
 $stail=$_GET['stail'];
 $splan=$_GET['splan'];
  $sact=$_GET['sact'];
 $smin=$_GET['smin'];
 $scode=$_GET['scode'];
  $sremarks=$_GET['sremarks'];
  echo count($aflight);
  
  $newdate = substr($Date, -4, 4) . "-" . substr($Date, 0,2) . "-" . substr($Date, 3,2);  
 for($i=0;$i<count($aflight);$i++)
 {
 $sql = "insert into flightdetails ('date','ops', 'type', 'flight','tail,'plan','act','mins','code','remarks') values('$newdate','$OPS','Arrival','$aflight[$i]','$atail[$i]','$aplan[$i]','$aact[$i]','$amin[$i]','$acode[$i]','$aremarks[$i]')";
 echo $sql;
 
  mysqli_query($db,$sql);	 
 
 }



for($i=0;$i<count($dflight);$i++)
 {
  
  mysqli_query($db,"insert into flightdetails values('$newdate','$OPS', 'Depart','$dflight[$i]','$dtail[$i]','$dplan[$i]','$dact[$i]','$dmin[$i]','$dcode[$i]','$dremarks[$i]')");	 
  
 }


for($i=0;$i<count($sflight);$i++)
 {
  
   mysqli_query($db,"insert into flightdetails values('$newdate','$OPS','SFAC','$sflight[$i]','$stail[$i]','$splan[$i]','$sact[$i]','$smin[$i]','$scode[$i]','$sremarks[$i]')");	 
 
 }
}
?>