<?php
class Kehadiran {
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function byGuru($guru_id){
        $stmt = $this->conn->prepare(
            "SELECT * FROM kehadiran WHERE guru_id=?"
        );
        $stmt->execute([$guru_id]);
        return $stmt;
    }

    public function store($guru,$tgl,$status){
        $stmt = $this->conn->prepare(
            "INSERT INTO kehadiran VALUES (NULL,?,?,?)"
        );
        return $stmt->execute([$guru,$tgl,$status]);
    }
}
