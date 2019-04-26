<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="list_sampah.css">

</head>

<body>

 <nav>
        <a href="sampah_insert.php">[+] Tambah Baru</a>
    </nav>
</br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Sampah</th>
            <th>Jenis Sampah</th>
            <th>Fungsi 3R</th>
            <th>Organik/Anorganik</th>
            <th>Basah/Kering</th>
            <th>manfaat</th>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM sampah";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id_sampah']."</td>";
            echo "<td>".$siswa['nama_sampah']."</td>";
            echo "<td>".$siswa['jenis_sampah']."</td>";
            echo "<td>".$siswa['fungsi_3R']."</td>";
            echo "<td>".$siswa['organik_anorganik']."</td>";
            echo "<td>".$siswa['basah_kering']."</td>";
            echo "<td>".$siswa['manfaat']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id_sampah']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$siswa['id_sampah']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
      
             }
        ?>
</tbody>
</table>
    </body>
</html>