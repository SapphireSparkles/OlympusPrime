<?php
// Add New User


 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
$EID = mysqli_real_escape_string($db, $_POST['EID']); 
$name = mysqli_real_escape_string($db, $_POST['name']); 
$lname = mysqli_real_escape_string($db, $_POST['lname']); 
$email = mysqli_real_escape_string($db, $_POST['email']); 
$phone = mysqli_real_escape_string($db, $_POST['phone']); 
$CARRIER = mysqli_real_escape_string($db, $_POST['CARRIER']); 

$opt = mysqli_real_escape_string($db, $_POST['opt']); 

$AddUser = "INSERT INTO emp_info (email, emp_id, name_first, name_last,cell,carrier,opt ) VALUES ('$email', '$EID', '$name', '$lname', '$phone', '$CARRIER', '$opt')"; 

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
<input type="text" name="EID" id="EID"  class="form-control" value = "<?php echo $EID ; ?>" readonly="readonly"
> </div>
                      </div> 
 <div class="form-group">
 <label for="name" class="col-sm-2 control-label">First Name:</label> <div class="col-sm-10">
 <input type="text" name="name" id="name" class="form-control" value = ""></div>
                      </div> 
 <div class="form-group">
 <label for="lname" class="col-sm-2 control-label">Last Name:</label> <div class="col-sm-10"><input class="form-control" type="text" name="lname" id="lname" value = ""></div>
                      </div> 
<div class="form-group">
 <label for="email" class="col-sm-2 control-label">Email:</label> <div class="col-sm-10"><input type="text" name="email" id="email"  class="form-control" value = ""></div>
                      </div> 
                      <div class="form-group">
 <label for="phone" class="col-sm-2 control-label">Cell Phone Number: </label> <div class="col-sm-10"><input   type="text" class="form-control"  name="phone" id="phone" data-inputmask='"mask": "(999) 999-9999"' data-mask> </div>  </div> 
 <div class="form-group"><label for="phone" class="col-sm-2 control-label">Carrier:</label> <div class="col-sm-10">
 <?php echo Dropdowncarrier($db,$curcarrier); ?> </div>  </div> 

	 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
<input type="checkbox" name="opt" value="opt" class="form-check-input" > 

                        <label class="form-check-label" for="opt">OPTOUT of Text Messages</label>
                      </div>
                    </div>
                  </div>

	<div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>

