<?php


abstract class Database
{
    public $conn;
    public $servername="localhost";
    public $username="root";
    public $dbname="system";

    public function __contruct()
    {
        $this->conn= new mysqli($this->servername,$this->username,$this->password);
    }
    abstract public function db(): string;
    
}

class Anime extends Database
{
    public function db(): string
    {
        $dbName="CREATE DATABASE IF NOT EXISTS $this->dbName";

        return $this->conn->query($dbName);
    }
}

$ros = new Anime();
$ros->db();