<?php
class Person {
    protected string $name;
    protected string $vorname;

    public function __construct(string $nname, string $vname) {

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

}

class Kunde extends Person {
    
}









?>