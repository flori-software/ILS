<?php
include "db_connection.php";

echo '<html lang="de">
<head>
<meta charset="utf-8">
<title>Artikelliste</title>
</head>
<style>
body {
    font-family: helvetica;
}
</style>
<body><table border="0">
<tr>
    <th>Artikelnummer</th>
    <th>Artikelgruppe</th>
    <th>Artikelbezeichnung</th>
    <th>Preis</th>
</tr>';

$pdo = myDatabaseConnection();
$sql = "SELECT * FROM `artikel`";
if($stmt = $pdo->prepare($sql)) {
    $stmt->execute();
    while($row = $stmt->fetch()) {
        echo '<tr><td>'.$row["anr"].'</td>';
        echo '<td>'.$row["gnr"].'</td>';
        echo '<td>'.$row["name"].'</td>';
        echo '<td>'.$row["preis"].'</td></tr>';
    }
}
echo '</table></body></html>';
?>