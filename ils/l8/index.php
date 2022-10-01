
<?php
include "db_connection.php";
include "klassen.php";

// Daten holen
$daten_zeigen = $_GET["daten_zeigen"] ?? 0;
$region       = $_POST["region"] ?? 0;
if($daten_zeigen == 1 && $region != 0) {
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
        left: 20%;
        font-family: Helvetica;
        font-weight: lighter;
        font-size: 36px;

    }

    .normal {
        position: relative;
        left: 20%;
        font-family: Helvetica;
        font-weight: lighter;
        font-size: 16px;
    }
    select {
        position: relative;
        left: 19%;
        font-family: Helvetica;
        font-weight: lighter;
        font-size: 20px;
    }
    td {
        width: 20%
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
</form></div>';
if(isset($meine_laender)) {
    echo '<div class="normal" style="top: 50px;">
    <table>
    <tr style="font-weight: bold;"><td>Land</td><td>Fläche</td><td>AVG BIP</td><td>AVG Bevölkerung</td><td>Kontinent</td></tr>';
    foreach ($meine_laender as $land) {
        echo '<tr><td>'.$land->land.'</td><td>'.$land->flaeche.'</td><td>'.$land->avg_bip.'</td>
        <td>'.$land->avg_bevoelkerung.'</td><td>'.$land->kontinent.'</td></tr>';
        // 
    }
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