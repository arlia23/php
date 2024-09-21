<?php

include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran bimbel</title>
    
</head>
<body>
    <h1 style="text-align: center; color: red; font-weight: 600;">data penerimaan bimbel</h1>
    <table border="1" style="width: 80%; text-align: center">


    <table border="1" style="width: 80%; text-align: center">
       <tr style="background-color: aquamarine; color: black; font-weight: 700; font-family: Verdana, Geneva, Tahoma, san-serif;">
         <th width="5%">No.</th>
         <th>Nama </th>
         <th>Umur</th>
         <th>Jenis Kelamin</th>
         <th>Nomor Telephn</th>
         <th>Alamat</th>
         <th>Option</th>
       </tr>

       <?php
       $data = mysqli_query(mysql: $koneksi, query: 'SELECT * FROM ujian WHERE jenis_kelamin LIKE "l"');
       while($ujian = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?php print $ujian['id']?></td>
          <td><?php print $ujian['nama']?></td>
          <td><?php print $ujian['umur']?></td>
          <td><?php print $ujian['jenis_kelamin']?></td>
          <td><?php print $ujian['tlpn']?></td>
          <td><?php print $ujian['alamat']?></td>
          <td>
            <a href="formEdit.php?id=<?php print $ujian['id']?>">edit</a>
            <a href="hapus.php?id=<?php print $ujian['id']?>" onclick="return confirm('yakin mau hapus data')">hapus</a>
            <a href="filedetail.php?id=<?php print $ujian['id']?>">Detail</a>
            
          </td>
        </tr>
        <?php
       }
       ?>
    </table>
</body>
</html>