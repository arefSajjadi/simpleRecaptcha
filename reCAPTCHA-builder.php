<?php

#---------------------------------------------------make code-----------------------------------------------------------

//create code
$text = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789';
$code = '';
for ($i = 1; $i <= 6; $i++) {
    $start = rand(0, strlen($text));
    $code .= substr($text, $start, 1);
}
//store code to session
session_start();
$_SESSION['code'] = $code;

#---------------------------------------------------make image----------------------------------------------------------

// Set the content-type
header('Content-Type: image/png');
// Create the image
$img = imagecreatetruecolor(100, 50);
// Create some colors
$lightSky = imagecolorallocate($img, 135, 206, 250);
$blue = imagecolorallocate($img, 25, 25, 112);
imagefilledrectangle($img, 0, 0, 319, 59, $lightSky);
// The text to draw
imagestring($img, 5, 25, 19, $code, $blue);
imagesetthickness($img, 10);
// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($img);
imagedestroy($img);
