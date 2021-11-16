<?php
//panggil fungsi.php untuk kebutuhan curl
include_once 'fungsi.php';

//panggil file config.json untuk di kelola lebih lanjut
$jsonmentah = file_get_contents('config.json');
$jsoninput = json_decode(json_encode($jsonmentah, JSON_PRETTY_PRINT));
$obj = json_decode($jsoninput);

//olah data yang akan dikirim, untuk sender dan username biarkan default. sisanya atur sesuai kebutuhan
$data = [
    'username' => $obj->username,
    'sender'  => $obj->sender,
    'number'  => $_POST["nomor"],
    'pesan' => $_POST["pesan"]

];

// jalankan fungsi kirim whatsapp dan buat variable tampil hasil request
$tampilhasilrequest = http_request($data, $obj);

//cetak tampilhasilrequest ke dalam bentuk json dan percantik json sisanya
header('Content-Type: application/json');
echo json_encode(json_decode($tampilhasilrequest), JSON_PRETTY_PRINT);
 ?>
