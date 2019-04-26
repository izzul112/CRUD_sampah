<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xrpl5";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
"<a href='sampah_insert.php'>Tambah Sampah</a>";
$sql = "SELECT*FROM sampah";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Id: " 
        . $row["id_sampah"]
        . "Name: " 
        . $row["nama_sampah"]
        .  "Jenis: " 
        . $row["jenis_sampah"]
        .  "Fungsi 3R: " 
        . $row["fungsi_3R"]
        .  "Organik_Anorganik: " 
        . $row["organik_anorganik"]
        .  "Manfaat: " 
        . $row["manfaat"]
        .  "Basah/Kering: " 
        . $row["basah_kering"]
        . "<a href='sampah_delete.php?id=$row[id_sampah]'>delete</a>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>