<?php 

class Product
{
    public function __construct(
        private int $product,
        private string $price,
        private string $description,
        private string $category,
        private string $order,
    ){}
    public function getProduct(): int
    {
        return $this->product;
    }
    public function getPrice(): string
    {
        return $this->price;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getCategory(): string
    {
        return $this->category;
    }
    public function getOrder(): string
    {
        return $this->order;
    }

    public static function selectBroodjes()
    {
        $sth = DBConn::PDO()->prepare("SELECT prijs, omschrijving FROM product WHERE categorie = 'broodjes'");
        $sth->execute();

        return $sth->fetchAll();
    }
    public static function selectDrankjes()
    {
        $sth = DBConn::PDO()->prepare("SELECT prijs, omschrijving FROM product WHERE Bestelling_Bestelnr IS NULL AND categorie = 'drankjes'");
        $sth->execute();

        return $sth->fetchAll();
    }
    public static function selectFruit()
    {
        $sth = DBConn::PDO()->prepare("SELECT prijs, omschrijving FROM product WHERE Bestelling_Bestelnr IS NULL AND categorie = 'fruit'");
        $sth->execute();

        return $sth->fetchAll();
    }
    public static function selectSnacks()
    {
        $sth = DBConn::PDO()->prepare("SELECT prijs, omschrijving FROM product WHERE Bestelling_Bestelnr IS NULL AND categorie = 'snacks'");
        $sth->execute();

        return $sth->fetchAll();
    }
    public static function selectSnoep()
    {
        $sth = DBConn::PDO()->prepare("SELECT prijs, omschrijving FROM product WHERE Bestelling_Bestelnr IS NULL AND categorie = 'snoep'");
        $sth->execute();

        return $sth->fetchAll();
    }

    // public static function insertIntoProduct()
    // {
    //     $params = array(

    //     );
    //     $sth = DBConn::PDO()->prepare("")
    // }
}
?>