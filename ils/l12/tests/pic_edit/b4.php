<?php
$quelle = imagecreatefrompng('img/b4.png');
$ziel = imagecreate(200, 150 );
$bgc=imagecolorallocate ( $ziel, 243, 3, 43 );
imagefill($ziel,0,0,$bgc);
imagecopyresampled ($ziel, $quelle, 50, 50, 10, 10,
imagesx($quelle)/2, imagesy($quelle)/3,
imagesx($quelle),imagesy($quelle));
imagegif($ziel);
imagedestroy($quelle);
imagedestroy($ziel);




?>