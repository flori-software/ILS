<?php

echo "<html lang='de'>
<head>
<meta charset='utf-8'>
<title>1 mal 1</title>
</head>
<body>
\t<h1>Das kleine 1 mal 1</th1>
\t<table style='border-spacing: 15px;'>
\t<thead>
\t<tr>
\t\t<td>*</td>\n";

// Überschrift
for ($ueberschrift = 1; $ueberschrift <= 10; $ueberschrift++) {
    echo "\t\t<td>".$ueberschrift."</td>\n";
}
echo "\t</tr>\n\t</thead>\n";

// Tabelle die auf eine magische Art und Weise Zahlen multipliziert....
echo "\t<tbody>\n";
for ($zeile = 1; $zeile <=10; $zeile++) {
    // Zahl mit der multipliziert wird
    echo "\t<tr>\n\t\t<th>".$zeile."</th>\n";

    // DAS ERGEBNIS !!!
    for($spalte = 1; $spalte <= 10; $spalte++) {
        $ergebnis = $zeile * $spalte;
        echo "\t\t<td>".$ergebnis."</td>\n";
    }
    echo "\t</tr>\n";
}
echo "\t</tbody>";



echo "\n</body>
</html>";

?>