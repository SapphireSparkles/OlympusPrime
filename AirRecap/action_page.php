<?php 


$Date =$_GET['date']; 
$sort =$_GET['sort']; 
$manager =$_GET['manager']; 
$Notes =$_GET['Notes']; 
$inplan =$_GET['inplan']; 
$inact =$_GET['inact']; 
$inex =$_GET['inex']; 
 $mopl =$_GET['mopl']; 
$moac =$_GET['moac']; 
$moex =$_GET['moex'];
$inplan =$_GET['inplan']; 
$inact =$_GET['inact']; 
$inex =$_GET['inex']; 
$NHPL =$_GET['NHPL']; 
$NHAC =$_GET['NHAC']; 
$NHExp =$_GET['NHExp']; 
$libpl =$_GET['libpl']; 
$libac =$_GET['libac']; 
$libex =$_GET['libex']; 
$e3pl =$_GET['e3pl']; 
$e3ac =$_GET['e3ac']; 
$e3ex =$_GET['e3ex']; 
$hopl =$_GET['hopl']; 
$hoac =$_GET['hoac']; 
$hoex =$_GET['hoex']; 
$hovpl =$_GET['hovpl']; 
$hovac =$_GET['hovac']; 
$hovex =$_GET['hovex']; 
$ilnppl =$_GET['ilnppl']; 
$ilnopac =$_GET['ilnopac']; 
$ilnpex =$_GET['ilnpex']; 
$ivnppl =$_GET['ivnppl']; 
$ivnpac =$_GET['ivnpac']; 
$ivnpex =$_GET['ivnpex']; 
$nclpl =$_GET['nclpl']; 
$nclac =$_GET['nclac']; 
$nclex =$_GET['nclex']; 
$ncvpl =$_GET['ncvpl']; 
$ncvac =$_GET['ncvac']; 
$ncvex =$_GET['ncvex']; 
$brakpl =$_GET['brakpl']; 
$brakac =$_GET['brakac']; 
$brakex =$_GET['brakex']; 
$slfpl =$_GET['slfpl']; 
$slfac =$_GET['slfac']; 
$slfex =$_GET['slfex']; 
$missloadpl =$_GET['missloadpl']; 
$missloadac =$_GET['missloadac']; 
$missloadex =$_GET['missloadex']; 
$dspl =$_GET['dspl']; 
$dsac =$_GET['dsac']; 
$dsex =$_GET['dsex']; 
$sbpl =$_GET['sbpl']; 
$sbac =$_GET['sbac']; 
$sbex =$_GET['sbex']; 
$dmgpl =$_GET['dmgpl']; 
$dmgac =$_GET['dmgac']; 
$dmgex =$_GET['dmgex']; 
$otdpl =$_GET['otdpl']; 
$otdac =$_GET['otdac']; 
$otdex =$_GET['otdex']; 

$tmpl =$_GET['tmpl']; 
$tmac =$_GET['tmac']; 
$tmex =$_GET['tmex']; 
$mnrpl =$_GET['mnrpl']; 
$mnrac =$_GET['mnrac']; 
$mnrex =$_GET['mnrex']; 
$svpl =$_GET['svpl']; 
$svac =$_GET['svac']; 
$svex =$_GET['svex']; 
$ivpl =$_GET['ivpl']; 
$ivac =$_GET['ivac']; 
$ivex =$_GET['ivex']; 
$smvpl =$_GET['smvpl']; 
$smvac =$_GET['smvac']; 
$smvex =$_GET['smvex']; 
$hppl =$_GET['hppl']; 
$hpac =$_GET['hpac']; 
$hpex =$_GET['hpex']; 
$thpl =$_GET['thpl']; 
$thac =$_GET['thac']; 
$thex =$_GET['thex']; 
$bhpl =$_GET['bhpl']; 
$bhac =$_GET['bhac']; 
$bhex =$_GET['bhex']; 
$msdpl =$_GET['msdpl']; 
$msdac =$_GET['msdac']; 
$msdex =$_GET['msdex'];
 
$ustpl =$_GET['ustpl']; 
$ustac =$_GET['ustac']; 
$ustex =$_GET['ustex']; 
$udtpl =$_GET['udtpl']; 
$udtac =$_GET['udtac']; 
$udtex =$_GET['udtex']; 
$sspl =$_GET['sspl']; 
$ssac =$_GET['ssac']; 
$ssex =$_GET['ssex']; 
$fphpl =$_GET['fphpl']; 
$fphac =$_GET['fphac']; 
$fphex =$_GET['fphex']; 
$swpl =$_GET['swpl']; 
$swac =$_GET['swac']; 
$swex =$_GET['swex']; 
$pdpl =$_GET['pdpl']; 
$pdac =$_GET['pdac']; 
$pdex =$_GET['pdex']; 
$prpl =$_GET['prpl']; 
$prac =$_GET['prac']; 
$prex =$_GET['prex']; 
$tppl =$_GET['tppl']; 
$tpac =$_GET['tpac']; 
$tpex =$_GET['tpex']; 
$llapl =$_GET['llapl']; 
$llaac =$_GET['llaac']; 
$llaex =$_GET['llaex']; 
$tlcpl =$_GET['tlcpl']; 
$tlcac =$_GET['tlcac']; 
$tlcex =$_GET['tlcex']; 
$bspl =$_GET['bspl']; 
$bsac =$_GET['bsac']; 
$bsex =$_GET['bsex']; 

$blfnspl =$_GET['blfnspl']; 
$blfnsac =$_GET['blfnsac']; 
$blfnsex =$_GET['blfnsex']; 
$edspl =$_GET['edspl']; 
$edsac =$_GET['edsac']; 
$edsex =$_GET['edsex']; 

$iohpl =$_GET['iohpl']; 
$iohac =$_GET['iohac']; 
$iohex =$_GET['iohex']; 
$ptrspl =$_GET['ptrspl']; 
$ptrsac =$_GET['ptrsac']; 
$ptrsex =$_GET['ptrsex']; 


?>
<style>
body {
    font: normal 9px Verdana, Arial, sans-serif;
}
</style>


<table class="editorDemoTable" border="1" style="vertical-align: top; width: 100%;" width="100%" height="4247">
<tbody>
<tr style="height: 31px;">
<td style=" height: 31px;" colspan="1"><span style="color: #000000;"><strong>Date:</strong></span></td>
<td style=" height: 31px;" colspan="1"><span ><strong><input id="date"  type="text" Value="<?php echo $Date; ?>" /></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style=" height: 31px;" colspan="1"><span style="color: #000000;"><strong>Sort Name:</strong></span></td>
<td style=" height: 31px;" colspan="1"><span ><strong><input id="date" type="text" Value="<?php echo $sort; ?>" /></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style=" height: 31px;" colspan="1"><span style="color: #000000;"><strong>Manager Name:</strong></span></td>
<td style=" height: 31px;" colspan="1"><span ><strong><input id="date"  type="text" Value="<?php echo $manager; ?>" /></strong></span></td>
</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="5"><span style="color: #ffffff;"><strong>OPERATIONAL NOTES:</strong></span></td>
</tr>
<tr style="height: 88px;">
<td colspan="5; ?>" style="height: 88px; "><strong><span > <?php echo $Notes; ?>
</span></strong></td>
</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="2"><strong><span style="color: #ffffff;">PEOPLE:</span></strong></td>
<td style="height: 23px; width: 10%;"><strong><span style="color: #ffffff;">Plan:</span></strong></td>
<td style="height: 23px; width: 10%;"><span style="color: #ffffff;"><strong>Actual:</strong></span></td>
<td style="height: 23px; width: 60%;;"><strong><span style="color: #ffffff;">Explanation:</span></strong></td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;"># of Injuries:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $inplan; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $inact; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $inex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">New Hire Turnover:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $NHPL; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $NHAC; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $NHExp; ?>
</td>
</tr>
<tr style="background-color: #3e759e; height: 23px;">
<td style="height: 21px;" colspan="2"><span style="color: #ffffff;"><strong>SERVICE:</strong></span></td>
<td style="height: 21px; width: 10%;"><span style="color: #ffffff;"><strong>Plan:</strong></span></td>
<td style="height: 21px; width: 10%;"><span style="color: #ffffff;"><strong>Actual:</strong></span></td>
<td style="height: 21px; width: 60%;;"><span style="color: #ffffff;"><strong>Explanation:</strong></span></td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;"># LIBs Scanned:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $libpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $libac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $libex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;"># Missed Origin Scanned:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $mopl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $moac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $moex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;"># E3 LIB:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $e3pl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $e3ac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $e3ex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Hold Over Loads:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $hopl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $hoac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $hoex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Hold Over Volume:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $hovpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $hovac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $hovex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Inbound Loads Not Processed:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ilnppl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ilnopac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $ilnpex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Inbound Volume Not Processed:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ivnppl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ivnpac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"><?php echo $ivnpex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Non-Commit Loads:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $nclpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $nclac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $nclex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Non-Commit Volume:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ncvpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ncvac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $ncvex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;"># LIB due to Breakdown:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $brakpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $brakac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"><?php echo $brakex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">SEAS Total LIB Frequency:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $slfpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $slfac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $slfex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Misload Frequency:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $missloadpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $missloadac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $missloadex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Departure Scan Frequency:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $dspl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $dsac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $dsex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">% Smalls Bagged:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $sbpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $sbac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $sbex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Dmg/Ovrgd/Plfg Frequency:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $dmgpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $dmgac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $dmgex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">On-Time Departure %:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $otdpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $otdac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $otdex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Total Mispicks:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $tmpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $tmac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $tmex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Mispicks Not Rescanned:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $mnrpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $mnrac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $mnrex; ?>
</td>
</tr>
<tr style="background-color: #3e759e; height: 23px;">
<td style="height: 21px;" colspan="2"><span style="color: #ffffff;"><strong>PERFORMANCE:</strong></span></td>
<td style="height: 21px; width: 10%;"><span style="color: #ffffff;"><strong>Plan:</strong></span></td>
<td style="height: 21px; width: 10%;"><span style="color: #ffffff;"><strong>Actual:</strong></span></td>
<td style="height: 21px; width: 60%;;"><span style="color: #ffffff;"><strong>Explanation:</strong></span></td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Sorted Volume:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $svpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $svac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $svex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Irreg Volume:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ivpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ivac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $ivex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Smalls Volume:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><?php echo $smvpl; ?></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $smvac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $smvex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Hub PPH:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $hppl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $hpac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"><?php echo $hpex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Total Hours:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $thpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $thac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $thex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Breakdown Hours Impact:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $bhpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $bhac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $bhex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">MSD % Effective:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $msdpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $msdac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $msdex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Unload Start Time:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ustpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ustac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $ustex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Unload Down Time:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $udtpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $udtac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $udtex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Sort Span:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo round($sspl,2); ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo round($ssac,2); ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $ssex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Flow per Hour:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $fphpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $fphac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $fphex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Staffing Worked:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $swpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $swac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $swex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Paid Day:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $pdpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $pdac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $pdex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Process Rate:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $prpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $prac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $prex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Trailers Processed:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $tppl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $tpac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $tpex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Late loads after 8pm / 1:30am:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $llapl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $llaac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $llaex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Target Load Cuts:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $tlcpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $tlcac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $tlcex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Belt Stops:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $bspl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $bsac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $bsex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;"></td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Bags Left for Next Sort:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $blfnspl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $blfnsac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"><?php echo $blfnsex; ?> 
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">EDS % Effective:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $edspl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $edsac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $edsex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">Inside Overtime Hours:</strong></span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $iohpl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $iohac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $iohex; ?>
</td>
</tr>
<tr style="height: 25px;">
<td style="min-width: 140px; height: 25px; width: 10%;">BSC Impact Element:</td>
<td style="height: 25px; width: 10%;;"><span style="color: #0000ff;">PTRS Overtime Hours:</span></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ptrspl; ?>" size="4" type="text" /></center></td>
<td style="height: 25px; width: 10%;"><center><input Value="<?php echo $ptrsac; ?>" size="4" type="text" /></center></td>
<td style="width: 60%;; height: 25px;"> <?php echo $ptrsex; ?>
</td>
</tr>
</tbody>
<tbody></tbody>
</table>