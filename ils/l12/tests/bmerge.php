<?php
$quelle = imagecreate(300, 250);
$ziel   = imagecreatefrompng("pic_edit/img/b4.png");
$bgc    = imagecolorallocate(image: $quelle, red: 230,green: 230,blue: 230);
imagefill(image: $quelle, x: 0, y: 0, color: $bgc);
$fc1    = imagecolorallocate(image: $quelle, red: 255,green: 0,blue: 0);
$file   =  __DIR__."/fonts/ttf/Vera.ttf";
imagettftext(image: $quelle, size: 26, angle: 0, x: 10, y: 33, color: $fc1, font_filename: $file, text: "Ich will fliegen");
imagecopymerge(dst_image: $ziel, src_image: $quelle, dst_x: 10, dst_y: 10, src_x: 0, src_y: 0, src_width: 250, src_height: 47, pct: 45);
imagepng($ziel);
imagedestroy($quelle);
imagedestroy($ziel);



?>