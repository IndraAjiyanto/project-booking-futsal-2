<?php
require 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM booking WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak diberikan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/custom.css">
    <link rel="stylesheet" href="../CSS/formbooking.css">
    <title>Document</title>
</head>
<body>
  <nav>
    <div class="ujung">
      <img src="https://64.media.tumblr.com/c9fa606946f6abc30f2ffb50d48b9aa1/de9f381ae561706d-f9/s1280x1920/91f47cdff0fc493e4b8421c691b464bd615fa340.jpg" class="pp"> 

  <ul class="akun">
        
      <li><a clas ="namaAkun" href="akun.php">Indra Ajiyanto</a></li>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/custom.css">
    <link rel="stylesheet" href="../CSS/formbooking.css">
    <title>Document</title>
</head>
<body>
  <nav>
    <!-- Kode navigasi Anda -->
  </nav>

  <div class="fr">    
    <h1>EDIT BOOKING</h1>

    <div class="container">
      <!-- Tambahkan atribut action ke form untuk menentukan halaman yang akan memproses data form -->
      <form action="editdata.php" method="post">
    
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
    <label>Email:</label>

    <input type="email" name="email" value="<?php echo $row['email']; ?>">
    <label>Tanggal:</label>

    <input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>">
    <label>Waktu:</label>

    <select name="waktu">
        <option value="waktu"><?php echo $row['waktu']; ?></option>
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
    <select name="lapangan" id="lapangan"  onchange="updateHarga()">
    <option  value="Lapangan"><?php echo $row['lapangan']; ?></option>
        <option value="lapangan1">Lapangan 1</option>
          <option value="lapangan2">Lapangan 2</option>
    </select>

    <label>Total Harga:</label>
    <input type="text" name="total_harga" value="<?php echo $row['total_harga']; ?>" id="total_harga"  readonly>
    <button type="submit">Simpan Perubahan</button>
</form>
    </div>
  </div>
</body>
</html>








