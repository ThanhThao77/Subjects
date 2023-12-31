<?php
class ConnectDatabase{
    private $host='localhost';
    private $username = 'root';
    private $password = '';
    private $dbname ='phpbook-1';
    private $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        } catch (Exception $e) {
            die("Could not connect to the database $this->dbname :" . $e->getMessage());
        }
    }

    public function getConnection(){
        return $this->conn;
    }
}
?>