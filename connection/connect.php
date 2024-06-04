<?php

class Connect {
    static private $host= "localhost";
    static private $name = "root";
    static private $pass = '';
    static private $db = "gestionstagaire_v1";


    public static $c = new PDO("mysql:host={self::$host};dbname={self::$name}", self::$db, self::$pass);

    public static function executeSQL($f) {
        $c = self::$c;
        $c->exec($f);
    }
    public static function querySQL($f) {
            $c = self::$c;
            $c->query($f);
    }



}