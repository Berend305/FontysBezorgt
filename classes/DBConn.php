<?php
class DBConn
{
    public static function PDO() : PDO
    {
        return new PDO("mysql:host=localhost;dbname=fontysbezorgt;", "root", "");
    }
        //online
		//return new PDO("mysql:host=sql7.freemysqlhosting.net;dbname=sql7585090", "sql7585090", "INJF57Mdk4");  
}
?>