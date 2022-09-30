<?php
class land {
    public string $land;
    public float  $flaeche;
    public float  $avg_bip;
    public float  $avg_bevoelkerung;
    public string $kontinent;
}

class laender {
    private int   $region_id;
    private array $laender;

    public function __construct($region_id) {
        $pdo = myDatabaseConnection();
        $this->region_id = $region_id;
        $sql = "SELECT * FROM countries WHERE region_id=".$this->region_id;

        if($stmt = $pdo->prepare($sql)) {
            $stmt->execute();
            while($row = $stmt->fetch()) {
                $land          = new land;
                $land->land    = $row["name"];
                $land->flaeche = $row["area"];
                $this->laender[] = $land;
            }
        }
    }

    public function get_laender(): array {
        return $this->laender;
    }
}








?>