
<?php
include "db_connection.php";
include "klassen.php";

// Daten holen
$daten_zeigen = $_GET["daten_zeigen"] ?? 0;
$region       = $_POST["region"] ?? 0;
if($daten_zeigen == 1) {
    $region_id     = $_POST["region"] ?? 0;
    $laender       = new laender(region_id: $region_id);
    $meine_laender = $laender->get_laender();
}

// Ergebnisse werden angezeigt
echo '<html lang="de">
<head>
<meta charset="utf-8">
<title>Hard Facts</title>
<style>
    .my_title {
        position: relative;
        left: 30%;
        font-family: Helvetica;
        font-weight: lighter;
        font-size: 36px;

    }

    .normal {
        position: relative;
        left: 30%;
        font-family: Helvetica;
        font-weight: lighter;
        font-size: 16px;
    }
    select {
        position: relative;
        left: 24%;
        font-family: Helvetica;
        font-weight: lighter;
        font-size: 20px;
    }
</style>
</head>
<body>
<span class="my_title">HARD FACTS ABOUT THE WORLD</span>
<div class="normal" style="top: 40px;">
Bitte wählen Sie die Region aus, deren Daten angezeigt werden sollen:<br>
<form action="index.php?daten_zeigen=1" id="form_nations" method="POST" onchange="senden()">
<p><select name="region">';
my_selectField(tabelle: "regions", angezeigter_inhalt: "name", werte: "region_id", treffer: $region);
echo '</select></p>
</form></div>
<div class="normal" style="top: 50px;">
<table>
<tr><th>Land</th><th>Fläche</th><th>AVG BIP</th><th>AVG Bevölkerung</th><th>Kontinent</th></tr>';
foreach ($laender as $land) {
    echo '<tr><td>'.$land->land.'</td><td>'.$land->flaeche.'</td></tr>';
}
echo '</table>
</div>';

echo '</body></html>';

?>
<script>
    function senden() {
        document.getElementById("form_nations").submit();
    }

</script>