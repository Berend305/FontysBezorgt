<?php 

class Product
{
    public function __construct(
        private int $product_id,
        private string $name,
        private string $price,
        private string $description,
        private string $category,
    ){}
    public function getId(): int
    {
        return $this->product_id;
    }
    public function getName(): string
    {
        return $this->name;
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

    public static function selectBroodjes()
    {
        $sth = DBConn::PDO()->prepare("SELECT name, price, description FROM product WHERE category = 'broodjes'");
        $sth->execute();

        return $sth->fetchAll();
    }
    public static function selectDrankjes()
    {
        $sth = DBConn::PDO()->prepare("SELECT name, description FROM product WHERE category = 'drankjes'");
        $sth->execute();

        return $sth->fetchAll();
    }
    public static function selectFruit()
    {
        $sth = DBConn::PDO()->prepare("SELECT name, description FROM product WHERE category = 'fruit'");
        $sth->execute();

        return $sth->fetchAll();
    }
    public static function selectSnacks()
    {
        $sth = DBConn::PDO()->prepare("SELECT name, description FROM product WHERE category = 'snacks'");
        $sth->execute();

        return $sth->fetchAll();
    }
    public static function selectSnoep()
    {
        $sth = DBConn::PDO()->prepare("SELECT name, description FROM product WHERE category = 'snoep'");
        $sth->execute();

        return $sth->fetchAll();
    }
}
?>