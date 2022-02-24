<?php

echo '<html lang="de">
<head>
<meta charset="utf-8">
<title>Lottozahlen</title>
</head>
<body>
<h1>Lottozahlen, die zweite:</h1>';

$lottozahlen = range(1, 49);
shuffle($lottozahlen);

echo 'Die gezogenen Zahlen sind ';
for($zahl = 0; $zahl <=5; $zahl++) {
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