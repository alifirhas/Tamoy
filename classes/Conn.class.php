<?php
//nama kelas pakai huruf besar di huruf pertama

// kelas untuk koneksi dengan metode PDO
class Conn{

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "kl_crud";

    protected function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;//data sourse name
        $pdo = new PDO($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}