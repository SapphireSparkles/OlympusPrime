<html>
<head>
  <title>Ftp List</title>
</head>
<body>
<?php

function ftpRecursiveFileListing($ftpConnection, $path, $parentId) {
    static $cnt = 0;
    $files = array();
    $contents = ftp_nlist($ftpConnection, $path);

    foreach($contents as $currentFile) {
        $currentFileArray = array();
        $currentFileArray[text] = $currentFile;
        $currentFileArray[parentId] = $parentId;
        $currentFileArray[id] = $cnt++;
        // assuming its a folder if there's no dot in the name
        if (strpos($currentFile, '.') === false)
            $currentFileArray[children] = $this->ftpRecursiveFileListing($ftpConnection, $currentFile, $currentFileArray[id]);
        $files [] = $currentFileArray;
    }
return $files ;
}


// connect and login to FTP server
//public function test(){
	function test(){
    $ftp_server = "us-ops-sp.inside.ups.com";
    $ftp_user_name = "anonymous";
    $ftp_user_pass = "";
    // Mise en place d'une connexion basique
    $conn_id = ftp_connect($ftp_server);
    // Identification avec un nom d'utilisateur et un mot de passe
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
    echo "<pre>";
	$handler = $this->ftpRecursiveFileListing($conn_id, '/', null);
    print_r($handler);
}
   test();
?>
</body>
</html>