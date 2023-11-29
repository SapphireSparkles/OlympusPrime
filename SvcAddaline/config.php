 <?php
$servername = "UWKP0008FA2E";
$username = "sa0392";
$password = "so_cal";
$database = "socaloe";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$db = new mysqli($servername ,$username,$password, $database ); 
?> 
