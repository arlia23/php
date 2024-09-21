<?php


include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tlpn = $_POST['tlpn'];
    $alamat = $_POST['alamat'];


mysqli_query($koneksi, "INSERT INTO ujian values('$id','$nama','$umur','$jenis_kelamin','$tlpn','$alamat')");

header(header: "location:index.php");

?>