<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form pendaftaran bimbel</h1>

    <form action="create.php" method="post">
        <label for="">nama lengkap antum</label>
        <br>
        <input type="text" name="nama">
        <br>

        <label for="">Umur</label>
        <br>
        <input type="number" name="umur">
        <br>

        <label for="">jenis kelamin antum</label>
        <br>
        <input type="text" name="jenis_kelamin">
        <br>

        <label for="">no telp</label>
        <br>
        <input type="number" name="tlpn">
        <br>

        <label for="">alamat antum</label>
        <br>
        <textarea name="alamat"></textarea>
        <br>

        <button type="submit">simpan data</button>
        <br>

        
    </form>
</body>
</html>