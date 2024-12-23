
<?php
include 'koneksi.php';

// Cek apakah pengguna sudah login

    

// Query untuk mengambil data dari tabel buletin
$sql = "SELECT * FROM buletin ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

include 'format.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GSJA Logos Kotaraja</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:locale" content="id_ID" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="GSJA Logos Kotaraja" />
  <meta property="og:description" content="GSJA Logos Kotaraja" />
  <meta property="og:url" content="https://gsjalogos.org" />
  <meta property="og:site_name" content="GSJA Logos Kotaraja" />
  <meta property="og:image" content="https://gsjalogos.org/assets/img/logo.png" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img width="45" src="assets/img/logo.png" alt="">
        <h1 class="sitename">GSJA Logos Kotaraja</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#beranda" class="">BERANDA</a></li>
          <li><a href="#tentang">TENTANG KAMI</a></li>
          <li><a href="#ibadah">IBADAH</a></li>
          <li><a href="#buletin">BULETIN</a></li>
          <li><a href="#kontak">KONTAK</a></li>
          <li><a href="#blog">BLOG</a></li>
          <li><a href="galeri">GALERI</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main" id="beranda">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 text-center">
              <h2 class="">GSJA LOGOS KOTARAJA <br> </h2>
              <h5>Cinta Tuhan, Rendah Hati, Jujur dan Rajin </h5>
              <!-- <h1 class="fw-bolder text-uppercase"></h1> -->
              <!-- <h3 class="fw-bolder text-uppercase">Menjadi Jemaat Teladan</h3> -->
              <a href="#tentang" class="btn-get-started">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
        </div>

        <div class="carousel-item ">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-4.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-5.jpg" alt="">
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- /Hero Section -->

  
    <!-- tentang Section -->
    <section id="tentang" class="alt-services section light-background"">

      <div class="container">

        <div class="row dsd-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="300"><img class="rounded shadow-lg" src="assets/img/alt-services.jpg" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center " data-aos="fade-up" data-aos-delay="200">
            <h3>TENTANG GSJA LOGOS</h3>
            <p class="text" style="text-align: justify;">GSJA (Gereja Sidang-Sidang Jemaat Allah) Logos  adalah bagian dari jaringan Gereja Sidang-Sidang Jemaat Allah, sebuah denominasi gereja Protestan yang beraliran Pentakosta. Berfokus pada pengajaran Alkitab, pengembangan iman, dan pelayanan kepada jemaat serta masyarakat. Dengan berlandaskan pada kuasa Roh Kudus, GSJA Logos mendorong jemaat untuk bertumbuh dalam kehidupan rohani yang penuh kasih, integritas dalam pelayanan.</p>


            <p class="text" style="text-align: justify;">Visi Menjadi Jemaat Teladan adalah membentuk komunitas yang hidup sesuai dengan ajaran Kristus, mencerminkan kasih, kebenaran, dan integritas dalam setiap aspek kehidupan. Jemaat yang teladan berkomitmen untuk terus bertumbuh dalam iman, memperdalam hubungan dengan Tuhan, serta mempraktikkan nilai-nilai kekristenan dalam keseharian. Dengan menjadi saksi akan kasih Allah.</p>


         
        </div>

      </div>

    </section><!-- /tentang Section -->


   


    <!-- Constructions Section -->
    <section id="ibadah" class="constructions section ">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>IBADAH</h2>
            <p>Ibadah Sepekan adalah rangkaian kegiatan rohani yang dilakukan sepanjang minggu untuk memperkuat iman serta memperdalam hubungan dengan Tuhan Yesus dan sesama </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item shadow-lg rounded">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/sekolah-minggu.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">SEKOLAH MINGGU</h4>
                    <p>Ibadah Sekolah Minggu di GSJA Logos diadakan setiap hari Minggu pukul 07:00 WIT, merupakan waktu bagi anak-anak untuk belajar firman Tuhan melalui pujian, cerita Alkitab, dan aktivitas kreatif.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item shadow-lg rounded">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/minggu-raya.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">MINGGU RAYA</h4>
                    <p>Ibadah Minggu Raya di GSJA Logos berlangsung setiap hari Minggu pukul 09:00 WIT, merupakan ibadah umum yang terbuka bagi seluruh jemaat untuk bersekutu dan memuji Tuhan. </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item shadow-lg rounded">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/kaum-pria.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">KAUM PRIA</h4>
                    <p>Ibadah Kaum Pria di GSJA Logos diadakan setiap hari Senin pukul 18:00 WIT, merupakan waktu bagi para pria untuk bersekutu, memperdalam firman Tuhan, dan saling menguatkan dalam iman.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item shadow-lg rounded">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/selasa-gembira.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">SELASA GEMBIRA</h4>
                    <p>Ibadah Selasa Gembira diadakan setiap hari Selasa pukul 16:00 WIT, dirancang khusus untuk anak-anak agar mereka dapat beribadah dengan penuh sukacita.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item shadow-lg rounded">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/kka.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">KKA</h4>
                    <p>Ibadah Keluarga di GSJA Logos diadakan setiap hari Rabu pukul 18:00 WIT, merupakan kesempatan bagi seluruh anggota keluarga untuk berkumpul, beribadah, dan mempererat hubungan dengan Tuhan serta satu sama lain. </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item shadow-lg rounded">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/kaum-wanita.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">KAUM WANITA</h4>
                    <p>
                      Ibadah Kaum Wanita di GSJA Logos berlangsung setiap hari Kamis pukul 18:00 WIT, merupakan kesempatan bagi para wanita untuk bersekutu, memuji Tuhan, dan memperdalam iman melalui firman-Nya.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item shadow-lg rounded">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/kaum-muda.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">KAUM MUDA</h4>
                    <p>
                      Ibadah Kaum Muda di GSJA Logos diadakan setiap hari Jumat pukul 18:00 WIT, merupakan momen khusus bagi para pemuda untuk bersekutu, memuji Tuhan, dan memperdalam iman melalui firman.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item shadow-lg rounded">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/doa-bison.jpg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">DOA BISTON </h4>
                    <p>Doa Biston di GSJA Logos diadakan setiap hari Sabtu pukul 14:00 WIT, merupakan waktu khusus bagi jemaat untuk berkumpul dalam doa bersama.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->



        </div>

      </div>

    </section><!-- /Constructions Section -->


  
      <!-- Projects Section -->
      <section id="buletin" class="projects section light-background">
        <div class="container section-title" data-aos="fade-up">
          <h2>BULETIN</h2>
          <p>Buletin GSJA Logos merupakan media informasi mingguan yang berisi berita gereja, jadwal ibadah, renungan rohani, serta pengumuman kegiatan dan pelayanan yang berlangsung di GSJA Logos. </p>
        </div>
   
        <div class="container">
  
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
  
        
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
            <?php foreach ($result as $data): ?>
    <div class="col-lg-4 col-md-4 portfolio-item isotope-item filter-remodeling border m-3">
        <div class="portfolio-content h-100">
            <!-- Menampilkan gambar dari data -->
            <img src="uploads/<?= htmlspecialchars($data['gambar']) ?>" class="img-fluid p-3" alt="Gambar Buletin">
            <p class="text-center">Buletin Edisi <?= format($data['tanggal']) ?></p>
            <div class="portfolio-info">
                <!-- Menampilkan judul dan deskripsi buletin -->
                <h4>Buletin Edisi <?= format($data['tanggal']) ?></h4>
                
                <!-- Tautan untuk melihat detail -->
                <a href="uploads/<?= htmlspecialchars($data['gambar']) ?>" target="_blank" title="Lihat buletin" class="details-link">
                    <i class="bi bi-eye"></i>
                </a>
            </div>
        </div>
    </div><!-- End Portfolio Item -->
<?php endforeach; ?>

          
           
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
  
      </section><!-- /Projects Section -->
  
     <!-- Recent Blog Posts Section -->
     <section id="blog" class="recent-blog-posts section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Blog</h2>
  <p>Temukan renungan rohani, inspirasi iman, dan berita seputar kegiatan gereja di blog GSJA Logos Kotaraja. </p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-5">

    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="post-item position-relative h-100">

        <div class="post-img position-relative overflow-hidden">
          <img src="assets/img/blog/blog-1.png" class="img-fluid" alt="">
          <span class="post-date">12 Desember 2024</span>
        </div>

        <div class="post-content d-flex flex-column">

          <h3 class="post-title">Perayaan Natal GSJA Logos Kotaraja</h3>

          <div class="meta d-flex align-items-center">
            <div class="d-flex align-items-center">
              <i class="bi bi-person"></i> <span class="ps-2">Admin</span>
            </div>
            <span class="px-3 text-black-50">/</span>
            <div class="d-flex align-items-center">
              <i class="bi bi-folder2"></i> <span class="ps-2">Ibadah Natal</span>
            </div>
          </div>

          <hr>

          <a href="blog/perayaan-natal-gsja-logos-kotaraja-2024" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

        </div>

      </div>
    </div><!-- End post item -->

  </div>

</div>

</section><!-- /Recent Blog Posts Section -->
  


    <!-- Projects Section -->
    <section id="kontak" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>KONTAK</h2>
        <p>Sarana komunikasi yang memungkinkan jemaat atau individu berhubungan langsung dengan gereja atau organisasi untuk mendapatkan informasi lebih lanjut</p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>jl. Merak No. 34 A Kotaraja Jayapura</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>No. Telp</h3>
              <p>0852 6980 3092</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>gsja.logos.jayapura@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.7050829854898!2d140.66880687351076!3d-2.601898038476279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686cf50ee6ab6e7d%3A0x15f0d96d512745ed!2sGSJA%20LOGOS!5e0!3m2!1sid!2sid!4v1729576742966!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
          </div><!-- End Google Maps -->

      

        </div>

      </div>

    </section><!-- /Projects Section -->

   

 

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-12 col-md-12 footer-about">
          <a href="index" class="logo d-flex align-items-center">
            <span class="sitename">GSJA Logos Kotaraja</span>
          </a>
         
          </div>
         

          <div class="d-flex justify-content-between">
            <div class="">
              <p>jl. Merak No. 34 A Kotaraja</p>
              <p>Kota Jayapura, Provinsi Papua</p>
              <p class="mt-3"><strong>WA:</strong> <span>0852 6980 3092</span></p>
              <p><strong>Email:</strong> <span>gsja.logos.jayapura@gmail.com</span></p>
          </div>
  
          <div class="">
            <div class="social-links d-flex mt-4">
              <a target="_blank" href="https://www.instagram.com/gsja_logoskotaraja/"><i class="bi bi-instagram"></i></a>
              <a target="_blank" href="https://www.youtube.com/@gsjalogoskotarajajayapura6540"><i class="bi bi-youtube"></i></a>
            </div>
         
          </div>
    
        </div>

      

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">GSJA Logos Kotaraja</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
         by <a href="samuelbosawer.github.io">Samuel Bosawer</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>