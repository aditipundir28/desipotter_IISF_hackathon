<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DESI POTTERS</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides{
    min-height:80%;
    min-width:80%;
    height:auto;
    width:auto;
    position:absolute;
    left:-100%; right:-100%;
    margin:auto;
    display:none;
}
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between" >

      <h1 class="logo"><a href="index.html">DESI POTTERS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Products</a></li>
          <li><a href="#contact">Contact</a></li>
         
        </ul>
      </nav><!-- .nav-menu -->
      <?php if(isset($_SESSION['user'])){?>
      <div class="nav-menu">
          <ul>
    <li class=" drop-down">
      <span class="get-started-btn scrollto">My Account <i class='bx bxs-chevron-down' ></i></span> 
      <ul >
              <li><a href="user/index.php"><i class='bx bx-user'></i> Profile</a></li>
              <li><a href="user/order-history.php"><i class='bx bxs-cart' ></i> Orders</a></li>
              <li><a href="logout.php"><i class='bx bx-log-out' ></i> Logout</a></li>
            </ul>
      </li>
    </ul>
    </div>
    <?}
    else if(isset($_SESSION['seller'])){
        ?>
        
        <div class="nav-menu">
          <ul>
    <li class=" drop-down">
      <span class="get-started-btn scrollto">My Account <i class='bx bxs-chevron-down' ></i></span> 
      <ul >
              <li><a href="seller/profile.php"><i class='bx bx-user'></i> Profile</a></li>
              <li><a href="seller/product-listing.php"><i class='bx bx-upload'></i> List a Product</a></li>
              <li><a href="seller/products.php"><i class='bx bx-list-ul'></i> View your Products</a></li>
              <li><a href="#"><i class='bx bx-transfer' ></i> Transactions</a></li>
              <li><a href="logout.php"><i class='bx bx-log-out' ></i> Logout</a></li>
            </ul>
      </li>
    </ul>
    </div>
        <?
    }
    else{?>
    <a href="login/login.php" class="get-started-btn scrollto">Sign in</a> 
      
    <?}?>
  </header>

<div class="w3-content w3-section" style="max-width:60%; max-height: 90%">
  <img class="mySlides" src="assets/img/home01.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/home02.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/home03.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/home04.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/home05.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/home06.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/home07.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/home08.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>