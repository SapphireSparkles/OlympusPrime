<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM tbl_hubslics where Ops ='Ground'";
$results = $db_handle->runQuery($query);
?>
<html>
<head>
<TITLE>jQuery Dependent DropDown List - Countries and States</TITLE>
<head>
<style>
body{width:610px;font-family:calibri;}
.frmDronpDown {border: 1px solid #7ddaff;background-color:#C8EEFD;margin: 2px 0px;padding:40px;border-radius:4px;}
.demoInputBox {padding: 10px;border: #bdbdbd 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.row{padding-bottom:15px;}
</style>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getState.php",
	data:'country_id='+val,
	success: function(data){
		$("#manager-list").html(data);
		//getCity();
	}
	});
}




</script>
</head>
<body>
<div class="frmDronpDown">
<div class="row">
<label>Country:</label><br/>
<select name="sort" id="sort-list" class="demoInputBox" onChange="getState(this.value);">
<option value disabled selected>Select Operation</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["SlicSort"]; ?>"><?php echo $country["Slic_Sort"]; ?></option>
<?php
}
?>
</select>
</div>
<div class="row">
<label>State:</label><br/>
<select name="manager" id="manager-list" class="demoInputBox">
<option value="">Select Manager</option>
</select>
</div>

</div>
</div>
</body>
</html>