<?php
$quelle = imagecreatefromjpeg("img/b3.jpg");
$ziel   = imagecreate(200, 150);
imagecopyresized($ziel, $quelle, 0, 0, 0, 0, 200, 150, imagesx($quelle), imagesy($quelle));
imagejpeg($ziel);
imagedestroy($quelle);
imagedestroy($ziel);






?>