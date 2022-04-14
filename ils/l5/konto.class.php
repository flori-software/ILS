<?php
class Konto {
    private string $kontonummer;
    private float  $kontostand;
    private string $kontoinhaber;

    public function __construct(string $kontonummer, float $kontostand, string $kontoinhaber) {
        $this->setKontonummer(nummer: $kontonummer);
        $this->setKontostand(saldo: $kontostand);
        $this->setKontoinhaber(name: $kontoinhaber);
        echo '<p>Es wurde ein Konto für '.$this->kontoinhaber.' mit der Kontonummer '.$this->kontonummer.' und dem Anfangssaldo von '.$this->zahl_de($this->kontostand).' angelegt.</p>';
    }

    private function setKontonummer(string $nummer) {
        $this->kontonummer = $nummer;
    }

    private function setKontostand(float $saldo) {
        $this->kontostand = $saldo;
    }

    private function setKontoinhaber(string $name) {
        $this->kontoinhaber = $name;
    }

    public function einzahlung(float $betrag) {
        $this->kontostand += $betrag;
        echo '<p>'.$this->kontoinhaber.' hat soeben '.$this->zahl_de($betrag).' eingezahlt.<br>';
        $this->finanzstatus();
        echo '</p>';
    }

    public function auszahlung(float $betrag) {
        if($betrag <= $this->kontostand) {
            $this->kontostand -= $betrag;
            echo '<p>'.$this->kontoinhaber.' hat soeben '.$this->zahl_de($betrag).' abgehoben.<br>';
            $this->finanzstatus();
            echo '</p>';
        } else {
            echo '<p>Der gewünschet Auszahlungsbetrag ist größer als der Kontostand. Die Auszahlung ist leider nicht möglich.</p>';
        }
    }

    public function finanzstatus(bool $ausfuehrlich = false) {
        if($ausfuehrlich) {
            echo 'Aktueller Finanzstatus für das Konto '.$this->kontonummer.', Kontoinhaber: '.$this->kontoinhaber.'<br>';
        }
        echo 'Neuer Kontostand: '.$this->zahl_de($this->kontostand);
    }

    private function zahl_de(float $zahl, bool $tausendertrennzeichen = true): string {
        // Die Zahl wird vom Computerformat ins deutsche Format umgewandelt
        $zahl = floatval($zahl);
        if($tausendertrennzeichen == true) {
            $zahl = number_format($zahl,2,",",".");
        } else {
            $zahl = number_format($zahl,2,",","");
        }
        return $zahl;
    }
}


?>