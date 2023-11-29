<?php 
//xml = simplexml_load_file('http://uwkp0008fa2e:8080/addins/inside_ftpcrawl.xml');

$xmlDoc = new DOMDocument();
$xmlDoc->load("http://uwkp0008fa2e:8080/addins/inside_ftpcrawl.xml");

$servername = "UWKP0008FA2E";
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
 $db->query('delete from ftp');
//$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops some thing went wrong");
//mysql_select_db($mysql_database, $bd) or die("Oops some thing went wrong");

$xmlObject = $xmlDoc->getElementsByTagName('list_item');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
  $dir = $xmlObject->item($i)->getElementsByTagName('dir')->item(0)->childNodes->item(0)->nodeValue;
  $subdir  = $xmlObject->item($i)->getElementsByTagName('subdir')->item(0)->childNodes->item(0)->nodeValue;
  $subsubdir = $xmlObject->item($i)->getElementsByTagName('subsubdir')->item(0)->childNodes->item(0)->nodeValue;
  $file  = $xmlObject->item($i)->getElementsByTagName('file')->item(0)->childNodes->item(0)->nodeValue;
  $url  = $xmlObject->item($i)->getElementsByTagName('url')->item(0)->childNodes->item(0)->nodeValue; 
  $sql   = "INSERT INTO `ftp` (dir, subdir, subsubdir,file, url) VALUES ('$dir', '$subdir','$subsubdir', '$file', '$url')";
  
 
 
 $db->query($sql);

}

echo "done";
?>