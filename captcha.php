<?php
session_start();

$_SESSION['captcha'] = mt_rand(100000,999999);

$image = imagecreate(164, 50);
$police = 'police/test.ttf';

$background = imagecolorallocate($image, 255, 255, 255);
$textcolor = imagecolorallocate($image, 0, 0, 0);

imagettftext($image, 32, 0 ,3, 42, $textcolor, $police, $_SESSION['captcha']);


header('Content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);


?>