<style>
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}</style>

<?php
// Add New User
while ( $row = $userinfo->fetch_assoc() ) { 
	
 $curemail = $row["email"];
  $curID =	$row["emp_id"];
	$curfname = $row["name_first"];
  $curlname =	$row["name_last"];
	 $curcell= $row["cell"];
	  $curcarrier= $row["carrier"];
	  $curopt = $row["opt"];
}
		
		

 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
	 
	
$EID = mysqli_real_escape_string($db, $_POST['EID']); 
$name = mysqli_real_escape_string($db, $_POST['name']); 
$lname = mysqli_real_escape_string($db, $_POST['lname']); 
$email = mysqli_real_escape_string($db, $_POST['email']); 
$phone = mysqli_real_escape_string($db, $_POST['phone']); 
$CARRIER = mysqli_real_escape_string($db, $_POST['CARRIER']); 

$opt = mysqli_real_escape_string($db, $_POST['opt']); 
$AddUser = "UPDATE emp_info SET email='".$email."', emp_id='".$EID."',name_first='".$name."', name_last='".$lname."', cell='".$phone."', carrier='".$CARRIER."', opt='".$opt."' WHERE emp_id = '".$EID."'"; 

if($db->query($AddUser ) === TRUE){ 
	
 echo "<meta http-equiv='refresh' content='0'>";
} 
else 
{ 
echo "Error" . $sql . "<br/>" . $db->error; 
} 
$db->close(); 
} 
?>


<form  method="post" class="form-horizontal"> 
<div class="form-group">
 <label for="EID" class="col-sm-2 control-label">
Employee ID: </label>
 <div class="col-sm-10">
<input type="text" name="EID" id="EID"  class="form-control" value = "<?php echo $curID ; ?>" readonly="readonly"
> </div>
                      </div> 
 <div class="form-group">
 <label for="name" class="col-sm-2 control-label">First Name:</label> <div class="col-sm-10">
 <input type="text" name="name" id="name" class="form-control" value = "<?php echo $curfname ; ?>"></div>
                      </div> 
 <div class="form-group">
 <label for="lname" class="col-sm-2 control-label">Last Name:</label> <div class="col-sm-10"><input class="form-control" type="text" name="lname" id="lname" value = "<?php echo $curlname ; ?>"></div>
                      </div> 
<div class="form-group">
 <label for="email" class="col-sm-2 control-label">Email:</label> <div class="col-sm-10"><input type="text" name="email" id="email"  class="form-control" value = "<?php echo $curemail ; ?>"></div>
                      </div> 
                      <div class="form-group">
 <label for="phone" class="col-sm-2 control-label">Cell Phone Number: </label> <div class="col-sm-10"><input  data-inputmask='"mask": "(999) 999-9999"' data-mask type="text" class="form-control"  name="phone" id="phone" value = "<?php echo $curcell ; ?>"> </div>  </div> 
 <div class="form-group"><label for="phone" class="col-sm-2 control-label">Carrier:</label> <div class="col-sm-10">
 <?php echo Dropdowncarrier($db,$curcarrier); ?> </div>  </div> 
<?php if($curopt==true){ 
	 ?>
	 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
<input type="checkbox" name="opt" value="opt" class="form-check-input" checked> 

                        <label class="form-check-label" for="opt">OPTOUT of Text Messages</label>
                      </div>
                    </div>
                  </div>
<?php }else{  ?>
<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
<input type="checkbox" name="opt" value="opt" class="form-check-input" > 

                        <label class="form-check-label" for="opt">OPTOUT of Text Messages</label>
                      </div>
                    </div>
                  </div>
	<?php } ?>
	<div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
	
