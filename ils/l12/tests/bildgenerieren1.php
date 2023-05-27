<?php 
$image = imagecreate ( 300, 150 );
$bgc = imagecolorallocate ( $image, 243, 3, 43 );
imagefill ( $image, 0, 0, $bgc );
imagejpeg ( $image );
imagedestroy($image);
?>