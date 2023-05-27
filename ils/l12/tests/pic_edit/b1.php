<?php
$quelle = imagecreatefromjpeg("img/b1.jpg");
$ziel   = imagecreate(200, 150);
imagecopy(dst_image: $ziel, src_image: $quelle, dst_x: 0, dst_y: 0, src_x: 0, src_y: 0, src_width: 200, src_height: 150);
imagejpeg($ziel);
imagedestroy($quelle);
imagedestroy($ziel);
?>