<?php

echo "<table border='1'> <tr><td>Report</td><td>Description</td><td>rpt_id</td></tr>";
while ( $row = $openreports->fetch_assoc() ) { 
echo "<tr>";  echo "<td>".$row["report"] ."</td>"; echo "<td>".$row["description"] ."</td>"; echo "<td>".$row["rpt_id"] ."</td>";  echo "</tr>"; 

// print_r($rows);//echo "{$row['field']}";
 } 
echo "</table>";
$openreports->free(); 


