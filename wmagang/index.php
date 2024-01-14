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
                              <li><a href="https://banmod.indagkediri.online/home.html" target="_blank">Bantuan
                                        Modal</a>
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
                         </i>
                    </div>
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

                              <h2 class="mb-4" data-aos="fade-up"> <strong class="gradient-text"> Tentang Dinas
                                        Perdagangan dan Perindustrian</strong> </h2>

                              <p class="mb-0" data-aos="fade-up">

                              <h3 data-aos="fade-up">
                                   <center>Profil Dinas Perdagangan dan Perindustrian</center>
                              </h3>

                              <center>
                                   <div class="logo2" data-aos="fade-up">
                                        <img src="images/dp1.png" alt="logo"
                                             style="height: 100px; background: linear-gradient(to top right ,var(--menu-bg),var(--green)); border-radius: 10px;">
                                   </div>
                              </center>

                              <div class="text" data-aos="fade-up">
                                   </br>
                                   <h3>Sambutan</h3>
                                   Selamat datang di Dinas Perdagangan dan Perindustrian Kota Kediri, sebuah lembaga
                                   pemerintahan yang berkomitmen untuk mengembangkan sektor perdagangan dan
                                   perindustrian
                                   guna mendorong pertumbuhan ekonomi dan kesejahteraan masyarakat. Dengan visi dan misi
                                   yang
                                   jelas, kami bertekad menjadi garda terdepan dalam menciptakan lingkungan usaha yang
                                   kondusif dan memberdayakan pelaku ekonomi lokal.</br></br>

                                   Sebagai motor penggerak ekonomi di tingkat lokal, Dinas Perdagangan dan Perindustrian
                                   Kota
                                   Kediri memiliki tanggung jawab besar dalam merumuskan kebijakan, mengembangkan
                                   strategi,
                                   dan menyelenggarakan program-program unggulan yang mampu meningkatkan daya saing dan
                                   produktivitas sektor perdagangan dan perindustrian di wilayah ini.</br></br>

                                   Kami memahami bahwa kerjasama yang solid antara pemerintah, pelaku usaha, dan
                                   masyarakat
                                   merupakan kunci kesuksesan. Oleh karena itu, Dinas Perdagangan dan Perindustrian Kota
                                   Kediri berkomitmen untuk membangun sinergi yang kuat melalui berbagai kegiatan
                                   kolaboratif, dialog, serta fasilitasi yang mendukung pertumbuhan dan perkembangan
                                   bisnis.</br></br>

                                   Dalam era globalisasi ini, tantangan dan peluang dalam bidang perdagangan dan
                                   perindustrian semakin kompleks. Dinas kami senantiasa berupaya untuk mengantisipasi
                                   perubahan-perubahan tersebut, menghadirkan inovasi, dan memberikan layanan yang prima
                                   bagi
                                   para pelaku usaha. Kami percaya bahwa dengan dukungan semua pihak, kita dapat
                                   bersama-sama
                                   mencapai kemajuan dan menciptakan iklim investasi yang kondusif.</br></br>

                                   Melalui media ini, kami mengundang semua pihak untuk bergandengan tangan dalam
                                   mewujudkan
                                   visi bersama menciptakan Kota Kediri yang maju, berdaya saing, dan berkeadilan. Mari
                                   bersama-sama membangun masa depan yang lebih baik bagi generasi mendatang melalui
                                   pembangunan sektor perdagangan dan perindustrian yang berkelanjutan dan
                                   inklusif.</br></br>

                                   Terima kasih atas dukungan dan partisipasi Anda. Bersama, kita mampu meraih
                                   kesuksesan dan
                                   kemakmuran bersama.</br></br>
                              </div>

                              <h3>Visi dan Misi</h3></br>

                              Visi:</br>
                              Menjadi pionir dalam pengembangan sektor perdagangan dan perindustrian, mendorong Kota
                              Kediri sebagai pusat ekonomi yang berdaya saing, berinovasi, dan berkelanjutan.</br></br>

                              Misi:</br>

                              1. Pengembangan Ekosistem Bisnis: Membangun ekosistem bisnis yang kondusif, inklusif, dan
                              berdaya saing untuk mendukung pertumbuhan dan perkembangan pelaku usaha lokal.</br></br>

                              2. Peningkatan Daya Saing: Menggalakkan inovasi, teknologi, dan peningkatan kualitas
                              produk
                              dan layanan agar pelaku usaha dapat bersaing secara efektif di tingkat lokal, nasional,
                              dan internasional.</br></br>

                              3. Pemberdayaan UMKM: Meningkatkan kapasitas dan aksesibilitas UMKM melalui program
                              pelatihan, pendampingan, dan fasilitasi akses ke pasar, sehingga mereka dapat menjadi
                              tulang punggung ekonomi lokal.</br></br>

                              4. Optimalisasi Sumber Daya Lokal: Mengelola dan memanfaatkan sumber daya lokal secara
                              optimal untuk mendukung perkembangan sektor perindustrian dan perdagangan, dengan menjaga
                              keberlanjutan lingkungan.</br></br>

                              5. Kemitraan Strategis: Membangun kerjasama yang erat dengan berbagai pihak, termasuk
                              sektor
                              swasta, akademisi, dan masyarakat, guna menciptakan sinergi yang positif dalam
                              pengembangan ekonomi Kota Kediri.</br></br>

                              6. Pelayanan Prima: Memberikan pelayanan yang cepat, transparan, dan berorientasi pada
                              kebutuhan pelaku usaha serta masyarakat, guna menciptakan iklim investasi yang
                              kondusif.</br></br>

                              7. Penyelenggaraan Program Unggulan: Menyelenggarakan program-program unggulan yang
                              mendukung
                              pengembangan sektor perdagangan dan perindustrian, termasuk event promosi, pameran, dan
                              kegiatan-kegiatan pendukung lainnya.</br></br>

                              8. Keberlanjutan: Memastikan bahwa setiap langkah yang diambil selaras dengan
                              prinsip-prinsip
                              pembangunan berkelanjutan, sehingga pertumbuhan ekonomi dapat berlangsung secara harmonis
                              dengan keberlanjutan lingkungan dan kesejahteraan masyarakat.</br></br>

                              <h3>Struktur Organisasi</h3></br>

                              Susunan organisasi Dinas, terdiri atas :</br>

                              a. Kepala Dinas</br></br>

                              b. Sekretariat, membawahi:</br>

                              1. Sub Bagian Umum</br>

                              2. Kelompok Jabatan Fungsional.</br></br>

                              c. Bidang Pengembangan Perdagangan, terdiri atas Kelompok Jabatan Fungsional</br></br>

                              d. Bidang Perindustrian, terdiri atas Kelompok Jabatan Fungsional</br></br>

                              e. Bidang Kemetrologian, terdiri atas Kelompok Jabatan Fungsional</br></br>

                              f. UPT Dinas.</br></br>

                              <h3>Program dan Kegiatan</h3></br>

                              Program Kerja Dinas Perdagangan dan Perindustrian Kota Kediri Tahun Ini:</br></br>

                              1. Pengembangan Pusat Ekonomi Kreatif:</br>

                              Membangun Pusat Ekonomi Kreatif sebagai wadah bagi pelaku usaha kreatif lokal.
                              Mengadakan pelatihan keterampilan dan peningkatan kapasitas bagi pengusaha
                              kreatif.</br></br>

                              2. Inovasi dan Teknologi untuk Daya Saing:</br>

                              Mendorong implementasi teknologi dalam sektor perindustrian dan perdagangan.
                              Menyelenggarakan seminar dan workshop tentang inovasi bisnis.</br></br>

                              3. Program Pendampingan UMKM:</br>

                              Menyusun program pendampingan untuk UMKM dalam hal manajemen usaha, pemasaran, dan
                              keuangan.
                              Mengadakan bimbingan teknis dan konsultasi bisnis secara reguler.</br></br>

                              4. Pemanfaatan Sumber Daya Lokal:</br>

                              Melakukan inventarisasi dan pemetaan sumber daya lokal yang dapat dikembangkan.
                              Merancang program pelatihan bagi pelaku usaha terkait pengelolaan sumber daya
                              lokal.</br></br>

                              5. Kemitraan Strategis:</br>

                              Membangun kemitraan dengan lembaga pendidikan, organisasi bisnis, dan pihak swasta.
                              Menyelenggarakan forum dialog dan kerjasama antara pemerintah, swasta, dan
                              akademisi.</br></br>

                              6. Pelayanan Prima:</br>

                              Meningkatkan layanan perizinan usaha dengan penerapan teknologi e-government.
                              Memberikan pelatihan kepada staf dalam meningkatkan keterampilan pelayanan kepada
                              masyarakat.</br></br>

                              7. Program Unggulan:</br>

                              Menyelenggarakan pameran perdagangan dan perindustrian sebagai wadah promosi produk lokal.
                              Menyusun program insentif bagi pelaku usaha yang berkontribusi pada pembangunan ekonomi
                              lokal.</br></br>

                              8. Keberlanjutan Lingkungan:</br>

                              Menerapkan program pengelolaan limbah dan energi yang ramah lingkungan.
                              Menggalakkan kesadaran lingkungan melalui kampanye edukasi dan sosialisasi.
                              Program kerja ini disusun dengan mempertimbangkan visi dan misi Dinas Perdagangan dan
                              Perindustrian Kota Kediri, serta mengacu pada kebutuhan aktual dan potensi yang ada di
                              masyarakat. Tujuannya adalah untuk mewujudkan pembangunan ekonomi yang berkelanjutan dan
                              memberdayakan seluruh lapisan masyarakat.</br></br>

                              <h3>Kesimpulan</h3></br>

                              Dengan visi menjadi pionir dalam pengembangan sektor perdagangan dan perindustrian, Dinas
                              Perdagangan dan Perindustrian Kota Kediri berkomitmen untuk menjadikan kota ini sebagai
                              pusat ekonomi yang berdaya saing, inovatif, dan berkelanjutan. Melalui misi-misi yang
                              terstruktur, dinas ini bertujuan tidak hanya meningkatkan daya saing pelaku usaha, tetapi
                              juga memberdayakan UMKM, mengoptimalkan sumber daya lokal, dan menjalin kemitraan
                              strategis untuk mencapai pertumbuhan ekonomi yang inklusif.</br></br>

                              Dengan fokus pada pelayanan prima, pemanfaatan teknologi, dan pembangunan ekosistem bisnis
                              yang kondusif, Dinas Perdagangan dan Perindustrian Kota Kediri berusaha menciptakan
                              lingkungan investasi yang menarik dan mendukung perkembangan berkelanjutan. Program kerja
                              yang terencana dengan cermat mencakup berbagai aspek, mulai dari pengembangan ekonomi
                              kreatif hingga keberlanjutan lingkungan, mencerminkan komitmen untuk memberikan dampak
                              positif bagi masyarakat dan bisnis lokal.</br></br>

                              Dengan demikian, Dinas Perdagangan dan Perindustrian Kota Kediri mengajak seluruh pemangku
                              kepentingan, mulai dari pelaku usaha, lembaga pendidikan, hingga masyarakat umum, untuk
                              bersama-sama berkontribusi dalam mewujudkan Kota Kediri yang maju, berdaya saing, dan
                              berkeadilan. Dukungan dan partisipasi dari semua pihak diharapkan dapat membawa Kota
                              Kediri menuju masa depan yang lebih baik, di mana pertumbuhan ekonomi sejalan dengan
                              keberlanjutan dan kesejahteraan bersama.</br></br>
                         </div>
                         </p>
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

                              <img src="images/foto.jpg" class="img-fluid" alt="website">
                         </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                         <h3 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">KEPALA KANTOR</h3>


                         <h4 class="mb-4" data-aos="fade-up" data-aos-delay="300">
                              Nama    :WAHYU KUSUMA WARDANI, SSTP. MM</br>

                              NIP     : 19760207 199602 1 002</br>

                              Pangkat : Pembina Utama Muda</br>

                              Gol. Ruang : IV/c</br>
                         </h4>

                         
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
