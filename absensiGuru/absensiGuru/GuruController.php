<?php
require_once "../admin/config/database.php";
require_once "../models/Guru.php";

class GuruController {
    public function index(){
        $db = (new Database)->getConnection();
        $guru = new Guru($db);

        echo json_encode($guru->all()->fetchAll(PDO::FETCH_ASSOC));
    }
}
