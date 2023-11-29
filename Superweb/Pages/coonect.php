
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10"/>
<?php
if(!isset($_GET["eid"])){
$EID = 0;
}else{
$EID = $_GET["eid"];

}
if(isset($_GET["Updateme"])){
	$Updateme = $_GET["Updateme"];

}else{
$Updateme = 0;
}

$servername = "localhost";
$username = "sa0392";
$password = "so_cal";
$database = "superweb";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$db = new mysqli($servername ,$username,$password, $database ); 
?> 
