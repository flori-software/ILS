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
        $sql = "SELECT countries.name as name, area, AVG(gdp) as avg_gdp, AVG(population) as avg_population,  continents.name as continent FROM countries 
        INNER JOIN country_stats ON countries.country_id = country_stats.country_id
        INNER JOIN regions ON countries.region_id = regions.region_id 
        INNER JOIN continents ON regions.continent_id = continents.continent_id
        WHERE countries.region_id=".$this->region_id."
        GROUP BY country_stats.country_id";

        $this->laender = Array();
        if($stmt = $pdo->prepare($sql)) {
            $stmt->execute();
            while($row = $stmt->fetch()) {
                $land                   = new land;
                $land->land             = $row["name"];
                $land->flaeche          = $row["area"];
                $land->avg_bip          = $row["avg_gdp"];
                $land->avg_bevoelkerung = $row["avg_population"];
                $land->kontinent        = $row["continent"];
                $this->laender[] = $land;
            }
        }
    }

    public function get_laender(): array {
        return $this->laender;
    }
}








?>