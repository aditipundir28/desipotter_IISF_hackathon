<?
include('../mietproject.php');
include('block.php');
if( isset($_POST['add']) ){
        $name=$_POST['name'];
        $des=$_POST['desc'];
        $price=$_POST['price'];
        $dis=$_POST['discount'];
        $path = "https://13.127.116.90/seller/images/";
        $path = $path . basename( $_FILES['images']['name']);
        move_uploaded_file($_FILES['images']['tmp_name'], $path);
        $img_name= "https://13.127.116.90/seller/images/".basename( $_FILES['images']['name']);
        mysqli_query($conn, "INSERT INTO tbl_products_master (name,price,p_desc,discount,image) values ('$name','$price','$des','$dis','$img_name')");
        
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Listing</title>
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
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
            height: 100%;
            z-index: 9999;
            background-color: #ffffffcf;
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

      <h1 class="logo"><a href="../index.php">DESI POTTERS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../index.php#header">Home</a></li>
          <li><a href="../index.php#about">About</a></li>
          <li><a href="../index.php#services">Shop</a></li>
          <li><a href="../index.php#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="nav-menu">
          <ul>
    <li class=" drop-down">
      <span class="get-started-btn scrollto">My Account <i class='bx bxs-chevron-down' ></i></span> 
      <ul >
              <li><a href="index.php"><i class='bx bx-user'></i> Profile</a></li>
              <li><a href="product-listing.php"><i class='bx bx-upload'></i> List a Product</a></li>
              <li><a href="products.php"><i class='bx bx-list-ul'></i> View your Products</a></li>
              <li><a href="order-history.php"><i class='bx bx-transfer' ></i> Transactions</a></li>
              <li><a href="../logout.php"><i class='bx bx-log-out' ></i> Logout</a></li>
            </ul>
      </li>
    </ul>
    </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

<section></section>
    <section class="inner-page">
      <div class="container">
          <div class="section-title">
          <h2>Product Form</h2>
           </div>
        <div class="col-md-8 order-md-1" style=" margin-left: auto; margin-right: auto; ">
      <form class="needs-validation" novalidate method="post" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="product_name">Product Name</label>
          <input type="text" class="form-control" name="name" id="address" placeholder="Pottery.." required>
          <div class="invalid-feedback">
            Please enter a valid product name.
          </div>
        </div>
            
        <div class="mb-3">
          <label for="file">Upload Image</label>
          <input type="file" class="form-control-file" name="image[]" id="image" required multiple>
          <div class="invalid-feedback">
            Please upload a valid image.
          </div>
        </div>

          
        <div class="mb-3">
          <label for="price">Price </label>
          <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text">₹</span>
            </div>
          <input type="number" class="form-control" name="price" id="price" placeholder="0.00" required>
          <div class="invalid-feedback">
            Please enter a valid amount.
          </div>
          </div>
          </div>
        
        <div class="mb-3">
          <label for="discount">Discount </label>
        <div class="input-group">
                <input type="number" class="form-control" name="discount" placeholder="0.00" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                         <span class="input-group-text" id="basic-addon2">%</span>
                </div>
        </div>
        </div>


        <div class="mb-3">
          <label for="p_desc">Product Description </label>
        <div class="input-group">
            <textarea class="form-control" name="desc" aria-label="With textarea"></textarea>
        </div> 
        </div>
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" style="background: #AF601A; border-color: #AF601A;" name="add" type="submit">Submit</button>
      </form>
    </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Resi</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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

</body>

</html>