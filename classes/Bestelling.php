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
    public static function insertIntoBestelling($studentnummer, $gebouw, $lokaal, $tafel, $robot)
    {
        $params = array(
            ":studentnummer" => $studentnummer,
            ":gebouw" => $gebouw,
            ":lokaal" => $lokaal,
            ":tafel" => $tafel,
            ":robotnr" => $robot,
        );
            $sth = DBConn::PDO()->prepare("INSERT INTO bestelling (Klant_Studentnummer, Gebouw_Gebouwnaam, Lokaal_Lokaal, Tafel_Tafelnummer, robot_robotnr) VALUES (:studentnummer, :gebouw, :lokaal, :tafel, :robotnr)");
            $sth->execute($params);
    
    }


}

?>