<!DOCTYPE html>
<html>
<title>Karangsong</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.icon-bar {
  width: 90px; /* Set a specific width */
  background-color: #555; /* Dark-grey background */
}

.icon-bar a {
  display: block; /* Make the links appear below each other instead of side-by-side */
  text-align: center; /* Center-align text */
  padding: 16px; /* Add some padding */
  transition: all 0.3s ease; /* Add transition for hover effects */
  color: white; /* White text color */
  font-size: 36px; /* Increased font-size */
}

.icon-bar a:hover {
  background-color: #000; /* Add a hover color */
}

.active {
  background-color: #4CAF50; /* Add an active/current color */
}
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="admin/galeri/1.jpg" style="width:100%">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#tiket" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>Tiket</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p></a>
      <a href="#lokasi" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
        <i class="fa fa-globe w3-xxlarge"></i>
        <p>LOKASI</p>
      </a>
    </nav>

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
      <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="#home" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="#tiket" class="w3-bar-item w3-button" style="width:25% !important">TIKET</a>
        <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
        <a href="#lokasi" class="w3-bar-item w3-button" style="width:25% !important">LOKASI</a>
      </div>
    </div>

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
      <!-- Header/Home -->
      <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo"><span class="w3-hide-small">Pantai Lestari</span> Karangsong.</h1>
        <p>Wisata di Indramayu.</p>
        <img src="admin/galeri/3.jpg" alt="boy" class="w3-image" width="992" height="1108">
      </header>

      <!-- About Section -->
      <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="home">
        <h2 class="w3-text-light-grey">KARANGSONG BEACH</h2>
        <hr style="width:200px" class="w3-opacity">
        <p>Obyek Wisata Hutan Mangrove Pantai Lestari Karangsong di Karangsong Indramayu Jawa Barat adalah salah satu tempat wisata yang berada di desa karangsong, kabupaten indramayu, provinsi jawa barat, negara indonesia.. Obyek Wisata Hutan Mangrove Pantai Lestari Karangsong di Karangsong Indramayu Jawa Barat adalah tempat wisata yang ramai dengan wisatawan pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas kita sehari hari.
          Obyek Wisata Hutan Mangrove Pantai Lestari Karangsong di Karangsong Indramayu Jawa Barat memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat di sayangkan jika anda berada di kota  indramayu tidak mengunjungi wisata alam yang mempunyai keindahan  yang tiada duanya tersebut.
          Obyek Wisata Hutan Mangrove Pantai Lestari Karangsong di Karangsong Indramayu Jawa Barat sangat cocok untuk mengisi kegiatan liburan anda, apalagi saat liburan panjang seperti
          libur nasional, ataupun hari ibur lainnya.  Keindahan Obyek Wisata Hutan Mangrove Pantai Lestari Karangsong di Karangsong Indramayu Jawa Barat ini sangatlah baik bagi anda semua yang berada di dekat  atau di kejauhan untuk merapat mengunjungi tempat  Obyek Wisata Hutan Mangrove Pantai Lestari Karangsong di Karangsong Indramayu Jawa Barat di kota  indramayu.
        </p>



        
        <!-- Grid for pricing tables -->
        <h3 class="w3-padding-16 w3-text-light-grey">Harga Tiket</h3>
        <?php
        include 'database/koneksi.php'; 
        $sql = "SELECT * from tiket";
        $hasil = mysqli_query($koneksi, $sql);
        while
        ($baris = mysqli_fetch_array($hasil)){

        ?>
        <div class="w3-row-padding" style="margin:0 -16px" id="tiket">

          <div class="w3-half w3-margin-bottom">

            <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">

              <li class="w3-dark-grey w3-xlarge w3-padding-32">Harga Tiket Masuk Perorang</li>

              <li class="w3-padding-16">
                <h2><?php echo $baris['harga']; ?></h2>
                <span class="w3-opacity"><?php echo $baris['usia']; ?></span>
              </li>
            </ul>
          </div>
          <!-- End Grid/Pricing tables -->
        </div>
        <?php 
      }
      ?>



      <!-- Testimonials -->
      <h3 class="w3-padding-30 w3-text-light-grey">Di Support oleh</h3>  
      <img src="admin/galeri/4.jpg" alt="Avatar"  style="width:100px; height: 90px">
      <p><span class="w3-large w3-margin-right">Pemerintah Kabupaten Indramayu.</span> Dinas Pariwisata Kabupaten Indramayu.</p>
      <br>

      <img src="admin/galeri/5.png" alt="Avatar"  style="width:120px; height: 90px">
      <p><span class="w3-large w3-margin-right">Pertamina.</span> Pertamina Balongan Indramayu.</p><br>

      <img src="admin/galeri/6.jpg" alt="Avatar"  style="width:100px; height: 90px">
      <p><span class="w3-large w3-margin-right">Kemenpar.</span> Kementrian Pariwisata Republik Indonesia.</p><br>

      <img src="admin/galeri/7.png" alt="Avatar"  style="width:100px; height: 90px">
      <p><span class="w3-large w3-margin-right">Pesona Indonesia.</span> Wonderful Pesona Indonesia .</p>

      <!-- End About Section -->
    </div>


    <!-- Portfolio Section -->
    <div class="w3-padding-64 w3-content" id="photos">
      <h2 class="w3-text-light-grey">Aneka Spot Foto Menarik Di Karangsong</h2>
      <hr style="width:200px" class="w3-opacity">
              <?php
        include 'database/koneksi.php'; 
        $sql = "SELECT * from tabel_image";
        $hasil = mysqli_query($koneksi, $sql);
        while
        ($baris = mysqli_fetch_array($hasil)){

        ?>
      <!-- Grid for photos -->
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
          <img src="<?php echo 'admin/galeri/'.$baris['gambar'] ?>" style="width:100%">
          <h3><?php echo '$baris[ket]' ?></h3>
        </div>
        <!-- End photo grid -->
      </div>
      <?php
}
?>
      <!-- End Portfolio Section -->
    </div>

    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="lokasi">
      <h2 class="w3-text-light-grey">Lokasi Pantai Karangsong</h2>
      <hr style="width:200px" class="w3-opacity">
      <p>Lokasi Pantai ini berada di Desa Karangsong, Indramayu, Jawa Barat. Berwisata ke pantai benar-benar akan menjadi wisata yang tidak akan terlupakan. Selain keindahan hutan bakaunya yang indah dan sejuk.<br>
        Rute menuju Pantai Karangsong sendiri cukup mudah ditempuh, kok. Jika Anda berangkat dari pusat kota Indramayu, ambillah jalan menuju arah Jl. Samsu. Jl. Samsu sendiri berada di antara Toserba Yogya atau gedung DPRD Kab. Indramayu.<br>
        Dari Jl. Samsu jalan lurus sampai menemukan arah TPI (Tempat Pelelangan Ikan) Karangsong. Di situ sudah terdapat plang yang akan menunjukkan pengunjung ke arah pantai Karangsong.
      </p>

      <!-- Contact Section -->
      <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <h2 class="w3-text-light-grey">Contact Me</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-section">
          <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Karangsong, Indramayu</p>
          <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +6287718882659</p>
          <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: karangsong.idr@gmail.com</p>
        </div><br>

        <!-- Footer -->
        <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
          <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
          <!-- End footer -->
        </footer>

        <!-- END PAGE CONTENT -->
      </div>

    </body>
    </html>
