<?php

echo '<html lang="de">
<head>
<meta charset="utf-8">
<title>Lottozahlen</title>
</head>
<body>
<h1>Lottozahlen</h1>';

$lottozahlen = Array();
for($zahl = 1; $zahl <= 6; $zahl++) {
    $erfolgreiches_ziehen = false;
    do {
        $gezogene_zahl = rand(1, 49);
        if(!in_array($gezogene_zahl, $lottozahlen)) {
            // Die soeben gezogene Zahl wurde bisher nicht gezogen
            $erfolgreiches_ziehen = true;
        }
    } while(!$erfolgreiches_ziehen);
    $lottozahlen[] = $gezogene_zahl;
}

echo 'Die gezogenen Zahlen sind ';
for($zahl = 0; $zahl <= 5; $zahl++) {
    echo $lottozahlen[$zahl];
    if($zahl == 5) {
        echo '.';
    } else {
        echo ', ';
    }
}

echo '</body>
</html>';

?>