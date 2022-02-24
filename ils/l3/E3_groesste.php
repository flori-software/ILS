<?php
echo '<html lang="de">
<head>
<meta charset="utf-8">
<title>Größte Zahl im Array</title>
</head>
<body>';

$lottozahlen = [23, 43, 24, 7, 2, 27];
$ergebnis    = 0;
foreach ($lottozahlen as $zahl) {
    if($zahl > $ergebnis) {
        $ergebnis = $zahl;
    }
}

echo '<h1>Größte Zahl im Array</h1>';
echo '<h2> Die größte Zahl im Array ist '.$ergebnis.'</h2>';
echo '</body>
</html>';
?>