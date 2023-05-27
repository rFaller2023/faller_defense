<?php

include 'index.php';

class Anime extends Database

{
    public function db():string
    {
        $data= "CREATE DATABASE IF NOT EXISTS $this->dbName";

      return $this->conn->query($data);
    }
}

$n = new Anime();
$n->db();
