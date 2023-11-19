<?php
class Bestelling
{
    public function __construct(
        private int $id,
        private int $studentnummer,
        private string $gebouw,
        private string $lokaal,
        private string $tafel,        
    ){}
    public function getId()
    {
        return $this->id;
    }
    public function getStudentnummer()
    {
        return $this->studentnummer;
    }
    public function getGebouw()
    {
        return $this->gebouw;
    }
    public function getLokaal()
    {
        return $this->lokaal;
    }
    public function getTafel()
    {
        return $this->tafel;
    }
    // In de Bestelling klasse
    public static function insertIntoBestelling($studentnummer, $gebouw, $lokaal, $tafel)
    {
        $params = array(
            ":studentnummer" => $studentnummer,
            ":gebouw" => $gebouw,
            ":lokaal" => $lokaal,
            ":tafel" => $tafel
        );

        try {
            $sth = DBConn::PDO()->prepare("INSERT INTO bestelling (Klant_Studentnummer, Gebouw_Gebouwnaam, Lokaal_Lokaal, Tafel_Tafelnummer) VALUES (:studentnummer, :gebouw, :lokaal, :tafel)");
            $sth->execute($params);
            echo "Gegevens succesvol ingevoerd in de database!";
        } catch (PDOException $e) {
            echo "Fout bij het invoeren van gegevens: " . $e->getMessage();
        }
    }

}

?>