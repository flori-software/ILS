<?php
// header('Content-Type: image/gif');

$image = imagecreate(350, 150);
$bgc   = imagecolorallocate($image, 230, 230, 230);
$fc1   = imagecolorallocate($image, 255, 0, 0);
$file =  __DIR__."/fonts/ttf/Vera.ttf";
imagettftext($image, size: 120, angle: 0, x: 10, y: 140, color: $fc1, font_filename: $file, text: "IHS");
imagejpeg($image);
imagedestroy($image);




?>