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



<div class="fr">    
  <p>*untuk pembayaran DP terlebih dahulu</p>
  <h1>FORM BOOKING</h1>


    <div class="container">
      <form>
        <label>Name:</label>
        <input type="text" >
  
        <label>Email:</label>
        <input type="email" >
  
        <label>Tanggal:</label>
        <input type="date" >
  
        <label>Waktu:</label>
        <select id="wk" name="wk">
          <option value="wk1">08.00 - 09.00 WIB</option>
          <option value="wk2">09.00 - 10.00 WIB</option>
          <option value="wk3">10.00 - 11.00 WIB</option>
          <option value="wk4">11.00 - 12.00 WIB</option>
          <option value="wk5">12.00 - 13.00 WIB</option>
          <option value="wk6">13.00 - 14.00 WIB</option>
          <option value="wk7">14.00 - 15.00 WIB</option>
          <option value="wk8">15.00 - 16.00 WIB</option>
          <option value="wk9">16.00 - 17.00 WIB</option>
          <option value="wk10">17.00 - 18.00 WIB</option>
          <option value="wk11">18.00 - 19.00 WIB</option>
          <option value="wk12">19.00 - 20.00 WIB</option>
          <option value="wk13">20.00 - 21.00 WIB</option>
          <option value="wk14">21.00 - 22.00 WIB</option>
          <option value="wk15">22.00 - 23.00 WIB</option>
        </select>
  
        <label>Lapangan:</label>
        <select id="service" name="service">
          <option value="service1">Lapangan 1</option>
          <option value="service2">Lapangan 2</option>
          <option value="service3">Lapangan 3</option>
        </select>

        <label>Total Harga:</label>
        <input type="text" id="name" name="name">
        
        <button type="submit">Book Now</button>
      </form>
    </div>
  </div>
</body>
</html>