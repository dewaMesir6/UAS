<?php
class Jadwal {
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function all(){
        return $this->conn->query("
            SELECT j.*, g.nama 
            FROM jadwal j
            JOIN guru g ON j.guru_id = g.id
        ");
    }
}
