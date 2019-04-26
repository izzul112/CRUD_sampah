<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: proses_edit.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM sampah WHERE id_sampah=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<html>
<head>
</head>

<body>
  <header></header>

    <form action="proses_edit.php" method="POST">

        <fieldset>
        <p>
        <label for="id_sampah"> Id Sampah </label>
        <input type="text" name="id_sampah">
        </p>

        <p> 
        <label for="nama_sampah"> Nama Sampah </label>
        <input type="text" name="nama_sampah">
        </p>

        <p>
        <label for="jenis_sampah"> Jenis Sampah </label>
            <select name="jenis_sampah">
                <option value="alami">alami</option>
                <option value="hewani">hewani</option>
                <option value="plastik">plastik</option>
                <option value="kertas">kertas</option>
            </select>
        </p>
        
        <p>
        <label for="fungsi_3R"> Fungsi 3R </label>
        <input type="text" name="fungsi_3R">
        </p>
        
        <p>
        <label for="organik_anorganik"> Organik/Anorganik </label>
        <label><input type="radio"name="organik_anorganik"value="organik">organik</label>
        <input type="radio"name="organik_anorganik" value="anorganik">anorganik<br>
        </p>
        
        <p>
        <label for="basah_kering"> Basah/Kering </label>
        <input type="text" name="basah_kering">
        </p>

        <p>
        <label for="manfaat"> Manfaat </label>
        <label><input type="checkbox" name="manfaat" value="buat narok juz">buat narok juz </label>
        <label><input type="checkbox"name="manfaat"value="buat hiasan">buat hiasan </label>
        </p>
                
      
        
        <input type="submit" value="Simpan" name="simpan">
       
        </form>
    </body>
</html>

        </fieldset>


    </form>

    </body>
</html>