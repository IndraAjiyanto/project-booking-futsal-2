<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/custom.css">
    <link rel="stylesheet" href="../CSS/jadwal.css">
    <title>Document</title>
</head>
<body>
    <nav>
      <div class="ujung">
        <img src="https://64.media.tumblr.com/c9fa606946f6abc30f2ffb50d48b9aa1/de9f381ae561706d-f9/s1280x1920/91f47cdff0fc493e4b8421c691b464bd615fa340.jpg" class="pp"> 

    <ul class="akun">
          
        <li><a class ="namaAkun" href="akun.php">Akun</a></li>
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

     <div class="container">
    <h1>Jadwal Acara</h1>
    <table>
      <thead>
        <tr>
        <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Tanggal</th>
          <th>Waktu</th>
          <th>Lapangan</th>
          <th>Total Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <?php
        include 'koneksi.php';

        $booking = mysqli_query($koneksi, "SELECT * FROM booking");
        $no=1;

        foreach ($booking as $book) {
          
            echo "<tr>
             <td>$no</td>
             <td>" . $book['nama'] . "</td>
             <td>" . $book['email'] . "</td>
             <td>" . $book['tanggal'] . "</td>
             <td>" . $book['waktu'] . "</td>
             <td>" . $book['lapangan'] . "</td>
             <td>" . $book['total_harga'] . "</td>
             <td>
             <a href='tampildata.php?id=  $book[id]  '>Edit</a> 
             <a href='hapusdata.php?id=  $book[id]  '>Hapus</a> 
             </td>
             </tr>";
             $no++;
        }
        ?>
      </table>
    <p>*Jika sudah selesai bermain jangan lupa klik konfirmasi selesai di atas</p>
  </div>
</body>
</html>