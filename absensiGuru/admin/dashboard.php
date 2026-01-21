<?php
class Database {
    private $host = "localhost";
    private $db_name = "db_sekolah";
    private $username = "root";
    private $password = "";

    public function getConnection(){
        try{
            return new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch(PDOException $e){
            die(json_encode(["error"=>$e->getMessage()]));
        }
    }
}
