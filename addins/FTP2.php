<?php 
/** 
 * ftpRecursiveFileListing 
 * 
 * Get a recursive listing of all files in all subfolders given an ftp handle and path 
 * 
 * @param resource $ftpConnection  the ftp connection handle 
 * @param string $path  the folder/directory path 
 * @return array $allFiles the list of files in the format: directory => $filename 
 * @author Niklas Berglund 
 * @author Vijay Mahrra 
 */ 
function ftpRecursiveFileListing() { 
    set_time_limit(0);

    static $allFiles = array(); 
       if (isset($_GET['dir'])) 
    { 
    $dir = $_GET['dir'];
    } else {
    $dir = '/92/IND/';
    }

    $ftp_server = "us-ops-sp.inside.ups.com";
    $ftp_conn = ftp_connect($ftp_server);
    $ftp_username = "anonymous";
    $ftp_userpass = "";
    $ftpConnection = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);
    $except = array("rar", "zip", "mp3", "mp4", "mp3", "mov", "flv", "wmv", "swf", "png", "gif", "jpg", "bmp", "avi", "xls", "xlsx", "xlsm");
    $imp = implode('|', $except);
    If($dir == '/92/IND/'){
    }else{
    echo "<div></div><a href=\"javascript:history.go(-1)\">GO BACK</a><br>";
    }

    $contents = ftp_nlist($ftp_conn, $dir); 

    foreach($contents as $currentFile) { 
        // assuming its a folder if there's no dot in the name 
        if (strpos($currentFile, '.') === false) { 
            ftpRecursiveFileListing($ftpConnection, $currentFile); 
        } 
        $allFiles[$dir][] = substr($currentFile, strlen($dir) + 1); 
    } 
    return $allFiles; 
} 

ftpRecursiveFileListing();
?> 