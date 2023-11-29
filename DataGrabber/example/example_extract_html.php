<?php // RAY_temp_fronius_curl_login.php
error_reporting(E_ALL);
echo "<pre>\n";

// THIS STRING (CASE SENSITIVE) HAS THE LOGIN CREDENTIALS FOR THE SITE
$post = "userName=2041146&password=Love5806";

// READ THE SITE PAGE WITH THE LOGIN FORM
$baseurl = 'https://ep.ups.com/UPSRegistration/UPSLogin';

// FOR FRONIUS USE AN EXPLICIT URL TO PROCESS THE LOGIN
$posturl = 'https://ep.ups.com/UPSRegistration/upspublic/silentLogin.jsp';

// WHERE TO GO AFTER THE LOGIN
$nexturl = 'https://ep.ups.com/upsers/myportal/portalhome/Home/!ut/p/z1/04_Sj9CPykssy0xPLMnMz0vMAfIjo8zijRydjQydTQy93c2DnQwCDQIMgp2dvIw8vEz0wwkpiAJKG-AAjgZA_VFgJXAT_D3NjQwcXV2cA30cXTwdvUyhCvCYUZAbYZDpqKgIALgmmrk!/dz/d5/L2dBISEvZ0FBIS9nQSEh/';

// SET UP OUR CURL ENVIRONMENT
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $baseurl);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR,  'cookie.txt');
curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

// CALL THE WEB PAGE
$htm = curl_exec($ch);
$err = curl_errno($ch);
$inf = curl_getinfo($ch);
if ($htm === FALSE)
{
    echo "\nCURL GET FAIL: $baseurl CURL_ERRNO=$err ";
    var_dump($inf);
    die();
}

// NOW POST THE DATA WE HAVE FILLED IN
curl_setopt($ch, CURLOPT_URL, $posturl);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// WAIT A RESPECTABLE PERIOD OF TIME
sleep(3);

// CALL THE WEB PAGE TO COMPLETE THE LOGIN
$xyz = curl_exec($ch);
$err = curl_errno($ch);
$inf = curl_getinfo($ch);
if ($xyz === FALSE)
{
    echo "\nCURL POST FAIL: $posturl CURL_ERRNO=$err ";
    var_dump($inf);
}

// NOW ON TO THE NEXT PAGE
curl_setopt($ch, CURLOPT_URL, $nexturl);
curl_setopt($ch, CURLOPT_POST, FALSE);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');

$xyz = curl_exec($ch);
$err = curl_errno($ch);
$inf = curl_getinfo($ch);
if ($xyz === FALSE)
{
    echo "\nCURL 2ND GET FAIL: $posturl CURL_ERRNO=$err ";
    var_dump($inf);
}

// ACIVATE THIS TO SHOW OFF THE DATA WE RETRIEVED AFTER THE LOGIN
echo htmlentities($xyz);

// REFINE THE DATA SOME
$xyz = strip_tags($xyz, '<div><td>');
$arr = explode('<div id="ctl00_MainContent_UpdatePanel1">', $xyz);
// KEEP THE SECOND HALF
$xyz = $arr[1];
// ADD SOME INSURANCE ABOUT SPACING
$xyz = str_replace('>', '> ', $xyz);
$xyz = strip_tags($xyz);
echo htmlentities($xyz);