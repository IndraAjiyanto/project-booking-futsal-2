<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/custom.css">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Document</title>
     
</head>
<body>
    <nav>
      <div class="ujung">
        <img src="https://64.media.tumblr.com/c9fa606946f6abc30f2ffb50d48b9aa1/de9f381ae561706d-f9/s1280x1920/91f47cdff0fc493e4b8421c691b464bd615fa340.jpg" class="pp"> 

    <ul class="akun">
          
        <li><a clas ="namaAkun" href="akun.html">Indra Ajiyanto</a></li>
        </ul>
    </div>
            
        <ul>
          <li><a href="home.html">Beranda</a></li>
          <li><a href="formbooking.html">Booking</a></li>
          <li><a href="carabooking.html">Cara Booking</a></li>
          <li><a href="jadwal.html">Jadwal</a></li>
          <li><a href="kontak.html">Kontak</a></li>
        </ul>
        <h2 class="iconBola">⚽</h2>
        
    </nav>

    <div class="container">
        <header>
            <h1>Login Form</h1>
        </header>
        <div id="message-con">
        </div>
       
        <div id="login-con">
            <form action="">
                <label > Email   : </label>
                <input type="text" name="" id="femail">

                <label > Password   : </label>
                <input type="text" name="" id="fpassword">
                
                
                <input onclick="cekLogin(event)" type="submit" value="Login" > 
            </form>

        </div>
    </div>
    
    <script src="JS/login.js"></script>  
   
</body>
</html>