<?php 



$basepath = '/Home/';
$realBase = realpath($basepath);

$userpath = $basepath . $_SERVER['REQUEST_URI'];;
$realUserPath = realpath($userpath);

if ($realUserPath === false || strpos($realUserPath, $realBase) !== 0) {
    //Directory Traversal!
} else {
    //Good path!
}

include ('addUser.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
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
  <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">


</head>

<body>
<header id="header" class="d-flex flex-column justify-content-center">

<nav id="navbar" class="navbar nav-menu">
  <ul>
    <li><a href="../index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
    <li><a href="../index.php#about" class="nav-link scrollto"><i class="bx bx-question-mark"></i> <span>About</span></a></li>
    <li><a href="../Home/items.php" class="nav-link scrollto"><i class="bx bxl-bitcoin"></i> <span>Miners</span></a></li>
    <li><a href="../index.php#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
    <li><a href="../index.php#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
  </ul>
</nav> 
<!-- .nav-menu  -->

</header> 

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>
                  <br> 
                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 

                  <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" value="<?php echo htmlspecialchars($name);?>" required>
                      <div class="invalid-feedback">Please write your name </div>
                    </div>

                    <br> 

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" value="<?php echo htmlspecialchars($username);?>" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>
                    <div class="errorMsg col-12"><?php if(isset($usernameError)) echo $usernameError; ?></div>
                 
                     <br> 
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" value="<?php echo htmlspecialchars($email);?>" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
                    <div class="errorMsg col-12"><?php if(isset($emailError)) echo $emailError; ?></div>

                    <br> 

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="errorMsg col-12"><?php if(isset($uppError)) echo $uppError; 
                    else if(isset($numError)) echo $numError; 
                    else if(isset($specError)) echo $specError;
                    else if(isset($numError)) echo $numError;
                    else if(isset($lenError)) echo $lenError;
                    else if(isset($userError)) echo $userError;?></div>

                       <br>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="loginPage.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->


</body>

</html>