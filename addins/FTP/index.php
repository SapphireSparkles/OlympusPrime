<?php
include 'Client.php';
use \FTP\Client;

//$options = array;
$options['server'] = 'us-ops-sp.inside.ups.com';
$options['port'] = 21;
$options['user'] = 'anonymous';
$options['pass'] = '';

//connect to server
$ftp = new Client($options);
$ftp->connect();
//got to folder
$ftp->cd('92/IND/');
//upload file
//$ftp->put('file1.zip');
//list content
$ftp->ls();
//end session
$ftp->disconnect();