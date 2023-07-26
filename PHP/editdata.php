<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $lapangan = $_POST['lapangan'];
    $total_harga = $_POST['total_harga'];


    $query = "UPDATE booking SET nama='$nama', email='$email', tanggal='$tanggal', waktu='$waktu', lapangan='$lapangan', total_harga='$total_harga' WHERE id='$id'";

    mysqli_query($koneksi, $query);
        header("location:jadwal.php");
}
?>
