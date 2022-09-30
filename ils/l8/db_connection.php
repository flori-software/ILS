<?php
function myDatabaseConnection() {
    try {
        $pdo = new PDO('mysql:dbname=nation;host=localhost;charset=utf8', 'nation', 'test1234');
        return $pdo;
    } catch ( PDOException $e ) {
        die("Es ist ein Fehler aufgetreten!");
    } 
}

function my_selectField($tabelle, $angezeigter_inhalt, $werte, $treffer = 0) {
    $pdo = myDatabaseConnection();

    // Daten lesen
    $sql = "SELECT * FROM ".$tabelle." ORDER BY ".$angezeigter_inhalt." ASC";
    $anzeigeliste = Array();
    $werteliste   = Array();
    if($stmt = $pdo->prepare($sql)) {
        $stmt->execute();
        while($row = $stmt->fetch()) {
            $anzeigeliste[] = $row["$angezeigter_inhalt"];
            $werteliste[]    = $row["$werte"];
        }
    }

    // Liste der SELECT-Elements füllen
    echo '<option value="0">k.A.</option>';
    foreach ($anzeigeliste as $key => $anzeige) {
        echo '<option value="'.$werteliste[$key].'" ';
        if($werteliste[$key] == $treffer) {echo 'selected';}
        echo '>'.$anzeige.'</option>';
    }
}
?>