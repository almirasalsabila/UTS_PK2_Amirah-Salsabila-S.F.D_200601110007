<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="UTSPK.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Website Wisata</title>
  </head>
    <!-- Header -->
  <section class="header">
      <nav>
        <h1>PesonaMalang</h1>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
    <div class="text-box">
      <h1>Welcome To Pantai 3 Warna Malang</h1>
    </div>

  </section>

  <!-- about -->
  <section class="about">
    <div class="container">
      <div class="box-about">
        <div class="box">
          <h1>Pantai 3 Warna</h1>
          <p> Pantai Tiga Warna terletak di Desa Tambakrejo, Kecamatan Sumbermanjing Wetan, Kabupaten Malang, Provinsi Jawa Timur. 
            Pantai yang dibuka pada pertengahan 2014 ini berada di kawasan rehabilitas dan konservasi mangrove, terumbu karang, dan hutan lindung. 
            <br> 
            Pantai ini disebut Pantai Tiga Warna karena pantai memiliki gradasi yang terdiri dari tiga warna, yaitu biru, hijau, dan coklat kemerahan. 
            Warna-warna itu berasal dari kedalaman permukaan pantai. 
            Warna biru pada bagian terdalam, hijau pada bagian terdangkal, dan cokelat kemerahan pada pasir pantai.
            Walaupun berada di pantai selatan, ombak Pantai Tiga Warna cenderung tenang dan merupakan satu-satunya spot snorkeling di Malang.
          </p>
        </div>
        <div class="box">
          <img src="3warna1.jpg">
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="gallery">
    <h1>Keindahan Pantai 3 warna</h1>
  <div class="container">
    <div class="box-gallery">
      <img src="Teduhnya-Pohon-di-Pantai-Tiga-Warna-image-by-@pantaitigawarna.jpg">
      <img src="Pantai 3 Warna Reservasi.jpg">
      <img src="snorkeling.jpg">
      <img src="Wisata-Pantai-Tiga-Warna-yang-Indah.jpg">
      <img src="Pengunjung-bisa-snorkeling-untuk-melihat-lebih-jelas-biota-yang-berada-di-bawah-laut.jpg">
      <img src="pantai-tiga-warna.jpg">
    </div>
  </div>
  </section>

  <!-- Contact -->
  <section class="contact">
    <div class="container">
      <div class="box-contact">
        <h1>Contact</h1>
        <form action="">
          <table>
            <tr>
            <td><label for="email">Email</label></td>
              <td><input type="email" id="email" none="email" Placeholder="Masukkan Email"></td>
            </tr>
            <tr>
              <td><label for="nama">Nama</label></td>
             <td><input type="text" id="nama" none="nama" Placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
              <td><label for="komentar">Komentar</label></td>
              <td><textarea name="Pesan" id="Pesan" cols="30" rows="10" Placeholder="Masukkan Pesan"></textarea></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <section class="footer">
    <h4>About Us</h4>
    <p>Indonesia memiliki beragam Wisata yang layak untuk dikunjungi, mulai dari Wisata Budaya, Wisata Kuliner, hingga Wisata alam.
    <br> Salah satu wisata alam yang terkenal di Indonesia adalah Wisata Pantai.</p>
    <div class="icons">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-instagram"></i>
      <i class="fa fa-linkedin"></i>
    </div>
  </section>

  <!-- JavaScrip for Toggle Menu -->
  <script>

    var navLinks = document.getElementById("navLinks");
    function showMenu(){
      navLinks.style.right = "0";
    }
    function hideMenu(){
      navLinks.style.right ="-200px";
    }
  </script>
  </body>
</html>
