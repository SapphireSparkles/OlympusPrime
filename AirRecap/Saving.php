 <?php  

include ("coonect.php");
include ("inc/queries.php");

 
/*Get the posted values from the form*/

$Date =$_POST['date']; 
$sort =$_POST['sort']; 
$manager =$_POST['manager']; 
$Notes =$_POST['Notes']; 
$inplan =$_POST['inplan']; 
$inact =$_POST['inact']; 
$inex =$_POST['inex']; 
 $mopl =$_POST['mopl']; 
$moac =$_POST['moac']; 
$moex =$_POST['moex'];
$inplan =$_POST['inplan']; 
$inact =$_POST['inact']; 
$inex =$_POST['inex']; 
$NHPL =$_POST['NHPL']; 
$NHAC =$_POST['NHAC']; 
$NHExp =$_POST['NHExp']; 
$libpl =$_POST['libpl']; 
$libac =$_POST['libac']; 
$libex =$_POST['libex']; 
$e3pl =$_POST['e3pl']; 
$e3ac =$_POST['e3ac']; 
$e3ex =$_POST['e3ex']; 
$hopl =$_POST['hopl']; 
$hoac =$_POST['hoac']; 
$hoex =$_POST['hoex']; 
$hovpl =$_POST['hovpl']; 
$hovac =$_POST['hovac']; 
$hovex =$_POST['hovex']; 
$ilnppl =$_POST['ilnppl']; 
$ilnopac =$_POST['ilnopac']; 
$ilnpex =$_POST['ilnpex']; 
$ivnppl =$_POST['ivnppl']; 
$ivnpac =$_POST['ivnpac']; 
$ivnpex =$_POST['ivnpex']; 
$nclpl =$_POST['nclpl']; 
$nclac =$_POST['nclac']; 
$nclex =$_POST['nclex']; 
$ncvpl =$_POST['ncvpl']; 
$ncvac =$_POST['ncvac']; 
$ncvex =$_POST['ncvex']; 
$brakpl =$_POST['brakpl']; 
$brakac =$_POST['brakac']; 
$brakex =$_POST['brakex']; 
$slfpl =$_POST['slfpl']; 
$slfac =$_POST['slfac']; 
$slfex =$_POST['slfex']; 
$missloadpl =$_POST['missloadpl']; 
$missloadac =$_POST['missloadac']; 
$missloadex =$_POST['missloadex']; 
$dspl =$_POST['dspl']; 
$dsac =$_POST['dsac']; 
$dsex =$_POST['dsex']; 
$sbpl =$_POST['sbpl']; 
$sbac =$_POST['sbac']; 
$sbex =$_POST['sbex']; 
$dmgpl =$_POST['dmgpl']; 
$dmgac =$_POST['dmgac']; 
$dmgex =$_POST['dmgex']; 
$otdpl =$_POST['otdpl']; 
$otdac =$_POST['otdac']; 
$otdex =$_POST['otdex']; 

$tmpl =$_POST['tmpl']; 
$tmac =$_POST['tmac']; 
$tmex =$_POST['tmex']; 
$mnrpl =$_POST['mnrpl']; 
$mnrac =$_POST['mnrac']; 
$mnrex =$_POST['mnrex']; 
$svpl =$_POST['svpl']; 
$svac =$_POST['svac']; 
$svex =$_POST['svex']; 
$ivpl =$_POST['ivpl']; 
$ivac =$_POST['ivac']; 
$ivex =$_POST['ivex']; 
$smvpl =$_POST['smvpl']; 
$smvac =$_POST['smvac']; 
$smvex =$_POST['smvex']; 
$hppl =$_POST['hppl']; 
$hpac =$_POST['hpac']; 
$hpex =$_POST['hpex']; 
$thpl =$_POST['thpl']; 
$thac =$_POST['thac']; 
$thex =$_POST['thex']; 
$bhpl =$_POST['bhpl']; 
$bhac =$_POST['bhac']; 
$bhex =$_POST['bhex']; 
$msdpl =$_POST['msdpl']; 
$msdac =$_POST['msdac']; 
$msdex =$_POST['msdex'];
 
$ustpl =$_POST['ustpl']; 
$ustac =$_POST['ustac']; 
$ustex =$_POST['ustex']; 
$udtpl =$_POST['udtpl']; 
$udtac =$_POST['udtac']; 
$udtex =$_POST['udtex']; 
$sspl =$_POST['sspl']; 
$ssac =$_POST['ssac']; 
$ssex =$_POST['ssex']; 
$fphpl =$_POST['fphpl']; 
$fphac =$_POST['fphac']; 
$fphex =$_POST['fphex']; 
$swpl =$_POST['swpl']; 
$swac =$_POST['swac']; 
$swex =$_POST['swex']; 
$pdpl =$_POST['pdpl']; 
$pdac =$_POST['pdac']; 
$pdex =$_POST['pdex']; 
$prpl =$_POST['prpl']; 
$prac =$_POST['prac']; 
$prex =$_POST['prex']; 
$tppl =$_POST['tppl']; 
$tpac =$_POST['tpac']; 
$tpex =$_POST['tpex']; 
$llapl =$_POST['llapl']; 
$llaac =$_POST['llaac']; 
$llaex =$_POST['llaex']; 
$tlcpl =$_POST['tlcpl']; 
$tlcac =$_POST['tlcac']; 
$tlcex =$_POST['tlcex']; 
$bspl =$_POST['bspl']; 
$bsac =$_POST['bsac']; 
$bsex =$_POST['bsex']; 

$blfnspl =$_POST['blfnspl']; 
$blfnsac =$_POST['blfnsac']; 
$blfnsex =$_POST['blfnsex']; 
$edspl =$_POST['edspl']; 
$edsac =$_POST['edsac']; 
$edsex =$_POST['edsex']; 

$iohpl =$_POST['iohpl']; 
$iohac =$_POST['iohac']; 
$iohex =$_POST['iohex']; 
$ptrspl =$_POST['ptrspl']; 
$ptrsac =$_POST['ptrsac']; 
$ptrsex =$_POST['ptrsex']; 
/*Get user id*/
$newdate = substr($Date, -4, 4) . "-" . substr($Date, 0,2) . "-" . substr($Date, 3,2);

 $query = "SELECT * FROM  autosave  WHERE  SortDate = '$newdate' and SlicSort = '$sort' "; 
$result = $db->query($query); 
if($result->num_rows > 0) {
 
    if(isset($Date,$sort)){
    /*Update autosave*/
     
        $query = "Update autosave set SortDate = '$newdate' ,  SlicSort = '$sort' , ManagerName = '$manager' ,  OpNotes = '$Notes' ,InjPlan = '$inplan' ,  InjAct = '$inact' ,InjExp = '$inex' ,  NHTOplan = '$NHPL' ,NHTOact = '$NHAC' ,  NHTOexp = '$NHExp' ,LIBscansPln = '$libpl' ,  LIBscansAct = '$libac' ,LIBscansExp = '$libex' ,  MOscansPln = '$mopl' ,MOscansAct = '$moac' ,  MOscansExp = '$moex' ,EThreePln = '$e3pl' ,  EThreeAct = '$e3ac' ,EThreeExp = '$e3ex' ,  BDLIBpln = '$brakpl' ,BDLIBact = '$brakac' ,  BDLIBexp = '$brakex' ,LIBfreqPln = '$slfpl' ,  LIBfreqAct = '$slfac' ,LIBfreqExp = '$slfex' ,  MisloadPln = '$missloadpl' ,MisloadAct = '$missloadac' ,  MisloadExp = '$missloadex' , DeptPln = '$dspl' ,DeptAct = '$dsac' ,  DeptExp = '$dsex' ,SmallsPln = '$sbpl' ,SmallsAct = '$sbac' ,  SmallsExp = '$sbex' ,DamgPln = '$dmgpl' ,DamgAct = '$dmgac' ,  DamgExp = '$dmgex' ,OnTimePln = '$otdpl' ,OnTimeAct = '$otdac' ,  OnTimeExp = '$otdex' ,MispickPln = '$tmpl' ,MispickAct = '$tmac' ,  MispickExp = '$tmex' ,MispickNotPln = '$mnrpl' ,MispickNotAct = '$mnrac' ,  MispickNotExp = '$mnrex' ,SortVolPln = '$svpl' ,SortVolAct = '$svac' ,  SortVolExp = '$svex' ,IrrgVolPln = '$ivpl' ,IrrgVolAct = '$ivac' ,  IrrgVolExp = '$ivex' ,SmallVolPln = '$smvpl' ,SmallVolAct = '$smvac' ,  SmallVolExp = '$smvex' ,HubPPHPln = '$hppl' ,HubPPHact = '$hpac' ,  HubPPHExp = '$hpex' ,TotHoursPln = '$thpl' ,TotHoursAct = '$thac' ,  TotHoursExp = '$thex', BDHrsPln = '$bhpl' ,  BDHrsAct = '$bhac' ,BDHrsExp = '$bhex' ,MSDPctEffPln = '$msdpl' ,  MSDPctEffAct = '$msdac' ,MSDPctEffExp = '$msdex' ,  UnldStTmPln = '$ustpl' ,UnldStTmAct = '$ustac' ,UnldStTmExp = '$ustex' ,  UnldEndTmPln = '$udtpl' ,UnldEndTmAct = '$udtac' ,  UnldEndTmExp = '$udtex' ,SrtSpanPln = '$sspl' ,SrtSpanAct = '$ssac' ,  SrtSpanExp = '$ssex' ,FPHpln = '$fphpl' ,  FPHact = '$fphac' ,FPHexp = '$fphex' ,StaffWrkPln = '$swpl' ,  StaffWrkAct = '$swac' ,StaffWrkExp = '$swex' ,  PaidDayPln = '$pdpl' ,PaidDayAct = '$pdac' ,PaidDayExp = '$pdex' ,  ProcRatePln = '$prpl'  ,  ProcRateAct = '$prac' ,ProcRateExp = '$prex' ,TrlsProcPln = '$tppl' ,  TrlsProcAct = '$tpac' ,  TrlsProcExp = '$tpex' ,LateLoadsPln = '$llapl' ,LateLoadsAct = '$llaac' ,  LateLoadsExp = '$llaex' ,  TrgtLoadCutsPln = '$tlcpl' ,TrgtLoadCutsAct = '$tlcac' ,TrgtLoadCutsExp = '$tlcex' ,  BeltStopPln = '$bspl' ,  BeltStopAct = '$bsac' ,BeltStopExp = '$bsex' ,BagsLeftPln = '$blfnspl' ,  BagsLeftAct = '$blfnsac' ,  BagsLeftExp = '$blfnsex' ,EDSpln = '$edspl' ,EDSact = '$edsac' ,  EDSexp = '$edsex' ,  InsideOTpln = '$iohpl' ,InsideOTact = '$iohac' ,InsideOTexp = '$iohex' ,  PTRSOTpln = '$ptrspl' ,  PTRSOTact = '$ptrsac' ,PTRSOTexp = '$ptrsex' ,HoLdPln = '$hopl' ,  HoLdAct = '$hoac' ,  HoLdExp = '$hoex' ,HoVolPln = '$hovpl' ,HoVolAct = '$hovac' ,  HoVolExp = '$hovex' ,  IbLdNotProcPln = '$ilnppl' ,IbLdNotProcAct = '$ilnpac' ,IbLdNotProcExp = '$ilnpex' ,  IbVolNotProcPln = '$ivnppl' ,  IbVolNotProcAct = '$ivnpac' ,IbVolNotProcExp = '$ivnpex' ,NcLdPln = '$nclpl' ,  NcLdAct = '$nclac' ,  NcLdExp = '$nclex' ,NcVolPln = '$ncvpl' ,NcVolAct = '$ncvac' ,  NcVolExp = '$ncvex' WHERE  SortDate = '$newdate' and SlicSort = '$sort' "; 
$result = $db->query($query);
        
    } else {
    /*Get saved data from database*/ 
        $query = "SELECT * FROM  autosave  WHERE  SortDate = '$newdate' and SlicSort = '$sort' "; 
$get_autosave = $db->query($query); 
        while ($gt_v = $get_autosave-> $result->fetch_assoc()) {
            $SortDate=$gt_v['SortDate'];
 $SlicSort=$gt_v['SlicSort'];
 $ManagerName=$gt_v['ManagerName'];
 $OpNotes=$gt_v['OpNotes'];
 $InjPlan=$gt_v['InjPlan'];
 $InjAct=$gt_v['InjAct'];
 $InjExp=$gt_v['InjExp'];
 $NHTOplan=$gt_v['NHTOplan'];
 $NHTOact=$gt_v['NHTOact'];
 $NHTOexp=$gt_v['NHTOexp'];
 $LIBscansPln=$gt_v['LIBscansPln'];
 $LIBscansAct=$gt_v['LIBscansAct'];
 $LIBscansExp=$gt_v['LIBscansExp'];
 $MOscansPln=$gt_v['MOscansPln'];
 $MOscansAct=$gt_v['MOscansAct'];
 $MOscansExp=$gt_v['MOscansExp'];
 $EThreePln=$gt_v['EThreePln'];
 $EThreeAct=$gt_v['EThreeAct'];
 $EThreeExp=$gt_v['EThreeExp'];
 $BDLIBpln=$gt_v['BDLIBpln'];
 $BDLIBact=$gt_v['BDLIBact'];
 $BDLIBexp=$gt_v['BDLIBexp'];
 $LIBfreqPln=$gt_v['LIBfreqPln'];
 $LIBfreqAct=$gt_v['LIBfreqAct'];
 $LIBfreqExp=$gt_v['LIBfreqExp'];
 $MisloadPln=$gt_v['MisloadPln'];
 $MisloadAct=$gt_v['MisloadAct'];
 $MisloadExp=$gt_v['MisloadExp'];
 $DeptPln=$gt_v['DeptPln'];
 $DeptAct=$gt_v['DeptAct'];
 $DeptExp=$gt_v['DeptExp'];
 $SmallsPln=$gt_v['SmallsPln'];
 $SmallsAct=$gt_v['SmallsAct'];
 $SmallsExp=$gt_v['SmallsExp'];
 $DamgPln=$gt_v['DamgPln'];
 $DamgAct=$gt_v['DamgAct'];
 $DamgExp=$gt_v['DamgExp'];
 $OnTimePln=$gt_v['OnTimePln'];
 $OnTimeAct=$gt_v['OnTimeAct'];
 $OnTimeExp=$gt_v['OnTimeExp'];
 $MispickPln=$gt_v['MispickPln'];
 $MispickAct=$gt_v['MispickAct'];
 $MispickExp=$gt_v['MispickExp'];
 $MispickNotPln=$gt_v['MispickNotPln'];
 $MispickNotAct=$gt_v['MispickNotAct'];
 $MispickNotExp=$gt_v['MispickNotExp'];
 $SortVolPln=$gt_v['SortVolPln'];
 $SortVolAct=$gt_v['SortVolAct'];
 $SortVolExp=$gt_v['SortVolExp'];
 $IrrgVolPln=$gt_v['IrrgVolPln'];
 $IrrgVolAct=$gt_v['IrrgVolAct'];
 $IrrgVolExp=$gt_v['IrrgVolExp'];
 $SmallVolPln=$gt_v['SmallVolPln'];
 $SmallVolAct=$gt_v['SmallVolAct'];
 $SmallVolExp=$gt_v['SmallVolExp'];
 $HubPPHPln=$gt_v['HubPPHPln'];
 $HubPPHact=$gt_v['HubPPHact'];
 $HubPPHExp=$gt_v['HubPPHExp'];
 $TotHoursPln=$gt_v['TotHoursPln'];
 $TotHoursAct=$gt_v['TotHoursAct'];
 $TotHoursExp=$gt_v['TotHoursExp'];
 $BDHrsPln=$gt_v['BDHrsPln'];
 $BDHrsAct=$gt_v['BDHrsAct'];
 $BDHrsExp=$gt_v['BDHrsExp'];
 $MSDPctEffPln=$gt_v['MSDPctEffPln'];
 $MSDPctEffAct=$gt_v['MSDPctEffAct'];
 $MSDPctEffExp=$gt_v['MSDPctEffExp'];
 $UnldStTmPln=$gt_v['UnldStTmPln'];
 $UnldStTmAct=$gt_v['UnldStTmAct'];
 $UnldStTmExp=$gt_v['UnldStTmExp'];
 $UnldEndTmPln=$gt_v['UnldEndTmPln'];
 $UnldEndTmAct=$gt_v['UnldEndTmAct'];
 $UnldEndTmExp=$gt_v['UnldEndTmExp'];
 $SrtSpanPln=$gt_v['SrtSpanPln'];
 $SrtSpanAct=$gt_v['SrtSpanAct'];
 $SrtSpanExp=$gt_v['SrtSpanExp'];
 $FPHpln=$gt_v['FPHpln'];
 $FPHact=$gt_v['FPHact'];
 $FPHexp=$gt_v['FPHexp'];
 $StaffWrkPln=$gt_v['StaffWrkPln'];
 $StaffWrkAct=$gt_v['StaffWrkAct'];
 $StaffWrkExp=$gt_v['StaffWrkExp'];
 $PaidDayPln=$gt_v['PaidDayPln'];
 $PaidDayAct=$gt_v['PaidDayAct'];
 $PaidDayExp=$gt_v['PaidDayExp'];
 $ProcRatePln=$gt_v['ProcRatePln'];
 $ProcRateAct=$gt_v['ProcRateAct'];
 $ProcRateExp=$gt_v['ProcRateExp'];
 $TrlsProcPln=$gt_v['TrlsProcPln'];
 $TrlsProcAct=$gt_v['TrlsProcAct'];
 $TrlsProcExp=$gt_v['TrlsProcExp'];
 $LateLoadsPln=$gt_v['LateLoadsPln'];
 $LateLoadsAct=$gt_v['LateLoadsAct'];
 $LateLoadsExp=$gt_v['LateLoadsExp'];
 $TrgtLoadCutsPln=$gt_v['TrgtLoadCutsPln'];
 $TrgtLoadCutsAct=$gt_v['TrgtLoadCutsAct'];
 $TrgtLoadCutsExp=$gt_v['TrgtLoadCutsExp'];
 $BeltStopPln=$gt_v['BeltStopPln'];
 $BeltStopAct=$gt_v['BeltStopAct'];
 $BeltStopExp=$gt_v['BeltStopExp'];
 $BagsLeftPln=$gt_v['BagsLeftPln'];
 $BagsLeftAct=$gt_v['BagsLeftAct'];
 $BagsLeftExp=$gt_v['BagsLeftExp'];
 $EDSpln=$gt_v['EDSpln'];
 $EDSact=$gt_v['EDSact'];
 $EDSexp=$gt_v['EDSexp'];
 $InsideOTpln=$gt_v['InsideOTpln'];
 $InsideOTact=$gt_v['InsideOTact'];
 $InsideOTexp=$gt_v['InsideOTexp'];
 $PTRSOTpln=$gt_v['PTRSOTpln'];
 $PTRSOTact=$gt_v['PTRSOTact'];
 $PTRSOTexp=$gt_v['PTRSOTexp'];
 $HoLdPln=$gt_v['HoLdPln'];
 $HoLdAct=$gt_v['HoLdAct'];
 $HoLdExp=$gt_v['HoLdExp'];
 $HoVolPln=$gt_v['HoVolPln'];
 $HoVolAct=$gt_v['HoVolAct'];
 $HoVolExp=$gt_v['HoVolExp'];
 $IbLdNotProcPln=$gt_v['IbLdNotProcPln'];
 $IbLdNotProcAct=$gt_v['IbLdNotProcAct'];
 $IbLdNotProcExp=$gt_v['IbLdNotProcExp'];
 $IbVolNotProcPln=$gt_v['IbVolNotProcPln'];
 $IbVolNotProcAct=$gt_v['IbVolNotProcAct'];
 $IbVolNotProcExp=$gt_v['IbVolNotProcExp'];
 $NcLdPln=$gt_v['NcLdPln'];
 $NcLdAct=$gt_v['NcLdAct'];
 $NcLdExp=$gt_v['NcLdExp'];
 $NcVolPln=$gt_v['NcVolPln'];
 $NcVolAct=$gt_v['NcVolAct'];
 $NcVolExp=$gt_v['NcVolExp'];

            echo json_encode(array('Date'=>$SortDate,'sort'=>$SlicSort,'manager'=>$ManagerName,'Notes'=>$OpNotes,'inplan'=>$InjPlan,'inact'=>$InjAct,'inex'=>$InjExp,'NHPL'=>$NHTOplan,'NHAC'=>$NHTOact,'NHExp'=>$NHTOexp,'libpl'=>$LIBscansPln,'libac'=>$LIBscansAct,'libex'=>$LIBscansExp,'mopl'=>$MOscansPln,'moac'=>$MOscansAct,'moex'=>$MOscansExp,'e3pl'=>$EThreePln,'e3ac'=>$EThreeAct,'e3ex'=>$EThreeExp,'brakpl'=>$BDLIBpln,'brakac'=>$BDLIBact,'brakex'=>$BDLIBexp,'slfpl'=>$LIBfreqPln,'slfac'=>$LIBfreqAct,'slfex'=>$LIBfreqExp,'missloadpl'=>$MisloadPln,'missloadac'=>$MisloadAct,'missloadex'=>$MisloadExp,'dspl'=>$DeptPln,'dsac'=>$DeptAct,'dsex'=>$DeptExp,'sbpl'=>$SmallsPln,'sbac'=>$SmallsAct,'sbex'=>$SmallsExp,'dmgpl'=>$DamgPln,'dmgac'=>$DamgAct,'dmgex'=>$DamgExp,'otdpl'=>$OnTimePln,'otdac'=>$OnTimeAct,'otdex'=>$OnTimeExp,'tmpl'=>$MispickPln,'tmac'=>$MispickAct,'tmex'=>$MispickExp,'mnrpl'=>$MispickNotPln,'mnrac'=>$MispickNotAct,'mnrex'=>$MispickNotExp,'svpl'=>$SortVolPln,'svac'=>$SortVolAct,'svex'=>$SortVolExp,'ivpl'=>$IrrgVolPln,'ivac'=>$IrrgVolAct,'ivex'=>$IrrgVolExp,'smvpl'=>$SmallVolPln,'smvac'=>$SmallVolAct,'smvex'=>$SmallVolExp,'hppl'=>$HubPPHPln,'hpac'=>$HubPPHact,'hpex'=>$HubPPHExp,'thpl'=>$TotHoursPln,'thac'=>$TotHoursAct,'thex'=>$TotHoursExp,'bhpl'=>$BDHrsPln,'bhac'=>$BDHrsAct,'bhex'=>$BDHrsExp,'msdpl'=>$MSDPctEffPln,'msdac'=>$MSDPctEffAct,'msdex'=>$MSDPctEffExp,'ustpl'=>$UnldStTmPln,'ustac'=>$UnldStTmAct,'ustex'=>$UnldStTmExp,'udtpl'=>$UnldEndTmPln,'udtac'=>$UnldEndTmAct,'udtex'=>$UnldEndTmExp,'sspl'=>$SrtSpanPln,'ssac'=>$SrtSpanAct,'ssex'=>$SrtSpanExp,'fphpl'=>$FPHpln,'fphac'=>$FPHact,'fphex'=>$FPHexp,'swpl'=>$StaffWrkPln,'swac'=>$StaffWrkAct,'swex'=>$StaffWrkExp,'pdpl'=>$PaidDayPln,'pdac'=>$PaidDayAct,'pdex'=>$PaidDayExp,'prpl'=>$ProcRatePln,'prac'=>$ProcRateAct,'prex'=>$ProcRateExp,'tppl'=>$TrlsProcPln,'tpac'=>$TrlsProcAct,'tpex'=>$TrlsProcExp,'llapl'=>$LateLoadsPln,'llaac'=>$LateLoadsAct,'llaex'=>$LateLoadsExp,'tlcpl'=>$TrgtLoadCutsPln,'tlcac'=>$TrgtLoadCutsAct,'tlcex'=>$TrgtLoadCutsExp,'bspl'=>$BeltStopPln,'bsac'=>$BeltStopAct,'bsex'=>$BeltStopExp,'blfnspl'=>$BagsLeftPln,'blfnsac'=>$BagsLeftAct,'blfnsex'=>$BagsLeftExp,'edspl'=>$EDSpln,'edsac'=>$EDSact,'edsex'=>$EDSexp,'iohpl'=>$InsideOTpln,'iohac'=>$InsideOTact,'iohex'=>$InsideOTexp,'ptrspl'=>$PTRSOTpln,'ptrsac'=>$PTRSOTact,'ptrsex'=>$PTRSOTexp,'hopl'=>$HoLdPln,'hoac'=>$HoLdAct,'hoex'=>$HoLdExp,'hovpl'=>$HoVolPln,'hovac'=>$HoVolAct,'hovex'=>$HoVolExp,'ilnppl'=>$IbLdNotProcPln,'ilnpac'=>$IbLdNotProcAct,'ilnpex'=>$IbLdNotProcExp,'ivnppl'=>$IbVolNotProcPln,'ivnpac'=>$IbVolNotProcAct,'ivnpex'=>$IbVolNotProcExp,'nclpl'=>$NcLdPln,'nclac'=>$NcLdAct,'nclex'=>$NcLdExp,'ncvpl'=>$NcVolPln,'ncvac'=>$NcVolAct,'ncvex'=>$NcVolExp));
        }           
    }
} else { 
  $sql = "INSERT INTO datatable (SortDate, SlicSort, ManagerName, OpNotes, InjPlan, InjAct, InjExp, NHTOplan, NHTOact, NHTOexp, LIBscansPln, LIBscansAct, LIBscansExp, MOscansPln, MOscansAct, MOscansExp, EThreePln, EThreeAct, EThreeExp, BDLIBpln, BDLIBact, BDLIBexp, LIBfreqPln, LIBfreqAct, LIBfreqExp, MisloadPln, MisloadAct, MisloadExp, DeptPln, DeptAct, DeptExp, SmallsPln, SmallsAct, SmallsExp, DamgPln, DamgAct, DamgExp, OnTimePln, OnTimeAct, OnTimeExp, MispickPln, MispickAct, MispickExp, MispickNotPln, MispickNotAct, MispickNotExp, SortVolPln, SortVolAct, SortVolExp, IrrgVolPln, IrrgVolAct, IrrgVolExp, SmallVolPln, SmallVolAct, SmallVolExp, HubPPHPln, HubPPHact, HubPPHExp, TotHoursPln, TotHoursAct, TotHoursExp, BDHrsPln, BDHrsAct, BDHrsExp, MSDPctEffPln, MSDPctEffAct, MSDPctEffExp, UnldStTmPln, UnldStTmAct, UnldStTmExp, UnldEndTmPln, UnldEndTmAct, UnldEndTmExp, SrtSpanPln, SrtSpanAct, SrtSpanExp, FPHpln, FPHact, FPHexp, StaffWrkPln, StaffWrkAct, StaffWrkExp, PaidDayPln, PaidDayAct, PaidDayExp, ProcRatePln, ProcRateAct, ProcRateExp, TrlsProcPln, TrlsProcAct, TrlsProcExp, LateLoadsPln, LateLoadsAct, LateLoadsExp, TrgtLoadCutsPln, TrgtLoadCutsAct, TrgtLoadCutsExp, BeltStopPln, BeltStopAct, BeltStopExp, BagsLeftPln, BagsLeftAct, BagsLeftExp, EDSpln, EDSact, EDSexp, InsideOTpln, InsideOTact, InsideOTexp, PTRSOTpln, PTRSOTact, PTRSOTexp, HoLdPln, HoLdAct, HoLdExp, HoVolPln, HoVolAct, HoVolExp, IbLdNotProcPln, IbLdNotProcAct, IbLdNotProcExp, IbVolNotProcPln, IbVolNotProcAct, IbVolNotProcExp, NcLdPln, NcLdAct, NcLdExp, NcVolPln, NcVolAct, NcVolExp) VALUES ('$newdate', '$sort', '$manager', '$Notes', '$inplan', '$inact', '$inex', '$NHPL', '$NHAC', '$NHExp', '$libpl', '$libac', '$libex', '$mopl', '$moac', '$moex', '$e3pl', '$e3ac', '$e3ex', '$brakpl', '$brakac', '$brakex', '$slfpl', '$slfac', '$slfex', '$missloadpl', '$missloadac', '$missloadex', '$dspl', '$dsac', '$dsex', '$sbpl', '$sbac', '$sbex', '$dmgpl', '$dmgac', '$dmgex', '$otdpl', '$otdac', '$otdex', '$tmpl', '$tmac', '$tmex', '$mnrpl', '$mnrac', '$mnrex', '$svpl', '$svac', '$svex', '$ivpl', '$ivac', '$ivex', '$smvpl', '$smvac', '$smvex', '$hppl', '$hpac', '$hpex', '$thpl', '$thac', '$thex', '$bhpl', '$bhac', '$bhex', '$msdpl', '$msdac', '$msdex', '$ustpl', '$ustac', '$ustex', '$udtpl', '$udtac', '$udtex', '$sspl', '$ssac', '$ssex', '$fphpl', '$fphac', '$fphex', '$swpl', '$swac', '$swex', '$pdpl', '$pdac', '$pdex', '$prpl', '$prac', '$prex', '$tppl', '$tpac', '$tpex', '$llapl', '$llaac', '$llaex', '$tlcpl', '$tlcac', '$tlcex', '$bspl', '$bsac', '$bsex', '$blfnspl', '$blfnsac', '$blfnsex', '$edspl', '$edsac', '$edsex', '$iohpl', '$iohac', '$iohex', '$ptrspl', '$ptrsac', '$ptrsex', '$hopl', '$hoac', '$hoex', '$hovpl', '$hovac', '$hovex', '$ilnppl', '$ilnpac', '$ilnpex', '$ivnppl', '$ivnpac', '$ivnpex', '$nclpl', '$nclac', '$nclex', '$ncvpl', '$ncvac', '$ncvex')";
   if(mysqli_query($db, $sql)){ 
	
	    
	   
	   
   }else{
	echo ":'(";	//  echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
}

?>
 