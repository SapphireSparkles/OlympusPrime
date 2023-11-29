<?php
include ("coonect.php");
include ("inc/queries.php");



$Date =mysqli_real_escape_string($db,$_GET['date']); 
$sort =mysqli_real_escape_string($db,$_GET['sort']); 
$manager =mysqli_real_escape_string($db,$_GET['manager']); 
$Notes =mysqli_real_escape_string($db,$_GET['Notes']); 
$inplan =mysqli_real_escape_string($db,$_GET['inplan']); 
$inact =mysqli_real_escape_string($db,$_GET['inact']); 
$inex =mysqli_real_escape_string($db,$_GET['inex']); 
 $mopl =mysqli_real_escape_string($db,$_GET['mopl']); 
$moac =mysqli_real_escape_string($db,$_GET['moac']); 
$moex =mysqli_real_escape_string($db,$_GET['moex']);
$inplan =mysqli_real_escape_string($db,$_GET['inplan']); 
$inact =mysqli_real_escape_string($db,$_GET['inact']); 
$inex =mysqli_real_escape_string($db,$_GET['inex']); 
$NHPL =mysqli_real_escape_string($db,$_GET['NHPL']); 
$NHAC =mysqli_real_escape_string($db,$_GET['NHAC']); 
$NHExp =mysqli_real_escape_string($db,$_GET['NHExp']); 
$libpl =mysqli_real_escape_string($db,$_GET['libpl']); 
$libac =mysqli_real_escape_string($db,$_GET['libac']); 
$libex =mysqli_real_escape_string($db,$_GET['libex']); 
$e3pl =mysqli_real_escape_string($db,$_GET['e3pl']); 
$e3ac =mysqli_real_escape_string($db,$_GET['e3ac']); 
$e3ex =mysqli_real_escape_string($db,$_GET['e3ex']); 
$hopl =mysqli_real_escape_string($db,$_GET['hopl']); 
$hoac =mysqli_real_escape_string($db,$_GET['hoac']); 
$hoex =mysqli_real_escape_string($db,$_GET['hoex']); 
$hovpl =mysqli_real_escape_string($db,$_GET['hovpl']); 
$hovac =mysqli_real_escape_string($db,$_GET['hovac']); 
$hovex =mysqli_real_escape_string($db,$_GET['hovex']); 
$ilnppl =mysqli_real_escape_string($db,$_GET['ilnppl']); 
$ilnpac =mysqli_real_escape_string($db,$_GET['ilnopac']); 
$ilnpex =mysqli_real_escape_string($db,$_GET['ilnpex']); 
$ivnppl =mysqli_real_escape_string($db,$_GET['ivnppl']); 
$ivnpac =mysqli_real_escape_string($db,$_GET['ivnpac']); 
$ivnpex =mysqli_real_escape_string($db,$_GET['ivnpex']); 
$nclpl =mysqli_real_escape_string($db,$_GET['nclpl']); 
$nclac =mysqli_real_escape_string($db,$_GET['nclac']); 
$nclex =mysqli_real_escape_string($db,$_GET['nclex']); 
$ncvpl =mysqli_real_escape_string($db,$_GET['ncvpl']); 
$ncvac =mysqli_real_escape_string($db,$_GET['ncvac']); 
$ncvex =mysqli_real_escape_string($db,$_GET['ncvex']); 
$brakpl =mysqli_real_escape_string($db,$_GET['brakpl']); 
$brakac =mysqli_real_escape_string($db,$_GET['brakac']); 
$brakex =mysqli_real_escape_string($db,$_GET['brakex']); 
$slfpl =mysqli_real_escape_string($db,$_GET['slfpl']); 
$slfac =mysqli_real_escape_string($db,$_GET['slfac']); 
$slfex =mysqli_real_escape_string($db,$_GET['slfex']); 
$missloadpl =mysqli_real_escape_string($db,$_GET['missloadpl']); 
$missloadac =mysqli_real_escape_string($db,$_GET['missloadac']); 
$missloadex =mysqli_real_escape_string($db,$_GET['missloadex']); 
$dspl =mysqli_real_escape_string($db,$_GET['dspl']); 
$dsac =mysqli_real_escape_string($db,$_GET['dsac']); 
$dsex =mysqli_real_escape_string($db,$_GET['dsex']); 
$sbpl =mysqli_real_escape_string($db,$_GET['sbpl']); 
$sbac =mysqli_real_escape_string($db,$_GET['sbac']); 
$sbex =mysqli_real_escape_string($db,$_GET['sbex']); 
$dmgpl =mysqli_real_escape_string($db,$_GET['dmgpl']); 
$dmgac =mysqli_real_escape_string($db,$_GET['dmgac']); 
$dmgex =mysqli_real_escape_string($db,$_GET['dmgex']); 
$otdpl =mysqli_real_escape_string($db,$_GET['otdpl']); 
$otdac =mysqli_real_escape_string($db,$_GET['otdac']); 
$otdex =mysqli_real_escape_string($db,$_GET['otdex']); 

$tmpl =mysqli_real_escape_string($db,$_GET['tmpl']); 
$tmac =mysqli_real_escape_string($db,$_GET['tmac']); 
$tmex =mysqli_real_escape_string($db,$_GET['tmex']); 
$mnrpl =mysqli_real_escape_string($db,$_GET['mnrpl']); 
$mnrac =mysqli_real_escape_string($db,$_GET['mnrac']); 
$mnrex =mysqli_real_escape_string($db,$_GET['mnrex']); 
$svpl =mysqli_real_escape_string($db,$_GET['svpl']); 
$svac =mysqli_real_escape_string($db,$_GET['svac']); 
$svex =mysqli_real_escape_string($db,$_GET['svex']); 
$ivpl =mysqli_real_escape_string($db,$_GET['ivpl']); 
$ivac =mysqli_real_escape_string($db,$_GET['ivac']); 
$ivex =mysqli_real_escape_string($db,$_GET['ivex']); 
$smvpl =mysqli_real_escape_string($db,$_GET['smvpl']); 
$smvac =mysqli_real_escape_string($db,$_GET['smvac']); 
$smvex =mysqli_real_escape_string($db,$_GET['smvex']); 
$hppl =mysqli_real_escape_string($db,$_GET['hppl']); 
$hpac =mysqli_real_escape_string($db,$_GET['hpac']); 
$hpex =mysqli_real_escape_string($db,$_GET['hpex']); 
$thpl =mysqli_real_escape_string($db,$_GET['thpl']); 
$thac =mysqli_real_escape_string($db,$_GET['thac']); 
$thex =mysqli_real_escape_string($db,$_GET['thex']); 
$bhpl =mysqli_real_escape_string($db,$_GET['bhpl']); 
$bhac =mysqli_real_escape_string($db,$_GET['bhac']); 
$bhex =mysqli_real_escape_string($db,$_GET['bhex']); 
$msdpl =mysqli_real_escape_string($db,$_GET['msdpl']); 
$msdac =mysqli_real_escape_string($db,$_GET['msdac']); 
$msdex =mysqli_real_escape_string($db,$_GET['msdex']);
 
$ustpl =mysqli_real_escape_string($db,$_GET['ustpl']); 
$ustac =mysqli_real_escape_string($db,$_GET['ustac']); 
$ustex =mysqli_real_escape_string($db,$_GET['ustex']); 
$udtpl =mysqli_real_escape_string($db,$_GET['udtpl']); 
$udtac =mysqli_real_escape_string($db,$_GET['udtac']); 
$udtex =mysqli_real_escape_string($db,$_GET['udtex']); 
$sspl =mysqli_real_escape_string($db,$_GET['sspl']); 
$ssac =mysqli_real_escape_string($db,$_GET['ssac']); 
$ssex =mysqli_real_escape_string($db,$_GET['ssex']); 
$fphpl =mysqli_real_escape_string($db,$_GET['fphpl']); 
$fphac =mysqli_real_escape_string($db,$_GET['fphac']); 
$fphex =mysqli_real_escape_string($db,$_GET['fphex']); 
$swpl =mysqli_real_escape_string($db,$_GET['swpl']); 
$swac =mysqli_real_escape_string($db,$_GET['swac']); 
$swex =mysqli_real_escape_string($db,$_GET['swex']); 
$pdpl =mysqli_real_escape_string($db,$_GET['pdpl']); 
$pdac =mysqli_real_escape_string($db,$_GET['pdac']); 
$pdex =mysqli_real_escape_string($db,$_GET['pdex']); 
$prpl =mysqli_real_escape_string($db,$_GET['prpl']); 
$prac =mysqli_real_escape_string($db,$_GET['prac']); 
$prex =mysqli_real_escape_string($db,$_GET['prex']); 
$tppl =mysqli_real_escape_string($db,$_GET['tppl']); 
$tpac =mysqli_real_escape_string($db,$_GET['tpac']); 
$tpex =mysqli_real_escape_string($db,$_GET['tpex']); 
$llapl =mysqli_real_escape_string($db,$_GET['llapl']); 
$llaac =mysqli_real_escape_string($db,$_GET['llaac']); 
$llaex =mysqli_real_escape_string($db,$_GET['llaex']); 
$tlcpl =mysqli_real_escape_string($db,$_GET['tlcpl']); 
$tlcac =mysqli_real_escape_string($db,$_GET['tlcac']); 
$tlcex =mysqli_real_escape_string($db,$_GET['tlcex']); 
$bspl =mysqli_real_escape_string($db,$_GET['bspl']); 
$bsac =mysqli_real_escape_string($db,$_GET['bsac']); 
$bsex =mysqli_real_escape_string($db,$_GET['bsex']); 

$blfnspl =mysqli_real_escape_string($db,$_GET['blfnspl']); 
$blfnsac =mysqli_real_escape_string($db,$_GET['blfnsac']); 
$blfnsex =mysqli_real_escape_string($db,$_GET['blfnsex']); 
$edspl =mysqli_real_escape_string($db,$_GET['edspl']); 
$edsac =mysqli_real_escape_string($db,$_GET['edsac']); 
$edsex =mysqli_real_escape_string($db,$_GET['edsex']); 

$iohpl =mysqli_real_escape_string($db,$_GET['iohpl']); 
$iohac =mysqli_real_escape_string($db,$_GET['iohac']); 
$iohex =mysqli_real_escape_string($db,$_GET['iohex']); 
$ptrspl =mysqli_real_escape_string($db,$_GET['ptrspl']); 
$ptrsac =mysqli_real_escape_string($db,$_GET['ptrsac']); 
$ptrsex =mysqli_real_escape_string($db,$_GET['ptrsex']); 
// reference the Dompdf namespace
$url = $_SERVER['QUERY_STRING'];
$Date =$_GET['date'];
$newdate = substr($Date, -4, 4) . "-" . substr($Date, 0,2) . "-" . substr($Date, 3,2);  
$sort =$_GET['sort'];
$manager =$_GET['manager'];
$sourceurl = "http://uwkp0008fa2e:8080/Recap/action_page.php?" .$url;

require_once 'dompdf/lib/html5lib/Parser.php';

require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();
use Dompdf\Dompdf as Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option('isHtml5ParserEnabled', true);


// Load into DomPDF from the external HTML file
$content = file_get_contents($sourceurl);

$dompdf->loadHtml($content);

// Render and download
$dompdf->render();
//$dompdf->stream();
  $output = $dompdf->output();
    file_put_contents('Recaps_PDF/Daily Recap '. $sort . ' on ' . $newdate . '.pdf', $output);
    
// Insert database stuff
  $sql = "INSERT INTO datatable (SortDate, SlicSort, ManagerName, OpNotes, InjPlan, InjAct, InjExp, NHTOplan, NHTOact, NHTOexp, LIBscansPln, LIBscansAct, LIBscansExp, MOscansPln, MOscansAct, MOscansExp, EThreePln, EThreeAct, EThreeExp, BDLIBpln, BDLIBact, BDLIBexp, LIBfreqPln, LIBfreqAct, LIBfreqExp, MisloadPln, MisloadAct, MisloadExp, DeptPln, DeptAct, DeptExp, SmallsPln, SmallsAct, SmallsExp, DamgPln, DamgAct, DamgExp, OnTimePln, OnTimeAct, OnTimeExp, MispickPln, MispickAct, MispickExp, MispickNotPln, MispickNotAct, MispickNotExp, SortVolPln, SortVolAct, SortVolExp, IrrgVolPln, IrrgVolAct, IrrgVolExp, SmallVolPln, SmallVolAct, SmallVolExp, HubPPHPln, HubPPHact, HubPPHExp, TotHoursPln, TotHoursAct, TotHoursExp, BDHrsPln, BDHrsAct, BDHrsExp, MSDPctEffPln, MSDPctEffAct, MSDPctEffExp, UnldStTmPln, UnldStTmAct, UnldStTmExp, UnldEndTmPln, UnldEndTmAct, UnldEndTmExp, SrtSpanPln, SrtSpanAct, SrtSpanExp, FPHpln, FPHact, FPHexp, StaffWrkPln, StaffWrkAct, StaffWrkExp, PaidDayPln, PaidDayAct, PaidDayExp, ProcRatePln, ProcRateAct, ProcRateExp, TrlsProcPln, TrlsProcAct, TrlsProcExp, LateLoadsPln, LateLoadsAct, LateLoadsExp, TrgtLoadCutsPln, TrgtLoadCutsAct, TrgtLoadCutsExp, BeltStopPln, BeltStopAct, BeltStopExp, BagsLeftPln, BagsLeftAct, BagsLeftExp, EDSpln, EDSact, EDSexp, InsideOTpln, InsideOTact, InsideOTexp, PTRSOTpln, PTRSOTact, PTRSOTexp, HoLdPln, HoLdAct, HoLdExp, HoVolPln, HoVolAct, HoVolExp, IbLdNotProcPln, IbLdNotProcAct, IbLdNotProcExp, IbVolNotProcPln, IbVolNotProcAct, IbVolNotProcExp, NcLdPln, NcLdAct, NcLdExp, NcVolPln, NcVolAct, NcVolExp) VALUES ('$newdate', '$sort', '$manager', '$Notes', '$inplan', '$inact', '$inex', '$NHPL', '$NHAC', '$NHExp', '$libpl', '$libac', '$libex', '$mopl', '$moac', '$moex', '$e3pl', '$e3ac', '$e3ex', '$brakpl', '$brakac', '$brakex', '$slfpl', '$slfac', '$slfex', '$missloadpl', '$missloadac', '$missloadex', '$dspl', '$dsac', '$dsex', '$sbpl', '$sbac', '$sbex', '$dmgpl', '$dmgac', '$dmgex', '$otdpl', '$otdac', '$otdex', '$tmpl', '$tmac', '$tmex', '$mnrpl', '$mnrac', '$mnrex', '$svpl', '$svac', '$svex', '$ivpl', '$ivac', '$ivex', '$smvpl', '$smvac', '$smvex', '$hppl', '$hpac', '$hpex', '$thpl', '$thac', '$thex', '$bhpl', '$bhac', '$bhex', '$msdpl', '$msdac', '$msdex', '$ustpl', '$ustac', '$ustex', '$udtpl', '$udtac', '$udtex', '$sspl', '$ssac', '$ssex', '$fphpl', '$fphac', '$fphex', '$swpl', '$swac', '$swex', '$pdpl', '$pdac', '$pdex', '$prpl', '$prac', '$prex', '$tppl', '$tpac', '$tpex', '$llapl', '$llaac', '$llaex', '$tlcpl', '$tlcac', '$tlcex', '$bspl', '$bsac', '$bsex', '$blfnspl', '$blfnsac', '$blfnsex', '$edspl', '$edsac', '$edsex', '$iohpl', '$iohac', '$iohex', '$ptrspl', '$ptrsac', '$ptrsex', '$hopl', '$hoac', '$hoex', '$hovpl', '$hovac', '$hovex', '$ilnppl', '$ilnpac', '$ilnpex', '$ivnppl', '$ivnpac', '$ivnpex', '$nclpl', '$nclac', '$nclex', '$ncvpl', '$ncvac', '$ncvex')";
   if(mysqli_query($db, $sql)){ 
	
	    
	   
	   
   }else{
	echo ":'(";	//  echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
	$local = substr($sort, 0, 4). " " . substr($sort, -1, 1);
	$to = reportemails($db,$local);
$subject = 'Testing Daily Recap';
$message = 'Daily Recap IE Porttal V 0.1'; 


$from = fromemails($db,$sort);
 $filename = "Recaps_PDF/Daily Recap ". $sort . " on " . $newdate . ".pdf";
  $file = "Daily Recap ". $sort . " on " . $newdate . ".pdf";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

require_once 'PHPMailer/src/Exception.php';
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtpapps.us.ups.com";  // specify main and backup server
$mail->SMTPAuth = false;     // turn on SMTP authentication
$mail->Username = "";  // SMTP username
$mail->Password = ""; // SMTP password
$query = "SELECT * FROM  tbl_hubslics   WHERE  	SlicSort = '$sort' "; 
$result = $db->query($query); 


while ($row = $result->fetch_array()) {
    $user['email'][] = $row["SrtMgrEmail"];

}
foreach($user['email'] as $key => $email) {
	$mail->setFrom($email);
}
//$mail->FromName = "Mailer";
$query = "SELECT * FROM  email_distlists   WHERE  	DistributionName = '$local' "; 
$result = $db->query($query); 


while ($row = $result->fetch_array()) {	
    $user['email'][] = $row["EmailAdd"];

}
foreach($user['email'] as $key => $email) {
	$mail->AddAddress($email);
}
$query = "SELECT * FROM  email_distlists   WHERE  	DistributionName ='ALL' "; 
$result = $db->query($query); 


while ($row = $result->fetch_array()) {
    $user['email'][] = $row["EmailAdd"];

}
foreach($user['email'] as $key => $email) {
	$mail->AddAddress($email);
}
//$mail->AddAddress("ellen@example.com");                  // name is optional
//$mail->AddReplyTo("info@example.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
$mail->AddAttachment($filename, $file);    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Daily Hub Recap for " . $sort . " on " .$newdate;
$mail->Body    = "Attached is the Daily Hub Sort Recap for " .  $sort ."\n Sent from the IE Portal Daily Recap Beta" ;
$mail->AltBody = "Attached is the Daily Hub Sort Recap for " .  $sort . " Sent from the IE Portal Daily Recap Beta"  ;

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
<meta http-equiv="refresh" content="0;url=../../">