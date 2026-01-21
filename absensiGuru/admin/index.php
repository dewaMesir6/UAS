<?php
header("Content-Type: application/json");

$request = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
$method = $_SERVER['REQUEST_METHOD'];

require_once "../controllers/GuruController.php";
require_once "../controllers/JadwalController.php";
require_once "../controllers/DokumenController.php";
require_once "../controllers/KehadiranController.php";

if($request[1]=="guru"){
    (new GuruController)->index();
}

if($request[1]=="jadwal"){
    (new JadwalController)->index();
}

if($request[1]=="dokumen"){
    (new DokumenController)->index();
}

if($request[1]=="kehadiran"){
    $hc = new KehadiranController();
    $method=="POST" ? $hc->store() : $hc->index($request[2]);
}
