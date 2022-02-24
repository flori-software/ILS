<?php
$arr = [
    "Meier, Peter",
    "Schulze, Monika",
    "Schmidt, Ursula",
    "Brosowski, Klaus"
];

$arr_neu = Array();

foreach ($arr as $name) {
    $komma = strpos($name, ",");
    $laenge = strlen($name);
    $nachname = substr($name, 0, $komma);
    $vorname = substr($name, $komma + 2, $laenge);

    $arr_neu[] = $vorname.' '.$nachname;
}

echo "<!DOCTYPE html>\n<html lang='de'>\n<head>\n<meta charset='utf-8'>\n<title>Namendrehen</title>\n</head>\n<body>";

print_r($arr_neu);

echo "</body>\n</html>";
?>