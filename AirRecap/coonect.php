
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10"/>
<?php
$EID = "0";


if(isset($_GET["Updateme"])){
	$Updateme = $_GET["Updateme"];

}else{
$Updateme = 0;
}

$servername = "localhost";
$username = "ttyche2";
$password = "ThI$V3rY$tR0nG";
$database = "recap";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$db = new mysqli($servername ,$username,$password, $database ); 
?> 
