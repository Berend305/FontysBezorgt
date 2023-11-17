<?php 

class Gebouw
{
    public function __construct(
        private string $gebouwnaam,
    ){}
    public function getGebouw(): string
    {
        return $this->gebouwnaam;
    }  
    public static function selectGebouwList()
    {
        $sth = DBConn::PDO()->prepare("SELECT Gebouwnaam FROM gebouw");
        $sth->execute();

        return $sth->fetchAll();
    }

}


?>