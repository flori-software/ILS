<?php
function myDatabaseConnection() {
    try {
        $pdo = new PDO('mysql:dbname=bestelldatenbank;host=localhost;charset=utf8', 'bestell_admin', 'flori1#');
        return $pdo;
    } catch ( PDOException $e ) {
        die("Es ist ein Fehler aufgetreten!");
    } 
}









?>