<?php
class Guru {
    private $conn;
    private $table = "guru";

    public function __construct($db){
        $this->conn = $db;
    }

    public function all(){
        return $this->conn->query("SELECT * FROM guru");
    }
}
