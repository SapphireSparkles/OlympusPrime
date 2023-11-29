<?php // FETCH IMAGE & WRITE TEXT

$img = imagecreatefromjpeg('Birthday.jpg');
$white = imagecolorallocate($img, 255, 255, 255);
$txt = $_GET["name"];
$font = "C:\Windows\Fonts\arial.ttf"; 
imagettftext($img, 40, 10, 100, 150, $white, $font, $txt);

// OUTPUT IMAGE
header('Content-type: image/jpeg');
imagejpeg($img);
imagedestroy($jpg_image);

// OR SAVE TO A FILE
// THE LAST PARAMETER IS THE QUALITY FROM 0 to 100
// imagejpeg($img, "test.jpg", 100);

?>