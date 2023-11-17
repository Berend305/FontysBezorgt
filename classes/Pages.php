<?php
declare(strict_types=1);
class Pages 
{
    private static $order = array(0=>2, 1=>1, 2=>0, 3=>3);
    public static function getHeaderPageNames(): array
    {
        $arr = glob("pages/*.php");
        $result = array();
        for($i = 0; $i < count($arr); $i++)
        {
            $result[] = $arr[Pages::$order[$i]];
        }
        return $result;
    }
    public static function getPagesFileNames() : array
    {
        $result = array();
        $arr = array_reverse(glob("pages/*.php"));
        foreach($arr as $value)
        {
            $result[] = ucfirst(substr($value, 6, strlen($value) -10));
        }
        return $result;
    }

    // leest de url uit en vanaf waaar die moet gaan tellen
    public static function getHeader()
    {
        $page = substr($_SERVER["REQUEST_URI"], 15);
        $dotPos = strpos($page, "?");
        if($dotPos)
            return substr($page, 0, $dotPos);
        return $page;
    }
}
?>