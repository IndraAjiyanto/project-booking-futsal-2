<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM booking WHERE id = $id";

    if (mysqli_query($koneksi, $query)) {
        header("location:jadwal.php");  
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }

} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>