<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM sampah WHERE id_sampah=".$_GET["id"]."";
    $query = mysqli_query($dbname, $sql);

    // apakah query hapus berhasil?
    if( $db->query($sql)=== TRUE){
        header('Location: list_sampah.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>