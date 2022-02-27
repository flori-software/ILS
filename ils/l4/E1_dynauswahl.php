<?php
include("functions.php");

if(isset($_GET["auswerten"])) {
    // Hier wäre der Code zum Auswerten des Formulars
}

echo "<html lang='de'>
<head>
<meta charset='utf-8'>
<title>Einsende 1 - Dynamische Auswahlfelder</title>
</head>
<body>
<form action='".$_SERVER["PHP_SELF"]."'?auswerten=1'>\n";
$optionen1 = Array("Brot", "Butter", "Milch", "Eier", "Käse", "Wurst");
$optionen2 = Array("Schrauben", "Nägel", "Haken", "Nadeln", "Dübel");
dynAuswahl(id: "dynamisch1", name: "auswahl1", options: $optionen1, multiple: false);
dynAuswahl(id: "dynamisch2", name: "auswahl2", options: $optionen2, multiple: true);
echo "<input type='submit' value='Abschicken'>
</form>
</body>
</html>";

?>