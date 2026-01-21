<?php
require_once "../admin/config/database.php";
require_once "../models/Dokumen.php";

class DokumenController {
    public function index(){
        $db = (new Database)->getConnection();
        $dok = new Dokumen($db);

        echo json_encode($dok->all()->fetchAll(PDO::FETCH_ASSOC));
    }
}
