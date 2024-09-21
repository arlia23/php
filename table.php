<?php
include "koneksi.php";
$create = "CREATE TABLE ujian (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama varchar(255) NOT NULL,
    umur int(255) NOT NULL,
    jenis_kelamin varchar(255) NOT NULL,
    tlpn int(255) NOT NULL,
    alamat text(225) NOT NULL
)";

if($koneksi->query(query: $create) === true) {
    echo "tabel berhasil dibuat";
}else {
    echo "gagal membuat table";
}

$koneksi->close();
?>