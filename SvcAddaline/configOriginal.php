<?php
 $databaseHost = "localhost"; 
 $databaseUser = "sa0392";
 $databasePassword = "so_cal";
 $databaseName = "socaloe";
 
      $con=mysqli_connect($databaseHost ,$databaseUser ,$databasePassword ) or die ('Connection Error');
      mysqli_select_db($con, "socaloe") or die ('Database Error');
 ?>