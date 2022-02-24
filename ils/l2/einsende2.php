<?php
function Sekunden_in_Zeit_umrechnen ($zeit) {
    $antwort = Array();
    // Berechnung der Restsekunden nach dem Teilen in Minuten
    $antwort["Sekunden"] = $zeit % 60;
    $zeit               -= $antwort["Sekunden"];
    #echo $antwort["Sekunden"].', es bleibt '.$zeit.'<br>';

    // Umrechnung in Minuten
    $zeit /= 60;
    // Berechnung der Restminuten nach dem Teilen in Stunden
    $antwort["Minuten"]  = $zeit % 60;
    $zeit               -= $antwort["Minuten"];

    #echo $antwort["Minuten"].', es bleibt '.$zeit.'<br>';
    // Stunden ist der übriggebliebene Wert
    $antwort["Stunden"]  = $zeit / 60;
    return $antwort;
}

$sekunden = 100000;
$zeit     = Sekunden_in_Zeit_umrechnen(zeit: $sekunden);

echo '<html lang="de">
<head>
<meta charset="utf-8">
<title>Einsendeaufgabe 2</title>
</head>
<body>
<h1>Zeitumrechnung mit Modulo</h1>
Eingegebene Sekunden: '.$sekunden.'<br>
Umgerechnet: '.$zeit["Stunden"].' Stunde(n), '.$zeit["Minuten"].' Minute(n), '.$zeit["Sekunden"].' Sekunde(n)
</body>
</html>';

?>