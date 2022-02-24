<?php

echo '<html lang="de">
<head>
<meta charset="utf-8">
<title>Keine Vokale</title>
</head>
<body>
<h1>Keine Vokale</h1>';
$woerter         = ["Maus", "Automobil", "Schifffahrt", "Hund", "Katze", "Ziege", "Stanniolpapier", "Elefant", "Isopropylalkohol", "Schwimmbad"];
$vokale          = ["A", "U", "I", "E", "O", "Y", "a", "u", "i", "e", "o", "y"];
$anzahl_elemente = count($woerter);

// Eins wird subtrahiert, da wir von der Anzahl auf einen möglichen Schlüssel wollen, und der beginnt bei 0
$anzahl_elemente--;
$zufallselement  =  rand(0, $anzahl_elemente);

// Gesamtlänge bestimmen
$anzahl_buchstaben = strlen($woerter[$zufallselement]);

// Von der Gesamtlänge werden nun die Vokale abgezogen
// je ein Vokal - falls er im String vorkommt, bei jedem Schleifendurchlauf
foreach($vokale as $vokal) {
    $anzahl_treffer = substr_count($woerter[$zufallselement], $vokal);
    $anzahl_buchstaben = $anzahl_buchstaben - $anzahl_treffer;
}

echo 'Das Wort '.$woerter[$zufallselement].' hat '.$anzahl_buchstaben.' Zeichen, die keine Vokale sind.<br>';
echo '</body>
</html>';
?>