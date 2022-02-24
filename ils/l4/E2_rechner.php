<?php
include("functions.php");
$auswerten = $_GET["auswerten"] ?? 0;

echo '<html lang="de">
<head>
<meta charset="utf-8">
<title>Rechner</title>
<style>
input {
    width: 200px;
}

</style>
</head>
<body>';

if($auswerten == 1) {
    $zahl1           = $_POST["zahl1"] ?? 0;
    $zahl2           = $_POST["zahl2"] ?? 0;
    $rechenoperation = $_POST["rechenoperation"] ?? "";

    // Überprüfung möglicher Fehler
    if($rechenoperation == "") {
        echo '<h3>Ich verstehe, dass du dich nicht wirklich entscheiden konntest, was du rechnen möchtest.<br>
        Das ist o.k., ich verstehe das. Nicht jeder rechnet gerne.<br>
        Aber was machst du dann eigentlich hier?... Du könntest auch ein Buch lesen oder im Wald spazieren gehen!
        Oder du wählst eine Rechenoperation.</h3>';
    } elseif ($rechenoperation == "geteilt" && ($zahl2 == "" || $zahl2 == 0)) {
        if($zahl1 == 0 || $zahl1 == "") {
            echo '<h3>Stell dir vor, du hast null Kekse und verteilst sie gleichmäßig auf null Freunde. Wie viele Kekse bekommt jeder? Siehst du, das ergibt keinen Sinn. Und das Krümmelmonster ist traurig, weil es keine Kekese mehr gibt. Und du bist traurig, weil du keine Freunde hast.</h3>';
        } else {
            echo '<h3>Stell dir vor, du hast '.$zahl1.' Kekse und verteilst sie gleichmäßig auf null Freunde. Siehst du? Ergibt keinen Sinn. Aber das Krümmelmonster ist glücklcih, weil es alle Kekse bekommt!</h3>';
            echo '<h1>Miam... miam.... miam!</h1>';
        } 
    } else {
        // Es gibt zwei gültige Zahlen und eine gültige Rechenoperation
        switch ($rechenoperation) {
            case 'plus':
                $ergebnis = $zahl1 + $zahl2;
                $zeichen  = "+";
            break;
            
            case 'minus':
                $ergebnis = $zahl1 - $zahl2;
                $zeichen  = "-";
            break;

            case 'mal':
                $ergebnis = $zahl1 * $zahl2;
                $zeichen  = "*";
            break;

            case 'geteilt':
                $ergebnis = $zahl1 / $zahl2;
                $zeichen  = "/";
            break;
        }
        echo '<h3>'.$zahl1.' '.$zeichen.' '.$zahl2.' = '.$ergebnis.'</h3>';
    }
}


echo '<h2>Bitte geben Sie die beiden Zahlen in die Felder ein:</h2>
<form action="'.$_SERVER["PHP_SELF"].'?auswerten=1" method="POST">';
input_number(id: "zahl1", label: "Zahl 1: ", platzhalter: "Bitte die erste Zahl eingeben", step: 0.01);
input_number(id: "zahl2", label: "Zahl 2: ", platzhalter: "Bitte die zweite Zahl eingeben", step: 0.01);
$radiobuttons_labels = Array("+", "-", "*", "/");
$radiobuttons_werte  = Array("plus", "minus", "mal", "geteilt");

foreach ($radiobuttons_labels as $key => $label) {
    echo '<p>
    <input type="radio" id="'.$radiobuttons_werte[$key].'" name="rechenoperation" value="'.$radiobuttons_werte[$key].'">
    <label for="'.$radiobuttons_werte[$key].'">'.$label.'</label>
    </p>';
}

echo '<input type="submit" value="Rechnen">
</form>
</body>
</html>';



?>