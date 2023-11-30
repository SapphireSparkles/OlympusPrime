 <?php
$servername = "ttyche2.mysql.database.azure.com";
$username = "ttyche2";
$password = "ThI$V3rY$tR0nG";
$database = "dbtycche";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$db = new mysqli($servername ,$username,$password, $database ); 
?> 
