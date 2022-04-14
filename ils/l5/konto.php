<?php
include "konto.class.php";

echo '<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<title>Kontobewegungen</title>
</head>
<body>
';
// Konto wird angelegt
$konto = new Konto(kontonummer: "DE01 1234 5678 9012 3456 78", kontostand: 512.34, kontoinhaber: "Arthur Dent");

$konto->einzahlung(1512.66);
$konto->auszahlung(1000);
$konto->einzahlung(215.5);
$konto->auszahlung(5000);
$konto->auszahlung(1198.5);
$konto->finanzstatus(ausfuehrlich: true);


echo '</body>
</html>';
?>