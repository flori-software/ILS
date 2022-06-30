<?php
include "db_connection.php";
// Anwendung von fetchAll
$pdo = myDatabaseConnection();

$anr = 5;
$sql = "SELECT * FROM `artikel` WHERE anr= :anr";
if($stmt = $pdo->prepare($sql)) {
    $stmt->bindParam(':anr', $anr);
    $stmt->execute();
    while($row = $stmt->fetch()) {
        echo 'Artikelname: '.$row["name"].'<br>';
        echo 'Preis: '.$row["preis"].'<p>';
    }
}



?>