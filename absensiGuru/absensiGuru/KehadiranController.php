<?php
require_once "../admin/config/database.php";
require_once "../models/Kehadiran.php";

class KehadiranController {
    public function index($id){
        $db = (new Database)->getConnection();
        $k = new Kehadiran($db);

        echo json_encode($k->byGuru($id)->fetchAll(PDO::FETCH_ASSOC));
    }

    public function store(){
        $data = json_decode(file_get_contents("php://input"));
        $db = (new Database)->getConnection();
        $k = new Kehadiran($db);

        $k->store($data->guru_id,$data->tanggal,$data->status);
        echo json_encode(["message"=>"Kehadiran tersimpan"]);
    }
}
