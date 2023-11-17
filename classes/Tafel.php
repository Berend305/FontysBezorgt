<?php 

class Tafel
{
    public function __construct(
        private int $id,
    ){}
    public function getId(): int
    {
        return $this->id;
    }   
    public static function selectTafelList()
    {
        $sth = DBConn::PDO()->prepare("SELECT id FROM tafel");
        $sth->execute();

        return $sth->fetchAll();
    }

}


?>