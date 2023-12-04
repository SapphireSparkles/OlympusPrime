
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10"/>
<?php
if(!isset($_GET["eeid"])){
$EID = 0;
}else{
$EID = $_GET["eeid"];

}
if(isset($_GET["Updateme"])){
	$Updateme = $_GET["Updateme"];

}else{
$Updateme = 0;
}

$servername = "ttyche2.mysql.database.azure.com";
$username = "ttyche2";
$password = 'ThI$V3rY$tR0nG';
$database = "dbzeus";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$db = new mysqli($servername ,$username,$password, $database ); 
?> 
