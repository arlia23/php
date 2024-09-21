<?php

include 'koneksi.php';

$database = 'ujian';

$create = "CREATE DATABASE $database";

if($koneksi->query($create) === true){
    echo "Database $database berhasil dibuat"; 
}else{
    echo "Gagal membuat Database";
}

$koneksi->close();
?>