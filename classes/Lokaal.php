<?php 

class Lokaal
{
    public function __construct(
        private string $lokaal,
    ){}
    public function getLokaal(): string
    {
        return $this->lokaal;
    }
    public static function selectLokaalList()
    {
        $sth = DBConn::PDO()->prepare("SELECT Lokaal FROM lokaal");
        $sth->execute();

        return $sth->fetchAll();
    }

}


?>