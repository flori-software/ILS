<?php
function dynAuswahl(string $id, string $name, array $options, bool $multiple, $label = "", $wert = "") {
    echo "\n\t<p>\n";
    if($label != "") {
        echo "<label for='".$id."'>".$label."</label>";
    }
    echo "\t<select name='".$name;
    // Eckige Klammer für die Übermittlung der Ergebnisse als Array
    if($multiple) {echo "[]";}
    echo "' id='".$id."' ";
    // Hier wird das Auswahlfeld ggf. zum Auswahlfeld mit Mehrfachauswahl
    if($multiple) {echo "multiple";}
    echo ">\n";
    foreach ($options as $option) {
        echo "\t\t<option value='".$option."' ";
        if($option == $wert) {echo "selected";}
        echo ">".$option."</option>\n";
    }
    echo "\t</select>
    </p>\n";
}

function input_number($id, $label, $platzhalter, $step, $min = 0, $wert = 0) {
    echo '<p>
    <label for="'.$id.'">'.$label.'</label>
    <input type="number" id="'.$id.'" name="'.$id.'" step="'.$step.'" placeholder="'.$platzhalter.'" ';
    if($min != 0) {
        echo 'min="'.$min.'"';
    }
    if($wert != 0) {
        echo 'value="'.$wert.'"';
    }
    echo '>
    </p>';
}

function eineCheckbox($id, $name, $label, $value, $vergleichswert) {
    echo '<input type="checkbox" id="'.$id.'" name="'.$name.'" value="'.$value.'" ';
    if($vergleichswert == $value) {echo 'checked';}
    echo '>
    <label for="'.$id.'">'.$label.'</label>';
}

function zahl_de($zahl, $tausendertrennzeichen = true) {
	// Die Zahl wird vom Computerformat ins deutsche Format umgewandelt
	$zahl = floatval($zahl);
	if($tausendertrennzeichen == true) {
		$zahl = number_format($zahl,2,",",".");
	} else {
		$zahl = number_format($zahl,2,",","");
	}
	return $zahl;
}
?>