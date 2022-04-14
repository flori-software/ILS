<?php

use Mitarbeiter as GlobalMitarbeiter;

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

    public function __construct(string $nname, string $vname, int $gruppierung, int $steuerklasse, string $kontonummer) {
        parent::__construct($nname, $vname);
        $this->set_gruppierung($gruppierung);
        $this->set_steuerklasse($steuerklasse);
        $this->set_kontonummer($kontonummer);
    }

    private function set_gruppierung($gruppierung) {
        $this->gruppierung = $gruppierung;
    }

    private function set_steuerklasse($steuerklasse) {
        $this->steuerklasse = $steuerklasse;
    }

    private function set_kontonummer($kontonummer) {
        $this->kontonummer = $kontonummer;
    }

    public function get_gruppierung(): int {
        return $this->gruppierung;
    }

    public function get_steuerklasse(): int {
        return $this->steuerklasse;
    }

    public function get_kontonummer(): string {
        return $this->kontonummer;
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
$mitarbeiter = new Mitarbeiter(nname: "Meier", vname: "Hänschen", gruppierung: 10, steuerklasse: 3, kontonummer: "DE489654655465450012");

echo '<p>Der Mitarbeiter '.$mitarbeiter->getName().' '.$mitarbeiter->getVorname().' hat die Kontonummer '.$mitarbeiter->get_kontonummer().'. ';
echo 'Die Steuerklasse ist '.$mitarbeiter->get_steuerklasse().' und die Gruppierung '.$mitarbeiter->get_gruppierung().'.</p>';

var_dump($mitarbeiter);

echo '</body>
</html>';
?>