<?php

class DB
{
    private static $DB_HOST = 'mariadb';
    private static $DB_NAME = 'db_whispers';
    private static $DB_USER = 'root';
    private static $DB_PASS = 'root';


    public function connect()
    {
        $db = new PDO("mysql:host=" . self::$DB_HOST . ";dbname=" . self::$DB_NAME, self::$DB_USER, self::$DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }

    public function query($query, $params = [])
    {
        $stmt = $this->connect()->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }

    public function fetch($query, $params = [])
    {
        $stmt = $this->query($query, $params);
        return $stmt->fetch();
    }

    public function fetchAll($query, $params = [])
    {
        $stmt = $this->query($query, $params);
        return $stmt->fetchAll();
    }

    public function lastInsertId()
    {
        return $this->connect()->lastInsertId();
    }
}