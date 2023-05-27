<?php
$image = imagecreate(400, 450); // Arbeitsfläche wird erschaffen

// Mehrere Farben erzeugen
$bgc = imagecolorallocate($image, 230, 230, 230); // die Variable am Anfang ist der Bildzeiger
$fc1 = imagecolorallocate($image, 255, 0, 0);
$fc2 = imagecolorallocate($image, 42, 243, 3);
$fc3 = imagecolorallocate($image, 0, 12, 200);

// Hintergrundfarbe der Arbeitsfläche
imagefill($image, 0, 0, $bgc); // 2. und 3. Argument sind die linke obere Ecke der Füllfläche, es wird soweit gefüllt bis die Funktion auf einen farbigen Punkt stößt

// Rechtecke erzeugen
imagerectangle($image, 50, 60, 230, 90, $fc1);
imagefill($image, 60, 65, $fc2);                        // Rechteck wird gefüllt
imagerectangle($image, 20, 360, 130, 30, $fc1);         // leeres Rechteck
imagefilledrectangle($image, 270, 160, 330, 290, $fc2); // gefülltes Rechteck

// Winkel
// 2. und 3. Parameter = Mittelpunkt
// 4. / 5. = Breite und Höhe der Ellipse
// 6. / 7. = Startwinkel im Uhrzeigersinn und Endwinkel
// 8. Farbe des Rahmens
imagearc($image, 150, 160, 200, 100, 0, 180, $fc1);
imagearc($image, 150, 360, 200, 100, 0, 360, $fc1);
imagefill($image, 160, 365, $fc3);

// Ein Zeichen zeichnen
// 2. Argument ist die Fontgröße
imagechar($image, 5, 100, 150, 'R', $fc1);

imagepng($image);
imagedestroy($image);










?>