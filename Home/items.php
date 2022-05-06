<?php

session_start();

include('itemQ.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>miners</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/bitcoin6.png" rel="icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/style2.css" rel="stylesheet"> -->

  <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">
    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <?php if($_SESSION['Pr'] == 'u'){ ?>
        <li><a href="home.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="../Login/userProfile.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Account</span></a></li> 
        <li><a href="<?php $_SERVER['PHP_SELF'] ?>" class="nav-link scrollto"><i class="bx bxl-bitcoin"></i> <span>Miners</span></a></li>
        <li><a href="home.php#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="home.php#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> 
        <?php } else {?>
          <li><a href="home.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="../Login/adminProfile.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Account</span></a></li> 
        <li><a href="<?php $_SERVER['PHP_SELF'] ?>" class="nav-link scrollto"><i class="bx bxl-bitcoin"></i> <span>Miners</span></a></li>
        <li><a href="home.php#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="home.php#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> 
        <?php } ?>
        </ul>
    </nav>

  </header> 
  <!-- End Header -->


  <main id="main">

    
    <!-- ======= Miners Section ======= -->




    <section id="miners" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Miners</h2>
          <p>Want to start Mining in Saudi Arabia, Use our world class mining facility.</p>
        </div>

        <div class="search-bar">
          <form class="search-form d-flex align-items-center searchBar" action="items.php?page=search1.php" name="result" method="POST" >
            <input type="search" name="search" required>
            <i class="fa fa-search"></i>
          </form>
          <?php if(isset($_POST['search'])){

                // include($_GET['page']);

            $file = $_GET['page'];
            $file = str_replace( array( "../", "..\\" ), "", $file );
            include($file);

              }
       ?>
    


    


<?php foreach($items as $item) : ?>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="assets/img/miners/<?php echo $item['img']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $item['itemName']; ?></h4>
                <div class="portfolio-links">



                  <a href="assets/img/miners/<?php echo $item['img']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $item['itemName']; ?>"><i class="bx bx-plus"></i></a>
		    <a class="portfolio-details-lightbox" href="details.php?id=<?php echo $item['id']; ?>" class="portfolio-details-lightbox" data-glightbox="type: external" title="Miner Details"><i class="bx bx-link"></i></a>


                </div>
              </div>
            </div>
          </div>
<?php endforeach; ?>	   
</div>
</div>
    </section><!-- End Miners Section -->

  </main><!-- End #main -->
  

  <!-- ======= Footer ======= -->
  <footer id="footer">
  <?php

include('include/footer.php');

?>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>