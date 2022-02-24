<?php
include("functions.php");
$auswerten = $_GET["auswerten"] ?? 0;

echo '<html lang="de">
<head>
<meta charset="utf-8">
<title>Grundstückspreise</title>
<style>
div {
    width: 300px;
    border: 1px solid gray;
    padding: 10px;
}

</style>
</head>
<body>
<h1>Grundstückspreise</h1>';

if($auswerten == 1) {
    $breite     = $_POST["breite"] ?? 1;
    $laenge     = $_POST["laenge"] ?? 1;
    $preis      = $_POST["preis"] ?? 1;
    $provision  = $_POST["provision"] ?? 3;
    $ust        = $_POST["ust"] ?? 0;

    // Berechnung weiterer Werte
    $netto                = $breite * $laenge * $preis;
    $provision            = $netto * $provision / 100;
    $netto_incl_provision = $netto + $provision;
    $brutto               = $netto_incl_provision * 1.19;

    // Ausgabe der Ergebnisse

} else {
    // Wenn die Variablenwerte nicht zuvor per POST übergeben wurden, werden die Variablen an dieser Stelle initiiert

}

echo '<form action="'.$_SERVER["PHP_SELF"].'?auswerten=1" method="POST">
<div>';
// Ein Grundstück unter 1m x 1m macht keinen Sinn, deshgalb die min-Angabe
// Ein Grundstückpreis unter 1 wäre schön, aber in diesem Universum nicht zu finden
input_number(id: "breite", label: "Breite: ", platzhalter: "Breite?", step: 1, min: 1);
input_number(id: "laenge", label: "Länge: ", platzhalter: "Länge?", step: 1, min: 1);
input_number(id: "preis", label: "Preis pro qm", platzhalter: "Preis / qm?", step: 0.01, min: 1);
$optionen = Array(3, 4, 5, 6, 7);
dynAuswahl(id: "provision", name: "provision", options: $optionen, multiple: false, label: "Provisionssatz: ");
eineCheckbox(id: "ust", name: "ust", label: "Umsatzsteuer", value: 1, vergleichswert: 0);
echo '</div>
<p>
<input type="submit" value="Berechnen">
</p>
</form>
</body>
</html>';
?>