 <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM ujian WHERE id='$id'");
    while ($ujian = mysqli_fetch_array( $data)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form ujian</h1>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php print $ujian['id'] ?>">
        <form action="edit.php" method="post">
        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php print $ujian['nama'] ?>">
        <br><br>

        <label>umur Antum</label>
        <br>
        <input type="number" name="umur" value="<?php print $ujian['umur'] ?>">
        <br><br>

        <label>jenis kelamin Antum</label>
        <br>
        <input type="text" name="jenis_kelamin" value="<?php print $ujian['jenis_kelamin'] ?>">
        <br><br>

        <label>Nomor Telepon</label>
        <br>
        <input type="number" name="tlpn" value="<?php print $ujian['tlpn'] ?>">
        <br><br>

        <label>Alamat Antum</label>
        <br>
        <textarea name="alamat"><?php print $ujian['alamat']; ?></textarea>
        <br><br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
<?php
    }
?> 