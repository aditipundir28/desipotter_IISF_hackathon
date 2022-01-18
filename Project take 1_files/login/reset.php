<?php
include('../mietproject.php');
session_start();
if(isset($_SESSION['user'])||isset($_SESSION['seller'])){
    header('location:../../index.php');
}
else{
    session_unset();
session_destroy();
}
if(isset($_POST['login']))
    {
       if(empty($_POST['email']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from tbl_customer where email='".$_POST['email']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
            if($no>0)
            {
                 
                if (empty($_SESSION['user'])) {
                    
                  session_start();
                  
                  $_SESSION['user'] = 1;
                    } else {
                     session_start();
                     $_SESSION['user']++;
                    }
                    $p="location:../user/index.php";
                     session_start();
                     $_SESSION['user_mail'] = $_POST['email'];
                     header($p);
            }
            else
            {
                echo"<script> alert(\"Invalid details \");";
                echo"</script>";
            }
       }
    }
    
    else if(isset($_POST['s_login']))
    {
       if(empty($_POST['email']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from tbl_seller where email='".$_POST['email']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
            if($no>0)
            {
                 
                if (empty($_SESSION['seller'])) {
                  session_start();
                  $_SESSION['seller'] = 1;
                    } else {
                     session_start();
                     $_SESSION['seller']++;
                    }
                    $p="location:../seller/index.php";
                     session_start();
                     $_SESSION['seller_mail'] = $_POST['email'];
                     header($p);
            }
            else
            {
                echo"<script> alert(\"Invalid details \");";
                echo"</script>";
            }
       }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reset Page</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
    <link rel="stylesheet" href="style.css">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


<link href="login/style.css" rel="stylesheet">

    
    <script type = "text/javascript" src = "particles.js"></script>
    <script type = "text/javascript" src = "app.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 
</head>


<body>
    
    <style>
.loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 200%;
            z-index: 9999;
            background-color: #ffffffcf;
        }
        .loader img{
            position: relative;
            top: 20%;
        }
</style>

<div class="loader" ><img src="../load.gif"></div>

<script>
        setTimeout(function() 
    {
        //display loader on page load 
        $('.loader').fadeOut();
    }, 1000);

</script>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">DESI POTTERS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../index.php#header">Home</a></li>
          <li><a href="../index.php#about">About</a></li>
          <li><a href="../shop">Shop</a></li>
          <li><a href="../index.php#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      

    </div>
  </header><!-- End Header -->

  <main id="main">
    <script type = "text/javascript" src = "particles.js"></script>
    <script type = "text/javascript" src = "app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bubbly-bg@0.2.3/dist/bubbly-bg.js"></script>
    <script>bubbly({
    colorStart: '#4e2500',
    colorStop: '#e9a265',
    bubbleFunc:() => `hsla(0, 100%, 50%, ${Math.random() * 0.25})`
  });
  </script>
    <section class="inner-page" >
      <br>
          <br><br>
      <div class="col-md-3 order-md-1" style=" margin-left: auto; margin-right: auto; background: white;padding: 24px;border-radius: 18px;">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation" style="     margin-left: auto; ">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Customer</a>
  </li>
  <li class="nav-item" role="presentation" style="margin-right: auto; ">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Seller</a>
  </li>
 
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div id="login"> 
      <div class="section-title">
          <br>
          <h2>Reset Password</h2>
           </div>
      <form class="needs-validation" novalidate method="post" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="abc@xyz.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" style="background: #AF601A; border-color: #AF601A;"  onMouseOver="this.style.background='#784212'" onMouseOut="this.style.background='#AF601A'" name="login" type="submit">Reset Password</button>
      </form><br>
       
       </div> 
      
      
    </div>
    
      
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
         
      <div id="s_login"> 
      <div class="section-title">
          <br>
          <h2>Reset Password Seller</h2>
           </div>
      <form class="needs-validation" novalidate method="post" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="abc@xyz.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>
        
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" style="background: #AF601A; border-color: #AF601A;" onMouseOver="this.style.background='#784212'" onMouseOut="this.style.background='#AF601A'" name="s_login" type="submit">Reset Password</button>
      </form><br>
       
       </div> 
        
      </div>
</div>
      </div>

    </section>
    
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="form-validation.js"></script>


<script>
function clck() {
  document.getElementById("login").style.display = "none";
  document.getElementById("register").style.display = "";
}
function log() {
  document.getElementById("register").style.display = "none";
  document.getElementById("login").style.display = "";
}
function s_clck() {
  document.getElementById("s_login").style.display = "none";
  document.getElementById("s_register").style.display = "";
}
function s_log() {
  document.getElementById("s_register").style.display = "none";
  document.getElementById("s_login").style.display = "";
}
</script>
    <script type = "text/javascript" src = "particles.js"></script>
    <script type = "text/javascript" src = "app.js"></script>
</body>

</html>