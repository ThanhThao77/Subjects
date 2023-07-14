<?php

class DBConnect
{
    private $host = DB_HOST;
    private $dbname = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $conn = null;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        } catch (Exception $e) {

        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

}