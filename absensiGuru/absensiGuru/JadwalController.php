<?php
require_once "../admin/config/database.php";
require_once "../models/Jadwal.php";

class JadwalController {
    public function index(){
        $db = (new Database)->getConnection();
        $jadwal = new Jadwal($db);

        echo json_encode($jadwal->all()->fetchAll(PDO::FETCH_ASSOC));
    }
}
