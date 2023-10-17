<!DOCTYPE html>
<html lang="en">
<head>

     <title>Digital Trend Contact</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="shorcut icon" href="images/lpicon2.png">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>
     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-absolute">
      <a href="index.php">
        <div class="logo">
            <img src="images/dp1.png" alt="logo" style="height: 70px;">
        </div>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link smoothScroll">Beranda</a>
            </li>
            <li class="nav-item">
                 <a href="#project" class="nav-link smoothScroll">Berita</a>
             </li> 
            <li class="nav-item">
                <a href="#" class="nav-link smoothScroll">Informasi</a>
                <ul class="isi-dropdown">
  <li><a href="#">Pasar</a></li>
  <li><a href="#">Minimarket</a></li>
  <li><a href="#">Mall</a></li>
                 <li><a href="#">Industri Kecil Menengah</a></li>
     </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Layanan</a>
                <ul class="isi-dropdown">
                 <li><a href="#">Bantuan Modal</a></li>
                 <li><a href="#">Izin Tempat Penjualan Minuman Beralkohol</a></li>
                 <li><a href="#">Legalitas Merk</a></li>
  <li><a href="#">Sertifikasi Halal</a></li>
  <li><a href="#">Sinas</a></li>
                 <li><a href="#">Tera/Tera Ulang</a></li>
     </ul>
            </li>
            <li class="nav-item">
                 <a href="#" class="nav-link">Produk Unggulan</a>
             </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Zona Integritas</a>
            </li>
            <li class="nav-item">
                 <a href="#" class="nav-link smoothScroll">Unduhan</a>
             </li>
             <li class="nav-item">
                 <a href="contact.php" class="nav-link contact">Kontak</a>
             </li>
             <i class="fa fa-eye">
                 <?php
                      //koneksi
                      $conn = mysqli_connect('localhost','root','','db_counter');

                      //pilih database
                      $count = mysqli_query($conn, "SELECT * FROM tb_counter");

                      //logika
                      $row = mysqli_fetch_assoc($count);
                      $current_count = $row['counts'];
                      echo $current_count;
                 ?>
            </i>
        </ul>
    </div>
    </nav>


     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4">Hey there, Let's <strong class="gradient-text">talk</strong> about <strong class="gradient-text">creative</strong> projects</h1>

                      <p>or email us at <a href="mailto:hello@company.com">hello@company.com</a></p>
                      <p>Please follow our <a rel="nofollow" href="https://templatemo.com/contact">contact page</a> to <strong class="gradient-text">setup</strong> the contact form.</p>
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    
                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->
                    
                      <form action="#" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>

                          <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>

<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
     <div class="google-map" data-aos="zoom-in">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15811.0947128!2d111.9816807871582!3d-7.8137655000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78571ffa451fa5%3A0xa7a0754fb863b0c!2sDinas%20Perindustrian%20Perdagangan%20Pertambangan%20Dan%20Energi!5e0!3m2!1sid!2sid!4v1695780133282!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +99 080 070 4224
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                hello@company.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Studio</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2020 Your Company
            <br>
            <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a></p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/transition.js"></script>

</body>
</html>