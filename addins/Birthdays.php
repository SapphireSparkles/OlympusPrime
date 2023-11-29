
<?php

$servername = "localhost";
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

$date = date('2018-m-d');


$alldir =  $db->query("SELECT * FROM `92employees` where BIRTH = '$date'  ORDER BY 'Last Name' ASC");

$row_cnt = $alldir->num_rows; ?>
<li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-birthday-cake"></i>
<span class="badge badge-danger navbar-badge"> <?php echo $row_cnt ; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<?php
while ( $row = $alldir->fetch_assoc() ) { 

	  $Firstname = ucwords( strtolower($row["First Name"]));
	   $Lastname = ucwords( strtolower($row["Last Name"]));
	   $div = $row["DIV"];
	   $op = $row["OPERATION"];
	    $email = $row["EMAIL"];
	    
	    ?>
	 
          <a href="<?php echo "mailto:" . $email. "?subject=Happy Birthday " . $Firstname;?>" class="dropdown-item">
          
                 <?php echo "<font color='#000000'>" . $Firstname . " " . $Lastname . "</a>"; ?>
                
              <span class="float-right text-muted text-sm">
                <?php echo $div ; ?>
                </span>
           
                       </a>
          <div class="dropdown-divider"></div>
            <?php   
 
}
?>


       