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
echo '<META HTTP-EQUIV=REFRESH CONTENT="0; http://uwkp0008fa2e:8080/index.php/superweb?eid='.$EID.'">';
} 
else 
{ 
echo "Error" . $sql . "<br/>" . $db->error; 
} 
$db->close(); 
} 
?>


<form  method="post"> 
<label>Employee ID: </label><input type="text" name="EID" id="EID" value = "<?php echo $EID ; ?>" readonly="readonly"
><br/><br/> 
<label>Name:</label><input type="text" name="name" id="name" value = ""><br/><br/> 
<label>Last Name:</label><input type="text" name="lname" id="lname" value = ""><br/><br/> 
<label>Email:</label><input type="text" name="email" id="email" value = ""><br/><br/> 
<label>Cell Phone Number: </label><input type="text" name="phone" id="phone" value = ""><br/><br/> 
<?php echo "<b>Carrier:</b>"; 
 Dropdowncarrier($db,$curcarrier); ?><br>


	<input type="checkbox" name="opt" value="opt" > OPTOUT of Text Messages

	<br>
<input type="submit" value="Submit"> 