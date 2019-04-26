<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

        // ambil data dari formulir
        $id = $_POST['id_sampah'];
        $nama = $_POST['nama_sampah'];
        $jenis = $_POST['jenis_sampah'];
        $fungsi = $_POST['fungsi_3R'];
        $oran = $_POST['organik_anorganik'];
        $baring = $_POST['basah_kering'];
        $manfaat = $_POST['manfaat'];


    // buat query
    $sql = "INSERT INTO sampah (id_sampah, nama_sampah, jenis_sampah, fungsi_3R, organik_anorganik, basah_kering, manfaat) 
   VALUE ('$id', '$nama', '$jenis', '$fungsi', '$oran', '$baring', '$manfaat')";
    $query = mysqli_query($db, $sql);


    // apakah query simpan berhasil?
    if($db->query($sql) === TRUE ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list_sampah.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list_sampah.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>