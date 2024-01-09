
<?php include "inc/header.php" ?>
<?php include "inc/sidebar.php" ?>
  <?php 

if(!isset($_GET["page"])){
include "Page/main2.php" ;
} else {
$page = $_GET["page"];

   include "Page/$page.php";

} ?>
<?php include "inc/footer.php" ?>