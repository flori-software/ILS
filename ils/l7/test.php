<?php
include "db_connection.php";

// Anwendung von fetchAll
$pdo = myDatabaseConnection();
if($stmt = $pdo->query("SELECT * FROM `artikel`")) {
    $data = $stmt->fetchAll();
    echo '<pre>', print_r($data), '</pre>';
}

// Anwendung von PDOStatement
// Bei jedem Aufurf von FETCH kommt ein Datensatz
$abfrage = "SELECT * FROM `artikel`";

if($stmt = $pdo->query($abfrage)) {
    echo '<h2>PDO::FETCH_ASSOC</h2>';
    $a = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<pre>", print_r($a), "</pre>";

    $a = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<pre>", print_r($a), "</pre>";
}


// Möglich sind auch FETCH_NUM, FETCH_BOTH, FETCH_OBJ, FETCH_LAZY
if($stmt = $pdo->query($abfrage)) {
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<pre>", print_r($row), "</pre>";
    }
}

?>