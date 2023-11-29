<?php

// set up basic connection

$ftp_server = "us-ops-sp.inside.ups.com/92/IND";
$conn_id = ftp_connect($ftp_server);
$ftp_user_name = "wcq3rhx";
$ftp_user_pass = "upS0918";
// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// get contents of the current directory
$contents = ftp_nlist($conn_id, ".");

// output $contents
var_dump($contents);

?>