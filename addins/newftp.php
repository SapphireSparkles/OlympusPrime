<?php

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
$alldir =  $db->query('select dir from ftp GROUP BY dir');
echo " <ul>";

while ( $row = $alldir->fetch_assoc() ) { 
  $dir = $row["dir"];
  echo "<li>". $dir . "<ul>";
$allsubdir =  $db->query("select subdir from ftp  where dir = '$dir' GROUP BY subdir");
while ( $row2 = $allsubdir->fetch_assoc() ) { 
  $subdir = $row2["subdir"];
  echo  "<li>" . $subdir . "<ul>";
  $allsubsubdir =  $db->query("select subsubdir from ftp  where subdir = '$subdir' GROUP BY subsubdir");
while ( $row3 = $allsubsubdir->fetch_assoc() ) { 
  $subsubdir = $row3["subsubdir"];
  if($subsubdir == "none"){ }else{ echo  "<li>" . $subsubdir . "<ul>"; }
$allfiles =  $db->query("select file, url  from ftp  where dir = '$dir' and  subdir = '$subdir' and subsubdir = '$subsubdir' GROUP BY file");
while ( $row4 = $allfiles->fetch_assoc() ) { 
  $file = $row4["file"];
   $url = $row4["url"];
   
   echo "<li><a href='".$url."'>" . $file. "</a></li>";
}
 if($subsubdir == "none"){ }else{ echo  "</li></ul>"; }
}
echo "</li></ul>";
}
echo "</li></ul>";
	}
		
		
		
		
