<?php
$servername = "localhost";
$username = "ttyche2";
$password = "ThI$V3rY$tR0nG";
$dbname = "dbtycche";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql ="SELECT i.rpt_id as areport,count(i.rpt_id) as thecount, ii.link as blink
FROM tracking_table i
LEFT JOIN Reportftp ii 
  ON i.rpt_id = ii.rpt_id 
where  i.rec_use_page NOT LIKE '%ftp:/%'
GROUP BY i.rpt_id ORDER BY COUNT(i.rpt_id) desc LIMIT 6";

$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result))
   
if ($result->num_rows > 0) {

// output data of each row
while($row = $result->fetch_assoc()) {
echo  "<a href ='" .$row['blink']. "' target='_blank'>" .$row['areport']. "</a><br>"  ;
 
"<br>";
}
} else {
echo "0 results";
}
$conn->close();
?> 
