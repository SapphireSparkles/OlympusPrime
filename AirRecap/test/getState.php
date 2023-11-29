<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["country_id"])) {
    $query = "SELECT * FROM tbl_hubslics WHERE SlicSort = '" . $_POST["country_id"] . "'";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select Manager</option>
<?php
    foreach ($results as $state) {
        ?>
<option  selected="selected" value="<?php echo $state["SrtMgrName"]; ?>"><?php echo $state["SrtMgrName"]; ?></option>
<?php
    }
}
?>