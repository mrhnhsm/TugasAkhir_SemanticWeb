<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Makanan Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="icon1.png" rel="icon">
  <link href="icon1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.php"><span>TRAVELONG</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Beranda</a></li>
            <li><a class="nav-link scrollto" href="index.php">Tentang</a></li>
            <li><a class="nav-link scrollto" href="index.php">Pelayanan</a></li>
            <li><a class="nav-link scrollto " href="index.php">Daftar Hotel</a></li>
            <li><a class="nav-link scrollto" href="index.php">Tim Kerja</a></li>
            <li><a class="nav-link scrollto" href="index.php">Kontak</a></li>
            <li><a class="getstarted scrollto" href="daftar_makanan.php">Daftar Makanan Di Indonesia</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
          
        <figure class="text-center">
            <blockquote class="blockquote">
               <p class="h1">Welcome To Indonesia</p>
            </blockquote>
        <figcaption class="blockquote-footer">
    Makanan-Makanan Khas <cite title="Source Title">Indonesia</cite>
  </figcaption>
</figure>

      </div>
    </section><!-- End Breadcrumbs -->
      
      <section id="portfolio" class="portfolio">
      <div class="container">
          
           <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <!-- Awal Query Makanan -->
          <?php
            require_once("../sparqllib.php");
          
            $db = sparql_connect("http://localhost:3030/hotel/sparql");
            if(!$db) {print sparql_errno() . ": " . sparql_error(). "\n"; exit;}
          
            $sparql = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
            PREFIX dc: <https://purl.org/dc/elements/1.1>
            
            SELECT ?link ?title ?province ?city ?type ?Image ?description
            WHERE{
            ?subject dc:link ?link .
            ?subject dc:title ?title .
            ?subject dc:province ?province .
            ?subject dc:city ?city .
            ?subject dc:type ?type .
            ?subject dc:Image ?Image .
            ?subject dc:description ?description .
            }";
          
          $result = sparql_query($sparql);
          $fields = sparql_field_array($result);
          
          while($row = sparql_fetch_array($result))
          {
          print "<div class='col-lg-4 col-md-6 portfolio-item filter-medan'>";
                    print "<div class='portfolio-wrap'>";
                    print "<img src='$row[Image]' width='375' height='225'  alt=''>";
                    print"<div class='portfolio-info'>";
                    print"<h4>$row[title]</h4>";
                    print"<p>$row[province],$row[city]</p>";
                    print"<p>$row[type]</p>";
                    print"<div class='portfolio-links'>";
                    print"<a href='$row[Image]' data-gallery='portfolioGallery' class='portfolio-lightbox' title='$row[title] <br> $row[description]'>";
                    print"<i class='bx bx-plus'>";
                    print"</i>";
                    print"</a>";
                    print"<a href='$row[link]' title='More Details'><i class='bx bx-link'></i></a>";
                    print"</div>";
                    print"</div>";
                    print"</div>";
                    print"</div>";
          }
          
          ?>
          <!-- Akhir Query Makanan -->
          </div>
          </div>
      </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Travelong</h3>
            <p>
             Gedung C Fasilkom-TI, Universitas Sumatera Utara, Jl. Alumni No.3, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20155 <br>
              <strong>Telepon:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> travelong@gmail.com<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Travelong</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>