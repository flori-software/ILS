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
    $breite             = $_POST["breite"];
    $laenge             = $_POST["laenge"];
    $preis              = $_POST["preis"];
    $provision_prozent  = $_POST["provision_prozent"];
    // Da die leere Checkbox keinen Wert übermnittelt, wird für diesen Fall die 0 der Variable $ust zugeordnet 
    $ust                = $_POST["ust"] ?? 0;

    // Berechnung weiterer Werte
    $netto                = $breite * $laenge * $preis;
    $provision            = $netto * $provision_prozent / 100;
    $netto_incl_provision = $netto + $provision;
    if($ust == 1) {
        $brutto = $netto_incl_provision * 1.19;
    } else {
        $brutto = $netto_incl_provision;
    }
    
    // Ausgabe der Ergebnisse
    echo '<table border="0">
        <tr>
            <td>Breite:</td>
            <td>'.$breite.' m</td>
        </tr>
        <tr>
            <td>Länge:</td>
            <td>'.$laenge.' m</td>
        </tr>
        <tr>
            <td>Nettopreis:</td>
            <td>'.zahl_de($preis).' €</td>
        </tr>
        <tr>
            <td>Nettopreis mit Provision:</td>
            <td>'.zahl_de($netto_incl_provision).' €</td>
        </tr>
        <tr>
            <td>Bruttopreis:</td>
            <td>'.zahl_de($brutto).' €</td>
        </tr>
    </table>';
} else {
    // Wenn die Variablenwerte nicht zuvor per POST übergeben wurden, werden die Variablen an dieser Stelle initiiert
    $breite               = 1;
    $laenge               = 1;
    $netto                = 1;
    $preis                = 1;
    $provision_prozent    = 3;
    $netto_incl_provision = 1.03; // Eine Berechnung macht bei vorgegebenen Werten keinen Sinn
    // Wenn keine Werte übergeben wurden, ist die Checkbox für Ust nicht angeklickt, es wird also keine Ust berechnet
    $ust                  = 0;
    $brutto               = $netto_incl_provision;
}

echo '<form action="'.$_SERVER["PHP_SELF"].'?auswerten=1" method="POST">
<div>';
// Ein Grundstück unter 1m x 1m macht keinen Sinn, deshgalb die min-Angabe
// Ein Grundstückpreis unter 1 wäre schön, aber in diesem Universum nicht zu finden
input_number(id: "breite", label: "Breite: ", platzhalter: "Breite?", step: 1, min: 1, wert: $breite);
input_number(id: "laenge", label: "Länge: ", platzhalter: "Länge?", step: 1, min: 1, wert: $laenge);
input_number(id: "preis", label: "Preis pro qm", platzhalter: "Preis / qm?", step: 0.01, min: 1, wert: $preis);
$optionen = Array(3, 4, 5, 6, 7);
dynAuswahl(id: "provision_prozent", name: "provision_prozent", options: $optionen, multiple: false, label: "Provisionssatz: ");
eineCheckbox(id: "ust", name: "ust", label: "Umsatzsteuer", value: 1, vergleichswert: $ust);
echo '</div>
<p>
<input type="submit" value="Berechnen">
</p>
</form>
</body>
</html>';
?>