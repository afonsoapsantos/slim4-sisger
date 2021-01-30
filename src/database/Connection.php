<?php
namespace src\database;

use \PDO;
use PDOException;

class Connection {

    private static $pdo;

    const HOSTNAME = "localhost";
	const USERNAME = "postgres";
	const PASSWORD = "ASO97dpi9vb";
	const DBNAME = "sisweb";
    const PORT = "5432";
    const ERROR = "";

    public static function conect()
    {

        if (static::$pdo) {
            return static::$pdo;
        }

        try {
            static::$pdo = new \PDO("pgsql:dbname=".Connection::DBNAME.
                ";host=".Connection::HOSTNAME.";port=".Connection::PORT, 
                Connection::USERNAME,
                Connection::PASSWORD, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]
            );
            return static::$pdo;
        } catch(PDOException $e) {
            var_dump($e->getMessage());
        }
    }

}