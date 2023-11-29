<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM tbl_hubslics where Ops ='Ground'";
$results = $db_handle->runQuery($query);
?>
<!DOCTYPE html><html><head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="/recap/css/jquery-ui.css">
 
 <script src="/recap/js/jquery-1.12.4.js"></script> 
 <script src="/recap/js/jquery-ui.js"></script>

<script type="text/javascript" language="javascript">
(function ($) {
	
	$(function () {
		$(document.body).on('change','#sort-list',function(val){
			var selectedText = $(this).find("option:selected").text();
			  var selectedValue = $(this).val();
			  //alert("Selected Text: " + selectedText + " Value: " + selectedValue);
  
	$.ajax({
	type: "POST",
	url: "../Recap/getState.php",
	data:'country_id='+selectedValue,
	success: function(data){
		$("#manager-list").html(data);
		
	}
	});
}
)
})})(jQuery);

  $( function() {
    $( "#date" ).datepicker();
  } );
 
  

4
5
6
7
8
9
$(function () {
    $.post("Saving.php", function (data) {
        $("[name='Date']").val(data.Date);
$("[name='sort']").val(data.sort);
$("[name='manager']").val(data.manager);
$("[name='Notes']").val(data.Notes);
$("[name='inplan']").val(data.inplan);
$("[name='inact']").val(data.inact);
$("[name='inex']").val(data.inex);
$("[name='NHPL']").val(data.NHPL);
$("[name='NHAC']").val(data.NHAC);
$("[name='NHExp']").val(data.NHExp);
$("[name='libpl']").val(data.libpl);
$("[name='libac']").val(data.libac);
$("[name='libex']").val(data.libex);
$("[name='mopl']").val(data.mopl);
$("[name='moac']").val(data.moac);
$("[name='moex']").val(data.moex);
$("[name='e3pl']").val(data.e3pl);
$("[name='e3ac']").val(data.e3ac);
$("[name='e3ex']").val(data.e3ex);
$("[name='brakpl']").val(data.brakpl);
$("[name='brakac']").val(data.brakac);
$("[name='brakex']").val(data.brakex);
$("[name='slfpl']").val(data.slfpl);
$("[name='slfac']").val(data.slfac);
$("[name='slfex']").val(data.slfex);
$("[name='missloadpl']").val(data.missloadpl);
$("[name='missloadac']").val(data.missloadac);
$("[name='missloadex']").val(data.missloadex);
$("[name='dspl']").val(data.dspl);
$("[name='dsac']").val(data.dsac);
$("[name='dsex']").val(data.dsex);
$("[name='sbpl']").val(data.sbpl);
$("[name='sbac']").val(data.sbac);
$("[name='sbex']").val(data.sbex);
$("[name='dmgpl']").val(data.dmgpl);
$("[name='dmgac']").val(data.dmgac);
$("[name='dmgex']").val(data.dmgex);
$("[name='otdpl']").val(data.otdpl);
$("[name='otdac']").val(data.otdac);
$("[name='otdex']").val(data.otdex);
$("[name='tmpl']").val(data.tmpl);
$("[name='tmac']").val(data.tmac);
$("[name='tmex']").val(data.tmex);
$("[name='mnrpl']").val(data.mnrpl);
$("[name='mnrac']").val(data.mnrac);
$("[name='mnrex']").val(data.mnrex);
$("[name='svpl']").val(data.svpl);
$("[name='svac']").val(data.svac);
$("[name='svex']").val(data.svex);
$("[name='ivpl']").val(data.ivpl);
$("[name='ivac']").val(data.ivac);
$("[name='ivex']").val(data.ivex);
$("[name='smvpl']").val(data.smvpl);
$("[name='smvac']").val(data.smvac);
$("[name='smvex']").val(data.smvex);
$("[name='hppl']").val(data.hppl);
$("[name='hpac']").val(data.hpac);
$("[name='hpex']").val(data.hpex);
$("[name='thpl']").val(data.thpl);
$("[name='thac']").val(data.thac);
$("[name='thex']").val(data.thex);
$("[name='bhpl']").val(data.bhpl);
$("[name='bhac']").val(data.bhac);
$("[name='bhex']").val(data.bhex);
$("[name='msdpl']").val(data.msdpl);
$("[name='msdac']").val(data.msdac);
$("[name='msdex']").val(data.msdex);
$("[name='ustpl']").val(data.ustpl);
$("[name='ustac']").val(data.ustac);
$("[name='ustex']").val(data.ustex);
$("[name='udtpl']").val(data.udtpl);
$("[name='udtac']").val(data.udtac);
$("[name='udtex']").val(data.udtex);
$("[name='sspl']").val(data.sspl);
$("[name='ssac']").val(data.ssac);
$("[name='ssex']").val(data.ssex);
$("[name='fphpl']").val(data.fphpl);
$("[name='fphac']").val(data.fphac);
$("[name='fphex']").val(data.fphex);
$("[name='swpl']").val(data.swpl);
$("[name='swac']").val(data.swac);
$("[name='swex']").val(data.swex);
$("[name='pdpl']").val(data.pdpl);
$("[name='pdac']").val(data.pdac);
$("[name='pdex']").val(data.pdex);
$("[name='prpl']").val(data.prpl);
$("[name='prac']").val(data.prac);
$("[name='prex']").val(data.prex);
$("[name='tppl']").val(data.tppl);
$("[name='tpac']").val(data.tpac);
$("[name='tpex']").val(data.tpex);
$("[name='llapl']").val(data.llapl);
$("[name='llaac']").val(data.llaac);
$("[name='llaex']").val(data.llaex);
$("[name='tlcpl']").val(data.tlcpl);
$("[name='tlcac']").val(data.tlcac);
$("[name='tlcex']").val(data.tlcex);
$("[name='bspl']").val(data.bspl);
$("[name='bsac']").val(data.bsac);
$("[name='bsex']").val(data.bsex);
$("[name='blfnspl']").val(data.blfnspl);
$("[name='blfnsac']").val(data.blfnsac);
$("[name='blfnsex']").val(data.blfnsex);
$("[name='edspl']").val(data.edspl);
$("[name='edsac']").val(data.edsac);
$("[name='edsex']").val(data.edsex);
$("[name='iohpl']").val(data.iohpl);
$("[name='iohac']").val(data.iohac);
$("[name='iohex']").val(data.iohex);
$("[name='ptrspl']").val(data.ptrspl);
$("[name='ptrsac']").val(data.ptrsac);
$("[name='ptrsex']").val(data.ptrsex);
$("[name='hopl']").val(data.hopl);
$("[name='hoac']").val(data.hoac);
$("[name='hoex']").val(data.hoex);
$("[name='hovpl']").val(data.hovpl);
$("[name='hovac']").val(data.hovac);
$("[name='hovex']").val(data.hovex);
$("[name='ilnppl']").val(data.ilnppl);
$("[name='ilnpac']").val(data.ilnpac);
$("[name='ilnpex']").val(data.ilnpex);
$("[name='ivnppl']").val(data.ivnppl);
$("[name='ivnpac']").val(data.ivnpac);
$("[name='ivnpex']").val(data.ivnpex);
$("[name='nclpl']").val(data.nclpl);
$("[name='nclac']").val(data.nclac);
$("[name='nclex']").val(data.nclex);
$("[name='ncvpl']").val(data.ncvpl);
$("[name='ncvac']").val(data.ncvac);
$("[name='ncvex']").val(data.ncvex);
 
	    
    }, "json");
    setInterval(function () {
        $.post("Saving.php", $("#form").serialize());
    }, 2000);
});
	



</script>
</head><body id="tinymce" class="mce-content-body ">
<h1 style="color: #4485b8;">South Cal Daily Hub Sort Recap</h1>
<h4></h4>

<form action="../Recap/processing.php" method="get">
<table class="editorDemoTable" border="1" style="vertical-align: top; width: 64.681%;" width="100%" height="4247">
<tbody>
<tr style="height: 31px;">
<td style="width: 249.889%; height: 31px;" colspan="1"><span style="color: #000000;"><strong>Date:</strong></span></td>
<td style="width: 249.889%; height: 31px;" colspan="1"><span ><strong><input id="date" name="date" type="text" /></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style="width: 249.889%; height: 31px;" colspan="1"><span style="color: #000000;"><strong>Sort Name:</strong></span></td>
<td style="width: 249.889%; height: 31px;" colspan="1"><span ><strong><select name="sort" id="sort-list" class="demoInputBox">
<option value disabled selected>Select Operation</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["SlicSort"]; ?>"><?php echo $country["Slic_Sort"]; ?></option>
<?php
}
?>
</select></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style="width: 249.889%; height: 31px;" colspan="1"><span style="color: #000000;"><strong>Manager Name:</strong></span></td>
<td style="width: 249.889%; height: 31px;" colspan="1"><span ><strong><select name="manager" id="manager-list" class="demoInputBox">
<option value="">Select Manager</option>
</select></strong></span></td>
</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="5"><span style="color: #ffffff;"><strong>OPERATIONAL NOTES:</strong></span></td>
</tr>
<tr style="height: 88px;">
<td colspan="5" style="height: 88px; width: 249.889%;"><strong><span ><textarea cols="100" name="Notes" rows="10"> 
</textarea></span></strong></td>
</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px; width: 78.2116%;" colspan="2"><strong><span style="color: #ffffff;">PEOPLE:</span></strong></td>
<td style="height: 23px; width: 21.0496%;"><strong><span style="color: #ffffff;">Plan:</span></strong></td>
<td style="height: 23px; width: 18.3131%;"><span style="color: #ffffff;"><strong>Actual:</strong></span></td>
<td style="height: 23px; width: 132.315%;"><strong><span style="color: #ffffff;">Explanation:</span></strong></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># of Injuries:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="inplan" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="inact" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="inex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">New Hire Turnover:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="NHPL" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="NHAC" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="NHExp" rows="4"> 
</textarea></td>
</tr>
<tr style="background-color: #3e759e; height: 23px;">
<td style="height: 21px; width: 78.2116%;" colspan="2"><span style="color: #ffffff;"><strong>SERVICE:</strong></span></td>
<td style="height: 21px; width: 21.0496%;"><span style="color: #ffffff;"><strong>Plan:</strong></span></td>
<td style="height: 21px; width: 18.3131%;"><span style="color: #ffffff;"><strong>Actual:</strong></span></td>
<td style="height: 21px; width: 132.315%;"><span style="color: #ffffff;"><strong>Explanation:</strong></span></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># LIBs Scanned:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="libpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="libac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="libex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># Missed Origin Scanned:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="mopl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="moac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="moex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># E3 LIB:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="e3pl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="e3ac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="e3ex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Hold Over Loads:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="hopl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="hoac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="hoex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Hold Over Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="hovpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="hovac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="hovex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Inbound Loads Not Processed:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ilnppl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ilnopac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ilnpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Inbound Volume Not Processed:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ivnppl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ivnpac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ivnpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Non-Commit Loads:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="nclpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="nclac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="nclex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Non-Commit Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ncvpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ncvac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ncvex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># LIB due to Breakdown:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="brakpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="brakac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="brakex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">SEAS Total LIB Frequency:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="slfpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="slfac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="slfex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Misload Frequency:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="missloadpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="missloadac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="missloadex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Departure Scan Frequency:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="dspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="dsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="dsex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">% Smalls Bagged:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="sbpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="sbac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="sbex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Dmg/Ovrgd/Plfg Frequency:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="dmgpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="dmgac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="dmgex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">On-Time Departure %:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="otdpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="otdac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="otdex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Total Mispicks:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="tmpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="tmac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="tmex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Mispicks Not Rescanned:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="mnrpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="mnrac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="mnrex" rows="4"> 
</textarea></td>
</tr>
<tr style="background-color: #3e759e; height: 23px;">
<td style="height: 21px; width: 78.2116%;" colspan="2"><span style="color: #ffffff;"><strong>PERFORMANCE:</strong></span></td>
<td style="height: 21px; width: 21.0496%;"><span style="color: #ffffff;"><strong>Plan:</strong></span></td>
<td style="height: 21px; width: 18.3131%;"><span style="color: #ffffff;"><strong>Actual:</strong></span></td>
<td style="height: 21px; width: 132.315%;"><span style="color: #ffffff;"><strong>Explanation:</strong></span></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Sorted Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="svpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="svac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="svex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Irreg Volume:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ivpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ivac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ivex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Smalls Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="smvpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="smvac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="smvex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Hub PPH:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="hppl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="hpac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="hpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Total Hours:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="thpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="thac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="thex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Breakdown Hours Impact:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="bhpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="bhac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="bhex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">MSD % Effective:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="msdpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="msdac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="msdex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Unload Start Time:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ustpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ustac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ustex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Unload Down Time:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="udtpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="udtac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="udtex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Sort Span:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="sspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ssac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ssex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Flow per Hour:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="fphpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="fphac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="fphex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Staffing Worked:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="swpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="swac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="swex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Paid Day:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="pdpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="pdac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="pdex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Process Rate:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="prpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="prac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="prex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Trailers Processed:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="tppl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="tpac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="tpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Late loads after 8pm / 1:30am:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="llapl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="llaac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="llaex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Target Load Cuts:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="tlcpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="tlcac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="tlcex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Belt Stops:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="bspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="bsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="bsex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Bags Left for Next Sort:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="blfnspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="blfnsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="blfnsex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">EDS % Effective:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="edspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="edsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="edsex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Inside Overtime Hours:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="iohpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="iohac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="iohex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">PTRS Overtime Hours:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ptrspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ptrsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ptrsex" rows="4"> 
</textarea></td>
</tr>
</tbody>
<tbody></tbody>
</table>
<input type="submit" value="Submit">
</form>
<hr />
<p></p>