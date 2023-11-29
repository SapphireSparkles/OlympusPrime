<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM gateway";
$results = $db_handle->runQuery($query);
$query2 ="SELECT * FROM manager";
$results2 = $db_handle->runQuery($query2);
$query3 ="SELECT * FROM flight";
$results3 = $db_handle->runQuery($query3);
?>
<html>
<head>
  <link rel="stylesheet" href="css/jquery-ui.css">
 

   <link rel="stylesheet" href="../../AirRecap/css/jquery-ui.css">
<link href="../../AirRecap/form_style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="../../AirRecap/jquery.js"></script>
 <script src="../../AirRecap/js/jquery-1.12.4.js"></script> 
 <script src="../../AirRecap/js/jquery-ui.js"></script>
<script type="text/javascript">
function add_row()
{
 $rowno=$("#Arrival tr").length;
 $rowno=$rowno+1;
 $("#Arrival tr:last").after("<tr id='row"+$rowno+"'><td><select name='aflight[]' class='demoInputBox'><option value disabled selected>Flight</option><?php foreach($results3 as $country3) {?><option value='<?php echo $country3['Flight']; ?>'><?php echo $country3['Flight']; ?></option><?php } ?></select></td><td><input type='text' name='atail[]'  maxlength='4' size='4' placeholder='Tail #'></td><td><input type='text' name='aplan[]' maxlength='6' size='6' placeholder='Plan'></td><td><input type='text' name='aact[]' maxlength='6' size='6' placeholder='Act'></td><td><input type='text' name='amin[]' maxlength='6' size='6' placeholder='Mins'></td><td><input type='text' name='acode[]' maxlength='6' size='6' placeholder='Code'></td><td><input type='text' name='aremarks[]' maxlength='275' size='50' placeholder='Remarks'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}


function add_row2()
{
 $rowno=$("#Departures tr").length;
 $rowno=$rowno+1;
 $("#Departures tr:last").after("<tr id='row"+$rowno+"'><td><select name='dflight[]' class='demoInputBox'><option value disabled selected>Flight</option><?php foreach($results3 as $country3) {?><option value='<?php echo $country3['Flight']; ?>'><?php echo $country3['Flight']; ?></option><?php } ?></select></td><td><input type='text' name='dtail[]' maxlength='4' size='4' placeholder='Tail #'></td><td><input type='text' name='dplan[]' maxlength='6' size='6' placeholder='Plan'></td><td><input type='text' name='dact[]' maxlength='6' size='6' placeholder='Act'></td><td><input type='text' name='dmin[]' maxlength='6' size='6' placeholder='Mins'></td><td><input type='text' name='dcode[]' maxlength='6' size='6' placeholder='Code'></td><td><input type='text' name='dremarks[]' maxlength='275' size='50' placeholder='Remarks'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}

function add_row3()
{
 $rowno=$("#SFAC tr").length;
 $rowno=$rowno+1;
  $("#SFAC tr:last").after("<tr id='row"+$rowno+"'><td><select name='sflight[]' class='demoInputBox'><option value disabled selected>Flight</option><?php foreach($results3 as $country3) {?><option value='<?php echo $country3['Flight']; ?>'><?php echo $country3['Flight']; ?></option><?php } ?></select></td><td><input type='text' name='stail[]' maxlength='4' size='4' placeholder='Tail #'></td><td><input type='text' name='splan[]' maxlength='6' size='6' placeholder='Plan'></td><td><input type='text' name='sact[]' maxlength='6' size='6' placeholder='Act'></td><td><input type='text' name='smin[]' maxlength='6' size='6' placeholder='Mins'></td><td><input type='text' name='scode[]' maxlength='6' size='6' placeholder='Code'></td><td><input type='text' name='sremarks[]' maxlength='275' size='50' placeholder='Remarks'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}

function delete_row(rowno)
{
 $('#'+rowno).remove();
}

 
  $( function() {
    $( "#date" ).datepicker();
  } );
 
	
</script>

</head>
<body>
<div id="wrapper">

<div id="form_div">

 <form method="Get" action="../../AirRecap/store_detail.php">
 <body id="tinymce" class="mce-content-body ">
<h1 style="color: #4485b8;">South Cal District Gateway Performance Recap</h1>
<h4></h4>
<div id="hpsdata" name="hpsdata">
<form id="hub" action="#" method="get">
<table class="editorDemoTable" border="1" style="vertical-align: top; width: 64.681%;" width="100%">
<tbody>
<tr style="height: 31px;">
<td style="width: 249.889%; height: 31px;" colspan="1"><span style="color: #000000;"><strong>Date:</strong></span></td>
<td style="width: 249.889%; height: 31px;" colspan="1"><span ><strong><input id="date" name="date" type="text" /></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style="width: 249.889%; height: 31px;" colspan="1"><span style="color: #000000;"><strong>Ops:</strong></span></td>
<td style="width: 249.889%; height: 31px;" colspan="1"><span ><strong><select name="ops" id="ops" class="demoInputBox">
<option value disabled selected>Select Operation</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["Gateways"]; ?>"><?php echo $country["Gateways"]; ?></option>
<?php
}
?>
</select></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style="width: 249.889%; height: 31px;" colspan="1"><span style="color: #000000;"><strong>Manager Name:</strong></span></td>
<td style="width: 249.889%; height: 31px;" colspan="1"><span ><strong><select name="manager" id="manager" class="demoInputBox">
<option value disabled selected>Select Manager</option>
<?php
foreach($results2 as $country2) {
?>
<option value="<?php echo $country2["Managers"]; ?>"><?php echo $country2["Managers"]; ?></option>
<?php
}
?>

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
<td style="height: 23px;" colspan="5"><span style="color: #ffffff;"><strong>People:</strong></span></td>
</tr>
<tr style="height: 31px;">
<td style=" height: 31px;" colspan="1"><span style="color: #000000;"><strong># Injuries:</strong></span></td>
<td style=" height: 31px;" colspan="1"><span ><strong><input id="ing" name="ing" maxlength="6" size="6"  type="text" /></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style=" height: 31px;" colspan="1"><span style="color: #000000;"><strong># Planned Worked:</strong></span></td>
<td style=" height: 31px;" colspan="1"><span ><strong><input id="wrkpl" name="wrkpl" maxlength="6" size="6"  type="text" /></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style="height: 31px;" colspan="1"><span style="color: #000000;"><strong># Act Worked:</strong></span></td>
<td style=" height: 31px;" colspan="1"><span ><strong><input id="wrkac" name="wrkac" type="text" maxlength="6" size="6"  /></strong></span></td>
</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="2"><span style="color: #ffffff;"><strong>Service:</strong></span></td>
<td style="height: 23px;" colspan="4"><span style="color: #ffffff;"><strong>Remarks:</strong></span></td>

</tr>
<tr style="height: 31px;">
<td style=" height: 31px;" colspan="1"><span style="color: #000000;"><strong># Service Failures:</strong></span></td>
<td style=" height: 31px;" colspan="1"><span ><strong><input id="srvfail" name="srvfail"  maxlength="6" size="6" type="text" /></strong></span></td>
<td style=" height: 31px;" colspan="1"><span ><strong><input id="sfremarks" name="sfremarks"  maxlength="275" size="75"  type="text" /></strong></span></td>

</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="5"><span style="color: #ffffff;"><strong>Jet Arrivals:</strong></span></td>
</tr>
 <tr style="height: 88px;">
<td colspan="5" style="height: 88px; width: 249.889%;">

  <table id="Arrival" align=center>
   <tr id="row1">
    <td><select name="aflight[]" class="demoInputBox">
<option value disabled selected>Flight</option>
<?php
foreach($results3 as $country3) {
?>
<option value="<?php echo $country3["Flight"]; ?>"><?php echo $country3["Flight"]; ?></option>
<?php
}
?>
</select>
   </td>
    <td><input type="text" name="atail[]"  maxlength="4" size="4" placeholder="Tail #"></td>
    <td><input type="text" name="aplan[]" maxlength="6" size="6" placeholder="Plan"></td>
 <td><input type="text" name="aact[]" maxlength="6" size="6" placeholder="Act"></td>
    <td><input type="text" name="amin[]" maxlength="6" size="6"  placeholder="Mins"></td>
    <td><input type="text" name="acode[]" maxlength="6" size="6" placeholder="Code"></td>
 <td><input type="text" name="aremarks[]" maxlength="275" size="50" placeholder="Remarks"></td>
   </tr>
  </table>
  <input type="button" onclick="add_row();" value="Add Flight">
</td>
</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="5"><span style="color: #ffffff;"><strong>Jet Departures:</strong></span></td>
</tr>
 <tr style="height: 88px;">
<td colspan="5" style="height: 88px; width: 249.889%;">


  <table id="Departures" align=center>
   <tr id="row1">
    <td><select name="dflight[]" class="demoInputBox">
<option value disabled selected>Flight</option>
<?php
foreach($results3 as $country3) {
?>
<option value="<?php echo $country3["Flight"]; ?>"><?php echo $country3["Flight"]; ?></option>
<?php
}
?>
</select></td>
   <td><input type="text" name="dtail[]"  maxlength="4" size="4" placeholder="Tail #"></td>
    <td><input type="text" name="dplan[]" maxlength="6" size="6" placeholder="Plan"></td>
 <td><input type="text" name="dact[]" maxlength="6" size="6" placeholder="Act"></td>
    <td><input type="text" name="dmin[]" maxlength="6" size="6"  placeholder="Mins"></td>
    <td><input type="text" name="dcode[]" maxlength="6" size="6" placeholder="Code"></td>
 <td><input type="text" name="dremarks[]" maxlength="275" size="50" placeholder="Remarks"></td>
   </tr>
  </table>
  <input type="button" onclick="add_row2();" value="Add Flight">
</td>
</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="5"><span style="color: #ffffff;"><strong>SFAC:</strong></span></td>
</tr>
 <tr style="height: 88px;">
<td colspan="5" style="height: 88px; width: 249.889%;">

  <table id="SFAC" align=center>
   <tr id="row1">
    <td><select name="sflight[]" class="demoInputBox">
<option value disabled selected>Flight</option>
<?php
foreach($results3 as $country3) {
?>
<option value="<?php echo $country3["Flight"]; ?>"><?php echo $country3["Flight"]; ?></option>
<?php
}
?>
</select></td>
    <td><input type="text" name="stail[]"  maxlength="4" size="4" placeholder="Tail #"></td>
    <td><input type="text" name="splan[]" maxlength="6" size="6" placeholder="Plan"></td>
 <td><input type="text" name="sact[]" maxlength="6" size="6" placeholder="Act"></td>
    <td><input type="text" name="smin[]" maxlength="6" size="6"  placeholder="Mins"></td>
    <td><input type="text" name="scode[]" maxlength="6" size="6" placeholder="Code"></td>
 <td><input type="text" name="sremarks[]" maxlength="275" size="50" placeholder="Remarks"></td>
   </tr>
  </table>
  <input type="button" onclick="add_row3();" value="Add Flight">
  
  
  </td></tr>
  <tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="6"><span style="color: #ffffff;"><strong>Feeder Performance:</strong></span></td>
</tr>
  <tr>
  <td colspan="5" style="height: 88px; width: 249.889%;">
  <table align=center>
  <tr>
<td style=" height: 31px; width: 18%;" colspan="1"><span style="color: #000000;"># Movements:</span></td>
<td style=" height: 31px; width: 18%;" colspan="1"><span ># On Time:</span></td>
<td style=" height: 31px; width: 18%;" colspan="1"><span ># Late:</span></td>
<td style=" height: 31px; width: 18%;" colspan="1"><span >Avg Min Late:</span></td>
<td style=" height: 31px;" colspan="1"><span >Remarks:</span></td>
</tr><tr>   
 <td><input type="text" name="fpmove"  maxlength="4" size="4" ></td> 
   <td><input type="text" name="fpontime"  maxlength="4" size="4"></td> 
      <td><input type="text" name="fplate"  maxlength="4" size="4" ></td> 
         <td><input type="text" name="fpmin"  maxlength="7" size="7"></td> 
            <td><input type="text" name="fpremark"  maxlength="275" size="50" ></td>
            
            </tr>
  
  
  </table>
  
  </td>
  </tr>
   <tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="6"><span style="color: #ffffff;"><strong>Shuttle Performance:</strong></span></td>
</tr>
    <tr>
  <td colspan="5" style="height: 88px; width: 249.889%;">
  <table align=center>
  <tr>
<td style=" height: 31px; width: 18%;" colspan="1"><span style="color: #000000;"># Movements:</span></td>
<td style=" height: 31px; width: 18%;" colspan="1"><span ># On Time:</span></td>
<td style=" height: 31px; width: 18%;" colspan="1"><span ># Late:</span></td>
<td style=" height: 31px; width: 18%;" colspan="1"><span >Avg Min Late:</span></td>
<td style=" height: 31px;" colspan="1"><span >Remarks:</span></td>
</tr><tr>   
 <td><input type="text" name="spmove"  maxlength="4" size="4" ></td> 
   <td><input type="text" name="spontime"  maxlength="4" size="4"></td> 
      <td><input type="text" name="splate"  maxlength="4" size="4" ></td> 
         <td><input type="text" name="spmin"  maxlength="7" size="7"></td> 
            <td><input type="text" name="spremark"  maxlength="275" size="50" ></td>
            
            </tr>
  
  
  </table>
  
  </td>
  </tr>
  
  
  </table>
  <input type="submit" name="submit_row" value="SUBMIT">
 </form>
</div>

</div>
</body>
</html>