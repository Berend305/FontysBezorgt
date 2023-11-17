<?php 

class Customer
{
    public function __construct(
        private int $studentnummer,
        private string $name,
    ){}
    public function getId(): int
    {
        return $this->studentnummer;
    }

    public function getName(): string
    {
        return $this->name;
    }    
    public static function selectCustomerList()
    {
        $sth = DBConn::PDO()->prepare("SELECT studentnummer, name FROM klant");
        $sth->execute();

        return $sth->fetchAll();
    }

}


?>