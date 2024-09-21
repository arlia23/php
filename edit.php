 <?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tlpn = $_POST['tlpn'];
    $alamat = $_POST['alamat'];

    $data = mysqli_query($koneksi, query:"UPDATE ujian SET nama='$nama', umur='$umur', jenis_kelamin='$jenis_kelamin', tlpn='$tlpn', alamat='$alamat' WHERE id='$id'");

    header(header: "location:index.php");
?>