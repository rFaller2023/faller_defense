<?php


abstract class Database
{
    public $conn;
    public $servername="localhost";
    public $username="root";
    public $dbName="system";

    public function __contruct()
    {
        $this->conn= new mysqli($this->servername,$this->username,$this->password);

        // var_dump($db);
    }
    abstract public function db(): string;
    
}

