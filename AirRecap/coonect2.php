
<?php
$EID = "0";


if(isset($_GET["Updateme"])){
	$Updateme = $_GET["Updateme"];

}else{
$Updateme = 0;
}

$servername2 = "ttyche2.mysql.database.azure.com";
$username2 = "ttyche2";
$password2 = "ThI$V3rY$tR0nG";
$database2 = "dbtycche";
// Create connection
$conn2 = mysqli_connect($servername2, $username2, $password2);

// Check connection
if (!$conn2) {
die("Connection failed: " . mysqli_connect_error());
}
$db2 = new mysqli($servername2 ,$username2,$password2, $database2 ); 
?> 
