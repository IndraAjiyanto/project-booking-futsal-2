<?php
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'jajal'; 

$koneksi = mysqli_connect($host, $username, $password, $database);

if (isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $tanggal = $_POST["tanggal"];
    $waktu = $_POST["waktu"];
    $lapangan = $_POST["lapangan"];
    $total_harga = $_POST["total_harga"]; 

    $query = "INSERT INTO booking VALUE ('','$nama', '$email', '$tanggal', '$waktu', '$lapangan', '$total_harga') ";


    mysqli_query($koneksi, $query);
        header("location:jadwal.php");  

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/custom.css">
    <link rel="stylesheet" href="../CSS/formbooking.css">

    <script>
  function updateHarga() {
    var lapangan = document.getElementById('lapangan').value;
    var total_harga = 0;

    // Hitung total harga berdasarkan lapangan yang dipilih
    if (lapangan === 'lapangan1') {
        total_harga = 'Rp80.000';
    } else if (lapangan === 'lapangan2') {
        total_harga = 'Rp90.000';
    } 

    // Set nilai total_harga di input form
    var inputTotalHarga = document.getElementById('total_harga');
    inputTotalHarga.value = total_harga;
  }
</script>

    <title>Document</title>
</head>
<body>
  <nav>
    <div class="ujung">
      <img src="https://64.media.tumblr.com/c9fa606946f6abc30f2ffb50d48b9aa1/de9f381ae561706d-f9/s1280x1920/91f47cdff0fc493e4b8421c691b464bd615fa340.jpg" class="pp"> 

  <ul class="akun">
        
      <li><a clas ="namaAkun" href="akun.php">Akun</a></li>
      </ul>
  </div>
        
    <ul>
      <li><a href="home.php">Beranda</a></li>
      <li><a href="formbooking.php">Booking</a></li>
      <li><a href="carabooking.php">Cara Booking</a></li>
      <li><a href="jadwal.php">Jadwal</a></li>
      <li><a href="kontak.php">Kontak</a></li>
    </ul>
    <h2 class="iconBola">⚽</h2>
 
</nav>



<div class="fr">    
  <p>*untuk pembayaran langsung ditempat saja</p>
  <h1>FORM BOOKING</h1>


    <div class="container">
      <form action="" method="post">
        <label>Name:</label>
        <input type="text" name="nama" required>
  
        <label>Email:</label>
        <input type="email" name="email" required>
  
        <label>Tanggal:</label>
        <input type="date" name="tanggal" required>
  
        <label>Waktu:</label>
        <select id="waktu" name="waktu">
          <option value="08.00 - 09.00">08.00 - 09.00 WIB</option>
          <option value="09.00 - 10.00">09.00 - 10.00 WIB</option>
          <option value="10.00 - 11.00">10.00 - 11.00 WIB</option>
          <option value="11.00 - 12.00">11.00 - 12.00 WIB</option>
          <option value="12.00 - 13.00">12.00 - 13.00 WIB</option>
          <option value="13.00 - 14.00">13.00 - 14.00 WIB</option>
          <option value="14.00 - 15.00">14.00 - 15.00 WIB</option>
          <option value="15.00 - 16.00">15.00 - 16.00 WIB</option>
          <option value="16.00 - 17.00">16.00 - 17.00 WIB</option>
          <option value="17.00 - 18.00">17.00 - 18.00 WIB</option>
          <option value="18.00 - 19.00">18.00 - 19.00 WIB</option>
          <option value="19.00 - 20.00">19.00 - 20.00 WIB</option>
          <option value="20.00 - 21.00">20.00 - 21.00 WIB</option>
          <option value="21.00 - 22.00">21.00 - 22.00 WIB</option>
          <option value="22.00 - 23.00">22.00 - 23.00 WIB</option>
        </select>
  
        <label>Lapangan:</label>
        <select id="lapangan" name="lapangan"  onchange="updateHarga()">
          <option value="lapangan1">Lapangan 1</option>
          <option value="lapangan2">Lapangan 2</option>

        </select>

        <label>Total Harga:</label>
        <input type="text"  name="total_harga" id="total_harga" readonly>
        
        <button type="submit" name="simpan" value="simpan">Book Now</button>
      </form>
    </div>
  </div>

</body>
</html>
