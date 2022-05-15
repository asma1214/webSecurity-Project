<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bitmain</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Home/assets/img/bitcoin6.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Home/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="Home/assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">
    
    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="home.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-question-mark"></i> <span>About</span></a></li>
        <li><a href="Home/items.php" class="nav-link scrollto"><i class="bx bxl-bitcoin"></i> <span>Miners</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav> 
    <!-- .nav-menu  -->

  </header> 
  <!-- End Header -->

  <!-- htmlspecialchars($_POST['email']) -->
  <header id="header2" class="d-flex flex-row justify-content-center">

    <nav id="navbar" class="navbar nav-menu1">
  <ul>
    <?php if(isset($_SESSION['userId'])){
            if($_SESSION['Pr'] == 'u'){?>
    <li><a href="Login/userProfile.php" class="nav-link scrollto"><i class=" bx bxs-user-account"></i> <span><?php echo "Hi " . $_SESSION['name'] . " !"?></span></a></li>
    <li><a href="Login/destroy.php" name="logout" class="nav-link scrollto"><i class=" bx bx-user-plus"></i> <span>Log out</span></a></li>
    <?php }else {?>
      <li><a href="Login/adminProfile.php" class="nav-link scrollto"><i class=" bx bxs-user"></i> <span><?php echo "Hi Admin " . $_SESSION['name'] . " !"?></span></a></li>
    <li><a href="Login/destroy.php" name="logout" class="nav-link scrollto"><i class=" bx bx-user-plus"></i> <span>Log out</span></a></li>
  <?php }} else{?>
    <li><a href="Login/loginPage.php" class="nav-link scrollto"><i class=" bx bx-log-in-circle"></i> <span>Login</span></a></li>
    <li><a href="Login/registerPage.php" class="nav-link scrollto"><i class=" bx bx-user-plus"></i> <span>Sign up</span></a></li>
 <?php }?>
  </ul>
</nav>
<!-- .nav-menu -->

</header>
<!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>BITMAIN</h1>
      <p><span class="typed" data-typed-items="Mine , invest , Earn!"></span></p>
      
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>BITMAIN is the world's leading provide of digital currency mining servers through many brands  like ANTMINER, which has long maintained a global market share and leading position in technology, serving customers across over 100 countries and regions. Also, provide collection of miners from many companies.</p>
        </div>

        

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Miners</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Supplier</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          
        </div>

        <div class="row">

        

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4> <a href=""> Miners from many brands</a></h4>
              <p>Provide miner's Details frpm 5 brands</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Want to start Mining in KSA</a></h4>
              <p>Use our world class mining facility.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Articles</a></h4>
              <p>Provide articles about miners </p>
            </div>
          </div>


        

        

      </div>
    </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Collection</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="Home/assets/img/homepic/h1.png" class="testimonial-img" alt="">
                <h3>Bitmain</h3>
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Collection of miners from many companies.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="Home/assets/img/homepic/h2.png" class="testimonial-img" alt="">
                <h3>Whatsminer</h3>
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Collection of miners from many companies.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="Home/assets/img/homepic/h3.png" class="testimonial-img" alt="">
                <h3>Goldshell</h3>
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Collection of miners from many companies.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="Home/assets/img/homepic/h4.png" class="testimonial-img" alt="">
                <h3>Avalon</h3>
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Collection of miners from many companies.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/homepic/h5.png" class="testimonial-img" alt="">
                <h3>Nvidia</h3>
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Collection of miners from many companies.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Eastern Province, Kingdom of Saudi Arabia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>minerminers84@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+966 548625121</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include 'Home/Include/footer.php'; ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Home/assets/vendor/purecounter/purecounter.js"></script>
  <script src="Home/assets/vendor/aos/aos.js"></script>
  <script src="Home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Home/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Home/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Home/assets/vendor/typed.js/typed.min.js"></script>
  <script src="Home/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="Home/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Home/assets/js/main.js"></script>

</body>

</html>