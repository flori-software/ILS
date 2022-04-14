<?php
class Person {
    protected string $name;
    protected string $vorname;

    public function __construct(string $nname, string $vname) {
        $this->name    = $nname;
        $this->vorname = $vname;
    }

    public function setName(string $nname) {
        $this->name = $nname;
    }

    public function getName(): string {
        return $this->name;
    } 

    public function setVorname($vname) {
        $this->vorname = $vname;
    }

    public function getVorname(): string {
        return $this->vorname;
    }
}

class Mitarbeiter extends Person {
    private int    $gruppierung;
    private int    $steuerklasse;
    private string $kontonummer;
}

class Kunde extends Person {
    private int $bonitaet;

    public function setBonitaet(int $boni) {
        $this->bonitaet = $boni;
    }

    public function getBonitaet(): int {
        return $this->bonitaet;
    }
}

echo '<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<title>Einsendeaufgabe 1 - Klassendiagramm umsetzen</title>
</head>
<body>
';

$fritz = new Person(nname: "Fischer", vname: "Fritz");
var_dump($fritz);

$maria = new Mitarbeiter(nname: "Schulze", vname: "Maria");
var_dump($maria);

$timon = new Kunde(nname: "Fähnrich", vname: "Timon");
$timon->setBonitaet(0);
var_dump($timon);



echo '</body>
</html>';


?>