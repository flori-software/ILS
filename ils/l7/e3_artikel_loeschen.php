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
<body>';
$pdo = myDatabaseConnection();

// Löschen eines Artikels aus der Liste
if(isset($_POST["idArtikel"])) {
    $idArtikel = $_POST["idArtikel"];
    $sql = "DELETE FROM `artikel` WHERE anr= :anr";
    if($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(':anr', $idArtikel);
        $stmt->execute();
        echo 'Der Artikel Nr. '.$idArtikel.' wurde gelöscht.<br>';
        header("refresh:3; url=e3_artikel_loeschen.php");
    }
} else {
    // Anzeige der übrigen Artikel
    $sql = "SELECT artikel.anr, artikel.name FROM `artikel`";
    echo '<form method="post">';
    if($stmt = $pdo->prepare($sql)) {
        $stmt->execute();
        echo 'Artikel:&nbsp;<select name="idArtikel">';
        while($row = $stmt->fetch()) {
            echo '<option value="'.$row["anr"].'">'.$row["anr"].' | '.$row["name"].'</option>';
            
        }
    echo '</select>';
    }
    echo '&nbsp;<input type="submit" value="Datensatz löschen">
    </form>';
}
echo '</body></html>';
?>