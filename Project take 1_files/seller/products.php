<?php
    include('block.php');
    include('../mietproject.php');
    $i=$_SESSION['seller_mail'];
    $query="select * from tbl_customer where email='$i'";
            $result=mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Seller Dashboard</title>
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
          <li><a href="../shop">Shop</a></li>
          <li><a href="../index.php#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="nav-menu">
          <ul>
    <li class=" drop-down">
      <span class="get-started-btn scrollto">My Account <i class='bx bxs-chevron-down' ></i></span> 
      
      <ul >
              <li><a href="index.php"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
              <li><a href="profile.php"><i class='bx bx-user'></i> Profile</a></li>
              <li><a href="product-listing.php"><i class='bx bx-upload'></i> List a Product</a></li>
              <li><a href="products.php"><i class='bx bx-list-ul'></i> View your Products</a></li>
              <li><a href="#"><i class='bx bx-transfer' ></i> Transactions</a></li>
              <li><a href="../logout.php"><i class='bx bx-log-out' ></i> Logout</a></li>
            </ul>
      </li>
    </ul>
    </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

<section></section>
    
<section>
    <div class="container">
        <div class="section-title">
          <h2>Your Listed Products</h2>
          </div>
        <div class="row">
            <?php
            $id="SL0001";
            $s=0;
            $query="select * from tbl_products_master where seller_id='$id' and status='$s'";
            $result=mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
            
            if($no>0)
            {
                while($no>0){
               
            ?>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="card">

								<img class="card-img-top" src="../<?php echo $row['image']?>" alt="Unsplash" style="height: 180px;">

								<div class="card-header px-4 pt-4">
								
									<h5 class="card-title mb-0"><?php echo $row['name']?></h5>
									<?php if($row['level']==3){?>   
									<div class="badge badge-success my-2">Approved</div>
									<?}else if($row['level']<=3){?>
									<div class="badge badge-warning my-2">In progress</div>
									<?}else if($row['level']==4){?>
									<div class="badge badge-danger my-2">Declined</div>
									<?}?>
								</div>
								<div class="card-body px-4 pt-2">
								<?php if($row['status']==1){?>    
									<p>Product Declined <i class='bx bxs-error'></i></p>
									<?}
									else{
									if($row['level']==0){
									?>
									<p>District Level - Pending <i class='bx bx-time'></i></p>
									<? }else if($row['level']>=1){
									?>
									<p>District Level - Approved <i class='bx bx-check' ></i></p>
									<? } if($row['level']==1){
									?>
									<p>State Level - Pending  <i class='bx bx-time'></i></p>
									<? }else if($row['level']>=2){
									?>
									<p>State Level - Approved <i class='bx bx-check' ></i></p>
									<? }if($row['level']==2){
									?>
									<p>Ministry Level - Pending  <i class='bx bx-time'></i></p>
									<? }else if($row['level']==3){
									?>
									<p>Ministry Level - Approved <i class='bx bx-check' ></i>
									
                               
									</p><?}}?>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item px-4 pb-4">
									    <?php if($row['level']==3){?>
										<p class="mb-2 font-weight-bold">Product Approved for Sale <i class='bx bxs-check-circle'></i></p>
										<div class="progress progress-sm">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo number_format($row['level']/3*100,0)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($row['level']/3*100,0)?>%;     background: #22b422;">
											</div>
										</div>
										<?}
										else{?>
										<p class="mb-2 font-weight-bold">Progress <span class="float-right"><?php echo number_format($row['level']/3*100,0)?>%</span></p>
										<div class="progress progress-sm">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo number_format($row['level']/3*100,0)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($row['level']/3*100,0)?>%;">
											</div>
										</div>
										<?}?>
									</li>
								</ul>
							</div>
						</div>
						<?
						     $no--;
            $row    = mysqli_fetch_array($result);
                }
                
            }
						?>
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
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
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

</body>

</html>