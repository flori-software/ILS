<?php
/*
$image = imagecreate ( 300, 150 );
$bgc = imagecolorallocate ( $image, 243, 3, 43 );
imagefill ( $image, 0, 0, $bgc );
imagegif ( $image );
imagedestroy($image);
*/
$breite = 200;
$hoehe  = 200;

$bild = imagecreatetruecolor($breite, $hoehe);

$hintergrund = imagecolorallocate($bild, 255, 255, 255);
imagefill($bild, 0, 0, $hintergrund);

$farbe = imagecolorallocate($bild, 255, 0, 0);
imagerectangle($bild, 50, 50, 150, 150, $farbe);

header('Content-Type: image/png');

imagedestroy($bild);
?>