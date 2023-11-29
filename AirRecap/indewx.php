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
  <link rel="stylesheet" href="../../recap/css/jquery-ui.css">
 
 <script src="/recap/js/jquery-1.12.4.js"></script> 
 <script src="/recap/js/jquery-ui.js"></script>
 <script src="/recap/js/sisyphus.js"></script>
<script type="text/javascript" language="javascript">
(function ($) {
	
	$(function () {
		

		 function showpanel() {     
   $.ajax({
	type: "GET",
	url: "../../Recap/ajax.php",
	data:{sort:$('#sort-list').val(), date:$('#date').val(), manager:$('#manager-list').val()} ,
	success: function(data){
		$("#hpsdata").html(data);
		
	}
	});
 }
	$(document.body).on('change','#svpl',function(val){
    
    var price = Number($(this).val());
    var total = Math.round((price) * 0.20);
      var total2 = Math.round((price) * 0.02);
    $("#ivpl").val(total2);
    $("#smvpl").val(total);
    
  
});
function round(value, decimals) {
  return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
}
	$(document.body).on('change','#ustpl',function(val){
    
    var price = Number($(this).val());
     var span = Number($("#sspl").val());
    var total = price + span;
    
    if (total < 24) {
   
    $("#udtpl").val(total);
    
} else{
	var total = round(total - 24,2);
	
    $("#udtpl").val(total);
}
  
});

$('#hub').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});
	$(document.body).on('change','#svac',function(val){
    
    var price = Number($(this).val());
    var total = Math.round((price) * 0.20);
      var total2 = Math.round((price) * 0.02);
    $("#ivac").val(total2);
    $("#smvac").val(total);
  
});
	$(document.body).on('change','#hppl',function(val){
    
    var thepph = Number($(this).val());
  
       var thevol = $('#svpl').val();
    var total = Math.round((thevol)/(thepph));

    $("#thpl").val(total);
  
});
	$(document.body).on('change','#hpac',function(val){
    
    var thepph = Number($(this).val());
  
       var thevol = $('#svac').val();
    var total = Math.round((thevol)/(thepph));

    $("#thac").val(total);
  
});

	$(document.body).on('change','#udtpl',function(val){
       var startTime = $('#ustpl').val();
   var endTime = $('#udtpl').val();


   var startTimeArray = startTime.split(":");
   var startInputHrs = parseInt(startTimeArray[0]);
   var startInputMins = parseInt(startTimeArray[1]);

   var endTimeArray = endTime.split(":");
   var endInputHrs = parseInt(endTimeArray[0]);
   var endInputMins = parseInt(endTimeArray[1]);

   var startMin = startInputHrs*60 + startInputMins;
   var endMin = endInputHrs*60 + endInputMins;

   var result;

   if (endMin < startMin) {
       var minutesPerDay = 24*60; 
       result = minutesPerDay - startMin;  // Minutes till midnight
       result += endMin; // Minutes in the next day
   } else {
      result = endMin - startMin;
   }

   var minutesElapsed = result % 60;
   var hoursElapsed = (result - minutesElapsed) / 60;
 var minutesElapsed2 = (minutesElapsed)/60;
     var total = hoursElapsed + minutesElapsed2;
          
           // $("#sspl").val(total);
   
            
            var sortspan = $("#sspl").val();
         var sort = $("#svpl").val();
             var sort2 =  Math.round((sort)/(sortspan));
             $("#fphpl").val(sort2);
});
	
	$(document.body).on('change','#udtac',function(val){
  var startTime = Number($('#ustac').val());
   var endTime = Number($('#udtac').val());

var cst = startTime.toFixed(2).toString().split('.');
var stho = Number(cst[0]);
var stmin = Number("." + cst[1])*60;
var newstartTime = stho + ":" +  stmin;
   var startTimeArray = newstartTime.split(":");
   var startInputHrs = parseInt(startTimeArray[0]);
   var startInputMins = parseInt(startTimeArray[1]);
var cet =  endTime.toFixed(2).toString().split('.');
var etho = Number(cet[0]);
var etmin = Number("." + cet[1])*60;
var newendTime = etho + ":" +  etmin;


   var endTimeArray = newendTime.split(":");
   var endInputHrs = parseInt(endTimeArray[0]);
   var endInputMins = parseInt(endTimeArray[1]);

   var startMin = startInputHrs*60 + startInputMins;
   var endMin = endInputHrs*60 + endInputMins;

   var result;

   if (endMin < startMin) {
       var minutesPerDay = 24*60; 
       result = minutesPerDay - startMin;  // Minutes till midnight
       result += endMin; // Minutes in the next day
   } else {
      result = endMin - startMin;
   }

   var minutesElapsed = result % 60;
   var hoursElapsed = (result - minutesElapsed) / 60;
 var minutesElapsed2 = (minutesElapsed)/60;
     var total = hoursElapsed + minutesElapsed2;
          
            $("#ssac").val(total);
   
            
            var sortspan = $("#ssac").val();
         var sort = $("#svac").val();
             var sort2 =  Math.round((sort)/(sortspan));
             $("#fphac").val(sort2);
});
	
		$(document.body).on('change','#sort-list',function(val){
			var selectedText = $(this).find("option:selected").text();
			  var selectedValue = $(this).val();
			  //alert("Selected Text: " + selectedText + " Value: " + selectedValue);
  
	$.ajax({
	type: "POST",
	url: "../../Recap/getState.php",
	data:'country_id='+selectedValue,
	success: function(data){
		$("#manager-list").html(data);
		
	}
	});
	setTimeout(showpanel, 1000)
	

	 
	  
}
)
})})(jQuery);

  $( function() {
    $( "#date" ).datepicker();
  } );
 
 
	


</script>
</head><body id="tinymce" class="mce-content-body ">
<h1 style="color: #4485b8;">South Cal Daily Hub Sort Recap</h1>
<h4></h4>
<div id="hpsdata" name="hpsdata">
<form id="hub" action="/../../Recap/processing.php" method="get">
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
<td style="height: 86px; width: 21.0496%;"><center><input name="inplan" value="0" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="inact" size="4" value="0" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="inex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">New Hire Turnover:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="NHPL" value="0" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="NHAC" value="0" size="4" type="text" /></center></td>
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
<td style="height: 86px; width: 21.0496%;"><center><input name="libpl" value="0" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="libac" value="0" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="libex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># Missed Origin Scanned:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="mopl"  value="0"size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="moac" value="0" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="moex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># E3 LIB:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="e3pl" value="0" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="e3ac" value="0" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="e3ex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Hold Over Loads:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="hopl" value="0" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="hoac" value="0" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="hoex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Hold Over Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="hovpl" value="0" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="hovac" value="0" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="hovex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Inbound Loads Not Processed:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ilnppl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ilnopac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ilnpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Inbound Volume Not Processed:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ivnppl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ivnpac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ivnpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Non-Commit Loads:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="nclpl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="nclac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="nclex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Non-Commit Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ncvpl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ncvac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ncvex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># LIB due to Breakdown:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="brakpl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="brakac" value="0"  size="4" type="text" /></center></td>
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
<td style="height: 86px; width: 21.0496%;"><center><input name="tmpl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="tmac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="tmex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Mispicks Not Rescanned:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="mnrpl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="mnrac" value="0"  size="4" type="text" /></center></td>
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
<td style="height: 86px; width: 21.0496%;"><center><input name="svpl" id="svpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="svac" id="svac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="svex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Irreg Volume:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ivpl" id="ivpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ivac" id="ivac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ivex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Smalls Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="smvpl" id="smvpl"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="smvac" id="smvac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="smvex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Hub PPH:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="hppl" id="hppl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="hpac" id="hpac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="hpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Total Hours:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="thpl" id="thpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="thac" id="thac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="thex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Breakdown Hours Impact:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="bhpl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="bhac" value="0"  size="4" type="text" /></center></td>
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
<td style="min-width: 140px; height: 86px; width: 35.1739%;">Military</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Unload Start Time:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ustpl" id="ustpl"size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ustac" id="ustac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ustex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">Military</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Unload Down Time:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="udtpl" id="udtpl"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="udtac" id="udtac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="udtex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Sort Span:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="sspl" id="sspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ssac"  ID="ssac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ssex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Flow per Hour:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="fphpl" id="fphpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="fphac" id="fphac" size="4" type="text" /></center></td>
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
<td style="height: 86px; width: 21.0496%;"><center><input name="prpl" id="prpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="prac" id="prac" size="4" type="text" /></center></td>
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
<td style="height: 86px; width: 21.0496%;"><center><input name="llapl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="llaac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="llaex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Target Load Cuts:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="tlcpl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="tlcac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="tlcex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Belt Stops:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="bspl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="bsac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="bsex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Bags Left for Next Sort:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="blfnspl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="blfnsac" value="0"  size="4" type="text" /></center></td>
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
<td style="height: 86px; width: 21.0496%;"><center><input name="iohpl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="iohac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="iohex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">PTRS Overtime Hours:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ptrspl" value="0"  size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ptrsac" value="0"  size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ptrsex" rows="4"> 
</textarea></td>
</tr>
</tbody>
<tbody></tbody>
</table>
<input type="submit" value="Submit">
</form>
</div>
<hr />
<p></p>