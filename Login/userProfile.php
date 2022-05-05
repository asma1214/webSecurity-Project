
<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/bitcoin.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css?v=<?php echo time(); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="toggle-sidebar">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="../Home/home.php" class="logo d-flex align-items-center">
    <img src="assets/img/bitcoin.png" alt="">
    <span class="d-none d-lg-block">Bitmain</span>
  </a>

</div><!-- End Logo -->
<div class="col-8">  
  <div class="row">
  <!-- <div class="d-flex justify-content-center">
    <div class="col-3">
      <i class="bi bi-plus-circle-fill"></i>
  <a href="">Add new item</a>
  </div>
  <div class="col-3">
  <i class="bi bi-dash-circle-fill"></i>
  <a href="">Delete item</a>
  </div>
  </div> -->
</div>
</div>
<!-- find Extension of the file -->
<?php $file= "assets/img/userImg/" . $_SESSION['username'] . ".*";
                  $result = glob ($file ,GLOB_BRACE);
                  // save the path of the file in $r
                  $r =  $result[0];
                  // save the extension of the file 
                  $match = preg_split('/[\.]/', $r);
                  $ext = $match[1];
                  $fullPath = $r;
                  // echo $fullPath;
                  ?>
<nav class="header-nav">

  <ul class="d-flex align-items-center row">        

    <li class="nav-item dropdown pe-4">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <?php if(file_exists($r)){?>
                    <img src="<?php echo $fullPath ?>" alt="Profile" class="rounded-circle">    
                    <?php } else {?>
                      <img src="assets/img/image.png" alt="Profile" class="rounded-circle">
                      <?php } ?>
        <!-- <img src="assets/img/image.png" alt="Profile" class="rounded-circle"> -->
        <span class="d-none d-md-block dropdown-toggle ps-1 pe-3" ><?php echo $_SESSION['username'] ?></span>
      </a>
      <!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $_SESSION['name'] ?></h6>
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="destroy.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

 
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../Home/home.php">Home</a></li>
          <li class="breadcrumb-item active"><a href=<?php $_SERVER['PHP_SELF'] ?>>Profile</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            
            <?php if(file_exists($r)){?>
                        <img src="<?php echo $fullPath ?>" alt="Profile" class="rounded-circle">
                        <?php } else {?>
                          <img src="assets/img/image.png" alt="Profile" class="rounded-circle">
                          <?php } ?>
              <!-- <img src="assets/img/image.png" alt="Profile" class="rounded-circle"> -->
              <h2><?php echo $_SESSION['name'] ?></h2>
              <h3>User</h3>
             
            </div>
          </div>

        </div>
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-edit" id="profile-edit">


                  <!-- Profile Edit Form -->
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-5 col-lg-5">

                      <?php if(file_exists($r)){?>
                        <img src="<?php echo $fullPath ?>" alt="Profile" >
                        <?php } else {?>
                          <img src="assets/img/image.png" alt="Profile">
                          <?php } ?>
                      <div class="pt-3 row mb-2">
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                          <!-- <button class="btn btn-primary btn-sm bi bi-upload" type="file" name="upload"></button> -->
                          <input type="file" class="form-control" name="upload">
                          <br>
                          <button class="btn btn-primary btn-sm" type="submit" name="submit">Upload</button>
                        </form>   
                        
                      </div>
                    </div>
                  </div>
                  <form action="editProfile.php" method="POST">
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-5 col-lg-5">
                        <input name="Name" type="text" class="form-control" id="fullName" value=<?php echo $_SESSION['name']?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-5 col-lg-5">
                        <input name="email" type="text" class="form-control" id="email" value=<?php echo $_SESSION['email']?>>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="edit" >Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="add-item">

                </div>

               
                  <!-- Change Password Form -->
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <form action="editPass1.php" method="POST">
                    <div class="row mb-4">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="currentPass" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="newPass" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="rePass" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>
                    <div class="errorMsg col-12"><?php if(isset($Error)) echo $Error; ?></div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary"  value="submit" name="change">Change Passwor</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>