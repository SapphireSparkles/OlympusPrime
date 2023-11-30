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
	
echo '<META HTTP-EQUIV=REFRESH CONTENT="0; index.php/superweb?eid='.$EID.'">';
} 
else 
{ 
echo "Error" . $sql . "<br/>" . $db->error; 
} 
$db->close(); 
} 
?>


<form  method="post"> 
<label>Employee ID: </label><input type="text" name="EID" id="EID" value = "<?php echo $curID ; ?>" readonly="readonly"
><br/><br/> 
<label>Name:</label><input type="text" name="name" id="name" value = "<?php echo $curfname ; ?>"><br/><br/> 
<label>Last Name:</label><input type="text" name="lname" id="lname" value = "<?php echo $curlname ; ?>"><br/><br/> 
<label>Email:</label><input type="text" name="email" id="email" value = "<?php echo $curemail ; ?>"><br/><br/> 
<label>Cell Phone Number: </label><input type="text" name="phone" id="phone" value = "<?php echo $curcell ; ?>"><br/><br/> 
<?php echo "<b>Carrier:</b>"; 
 Dropdowncarrier($db,$curcarrier); ?><br>
<?php if($curopt==true){ 
	 ?>
<input type="checkbox" name="opt" value="opt" checked> OPTOUT of Text Messages
<?php }else{  ?>
	<input type="checkbox" name="opt" value="opt" > OPTOUT of Text Messages
	<?php } ?>
	<br>
<input type="submit" value="Submit">    <a href="index.php/superweb?eid=<?php echo $EID; ?>" class="button">Cancel</a>