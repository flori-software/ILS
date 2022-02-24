<?php
function dynAuswahl(string $id, string $name, array $options, bool $multiple, $label = "") {
    echo '<p>';
    if($label != "") {
        echo '<label for="'.$id.'">'.$label.'</label>';
    }
    echo '<select name="'.$name;
    // Eckige Klammer für die Übermittlung der Ergebnisse als Array
    if($multiple) {echo '[]';}
    echo '" id="'.$id.'" ';
    // Hier wird das Auswahlfeld ggf. zum Auswahlfeld mit Mehrfachauswahl
    if($multiple) {echo 'multiple';}
    echo '>';
    foreach ($options as $option) {
        echo '<option value="'.$option.'">'.$option.'</option>';
    }
    echo '</select>
    </p>';
}

function input_number($id, $label, $platzhalter, $step, $min = 0) {
    echo '<p>
    <label for="'.$id.'">'.$label.'</label>
    <input type="number" id="'.$id.'" name="'.$id.'" step="'.$step.'" placeholder="'.$platzhalter.'" ';
    if($min != 0) {
        echo 'min="'.$min.'"';
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
?>