<!DOCTYPE html>
<html lang="en">

<head>

     <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
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

     <div class="loading-screen">
          <div class="loader"></div>
     </div>
     <!-- MENU BAR -->
     <!-- , ISI,Layanan(Dropdown), Zona Integritas, UNDUHAN-->
     <nav class="navbar navbar-expand-lg">

          <a href="index.php">
               <div class="logo">
                    <img src="images/dp1.png" alt="logo" style="height: 70px;">
               </div>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                         <a href="#" class="nav-link" id="informasi-dropdown-toggle">Informasi</a>
                         <ul class="isi-dropdown" id="informasi-dropdown">
     <li><a href="pasar.html">Pasar</a></li>
     <li>
         <a href="#" id="minimarket-dropdown-toggle">Minimarket</a>
         <ul class="isi-drop" id="minimarket-dropdown">
             <li><a href="indomaret.html">Indomaret</a></li>
             <li><a href="alfamart.html">Alfamart</a></li>
         </ul>
     </li>
     <li><a href="mall.html">Mall</a></li>
     <li><a href="ikm.html">Industri Kecil Menengah</a></li>
</ul>

               </li>
               <li class="nav-item">
                    <a href="#" class="nav-link">Layanan</a>
                    <ul class="isi-dropdown" id="layanan-dropdown">
                         <li><a href="https://banmod.indagkediri.online/home.html" target="_blank">Bantuan Modal</a>
                         </li>
                         <!-- <li><a href="#">Izin Tempat Penjualan Minuman Beralkohol</a></li> -->
                         <li><a href="merk.html">Legalitas Merk</a></li>
                         <li><a href="halal.html">Sertifikasi Halal</a></li>
                         <li><a href="sinas.html">Sinas</a></li>
                         <li><a href="tera.html">Tera/Tera Ulang</a></li>
                    </ul>
               </li>
               <li class="nav-item">
                    <a href="https://pusakaumkm.id/home/" class="nav-link" target="_blank">Produk Unggulan</a>
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
               <div class="fa-eye-icon">
               <i class="fa fa-eye">
                    <?php
                    //koneksi
                    $conn = mysqli_connect('localhost', 'root', '', 'db_counter');

                    //pilih database
                    $count = mysqli_query($conn, "SELECT * FROM tb_counter");

                    //logika
                    while ($row = mysqli_fetch_assoc($count)) {
                         $current_count = $row['counts'];
                         $new_count = $current_count + 1;
                         $update_count = mysqli_query($conn, "UPDATE tb_counter SET counts = '" . $new_count . "'");
                         echo $new_count;
                    }
                    ?>
               </i></div>
               <div class="scroll-up-icon">
    <i class="fa fa-arrow-up"></i>
</div>
               </ul>
          </div>

     </nav>


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">
                         <h2 class="mb-5 text-center" data-aos="fade-up">
                              Berita Terkini
                         </h2>


                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="images/project/b1.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>DSF</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Brantas, beyond infinity</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/b2.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>DSF</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Brantas, beyond infinity</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/b3.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>DSF</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Brantas, beyond infinity</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/b1.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>DSF</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Brantas, beyond infinity</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/b2.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>DSF</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Brantas, beyond infinity</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                         <div class="hero-text">

                              <h1 class="text-white" data-aos="fade-up">Berikut layanan dari kami untuk anda</h1>

                              <a href="contact.html" class="custom-btn btn-bg btn mt-3" data-aos="fade-up"
                                   data-aos-delay="100">Tekan Disini</a>

                              <strong class="d-block py-3 pl- text-white" data-aos="fade-up" data-aos-delay="200"><i
                                        class="fa fa-phone mr-2"></i> +62 123 456 789</strong>
                         </div>
                    </div>

                    <div class="col-lg-6 col-12">
                         <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                              <img src="images/hero.png" class="img-fluid" alt="working girl">
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">the best <strong class="gradient-text">Dinas
                                        Perdagangan dan Perindustrian</strong> in Kediri City</h2>

                              <p class="mb-0" data-aos="fade-up">Lorem Ipsum is simply dummy text of the printing and
                                   typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                   since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                   make a type specimen book.
                                   <br><br>It has survived not only five centuries, but also the leap into electronic
                                   typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                   the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                   with desktop publishing software like Aldus PageMaker including versions of Lorem
                                   Ipsum.
                              </p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                              <img src="images/office.png" class="img-fluid" alt="office">
                         </div>
                    </div>

               </div>
          </div>
     </section>




     <!-- TESTIMONIAL -->
     <section class="testimonial section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                         <div class="contact-image" data-aos="fade-up">

                              <img src="images/female-avatar.png" class="img-fluid" alt="website">
                         </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                         <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                         <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                         <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum Sed eiusmod esse aliqua
                              sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo.</h2>

                         <p data-aos="fade-up" data-aos-delay="400">
                              <strong class="gradient-text">Mary Zoe</strong>

                              <span class="mx-1">/</span>

                              <small>Digital Agency (CEO)</small>
                         </p>
                    </div>

               </div>
          </div>
     </section>


     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                         <h1 class="text-white custom-color" data-aos="fade-up" data-aos-delay="100">
                              Disperdagin
                              <strong class="gradient-text"><br>Kota Kediri</strong>
                         </h1>
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
                         <h4 class="my-4">Kantor Kami</h4>

                         <p class="mb-1">
                              <i class="fa fa-home mr-2 footer-icon"></i>
                              Jl. Penanggungan NO. 7, Bandar Lor, Kec. Mojoroto, Kota Kediri, Jawa Timur
                         </p>
                    </div>

                    <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up"
                         data-aos-delay="400">
                         <p class="copyright-text">Copyright &copy; 2023 DISPERDAGIN
                              <br>
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
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/transition.js"></script>
     <script src="js/loader.js"></script>

     <script>
    document.addEventListener('DOMContentLoaded', function () {
        var scrollUpIcon = document.querySelector('.scroll-up-icon');

        // Tampilkan tombol ketika pengguna menggulir ke bawah
        window.addEventListener('scroll', function () {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollUpIcon.style.display = 'block';
            } else {
                scrollUpIcon.style.display = 'none';
            }
        });

        // Smooth scroll ke atas ketika tombol diklik
        scrollUpIcon.addEventListener('click', function () {
            smoothScrollToTop();
        });

        // Fungsi untuk melakukan smooth scroll ke atas
        function smoothScrollToTop() {
            var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
            if (currentPosition > 0) {
                window.requestAnimationFrame(smoothScrollToTop);
                window.scrollTo(0, currentPosition - currentPosition / 8);
            }
        }
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
     // Tombol toggle dropdown minimarket
     var minimarketToggle = document.getElementById('minimarket-dropdown-toggle');
     // Dropdown minimarket
     var minimarketDropdown = document.getElementById('minimarket-dropdown');

     // Tampilkan dropdown minimarket ketika tombol toggle diklik
     minimarketToggle.addEventListener('click', function () {
         if (minimarketDropdown.style.display === 'none' || minimarketDropdown.style.display === '') {
             minimarketDropdown.style.display = 'block';
         } else {
             minimarketDropdown.style.display = 'none';
         }
     });

     // Sembunyikan dropdown minimarket saat klik di luar dropdown
     document.addEventListener('click', function (event) {
         var targetElement = event.target;
         if (targetElement !== minimarketToggle && targetElement !== minimarketDropdown) {
             minimarketDropdown.style.display = 'none';
         }
     });
 });</script>


</body>

</html>