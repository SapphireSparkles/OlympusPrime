<?php

//Connect to the database

$link = mysqli_connect("ttyche2.mysql.database.azure.com", "ttyche2", "ThI$V3rY$tR0nG") or die(mysqli_error());
mysqli_select_db($link, "dbtycche") or die(mysqli_error($link));

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//Grab the destination page from the link
$redirect = mysqli_real_escape_string($link, $_GET['page']);
$rpt = mysqli_real_escape_string($link, $_GET['rpt']);

//Insert the destination page and timestamp into your database

$page_insert = mysqli_query($link,"INSERT INTO tracking_table (`rec_use_page`, `rec_use_date`, `rpt_id`, `IPadd`) VALUES ('$redirect', now(),'$rpt','$ip')") or die(mysqli_error($link));

//Redirect the user to their intended location
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Location:'.$redirect);



?>