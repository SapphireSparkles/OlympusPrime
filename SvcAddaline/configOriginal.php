<?php
 $databaseHost = "ttyche2.mysql.database.azure.com"; 
 $databaseUser = "ttyche2";
 $databasePassword = "ThI$V3rY$tR0nG";
 $databaseName = "dbtycche";
 
      $con=mysqli_connect($databaseHost ,$databaseUser ,$databasePassword ) or die ('Connection Error');
      mysqli_select_db($con, "dbtycche") or die ('Database Error');
 ?>