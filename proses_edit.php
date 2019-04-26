<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id_sampah'];
    $nama = $_POST['nama_sampah'];
    $jenis = $_POST['jenis_sampah'];
    $fungsi = $_POST['fungsi_3R'];
    $oran = $_POST['organik_anorganik'];
    $baring = $_POST['basah_kering'];
    $manfaat = $_POST['manfaat'];


    // buat query update
    $sql = "UPDATE sampah 
    SET nama_sampah='$nama', 
    jenis_sampah='$jenis', 
    fungsi_3R='$fungsi', 
    organik_anorganik='$oran',
    basah_kering='$baring',  
    manfaat='$manfaat' WHERE id_sampah= $id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if($query ) {
        // kalau berhasil alihkan ke halaman list_sampah.php
        header('Location: list_sampah.php?status=sukses');
    } else {
        // kalau gagal tampilkan pesan
        header("Location: list_sampah.php?status=gagal");
    }


} else {
    die("Akses dilarang...");
}

?>