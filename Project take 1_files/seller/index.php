<?php
    include('block.php');
    include('../mietproject.php');
    $i=$_SESSION['seller_mail'];
    $query="select * from tbl_seller where email='$i'";
            $result=mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
            $sid=$row['seller_id'];
            
                                     $timestamp = strtotime($row['created_at']);
                                     $date = date('d/m/Y', $timestamp);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Seller Account</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

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
              <li><a href="logout.php"><i class='bx bx-log-out' ></i> Logout</a></li>
            </ul>
      </li>
    </ul>
    </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

 <!--   <section class="inner-page">
      <div class="container">
        <div class="row">
						<div class="col-12 col-sm-3 col-xxl d-flex">
							<div class="card illustration flex-fill">
								<div class="card-body p-0 d-flex flex-fill">
									<div class="row no-gutters w-100">
										<div class="col-12">
											<div class="illustration-text p-3 m-1">
												<h4 class="illustration-text">Welcome Back,!</h4>
												<p class="mb-0">Seller Dashboard</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-3 col-xxl d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="media">
										<div class="media-body">
											<h3 class="mb-2"></h3>
											<p class="mb-2">Total Orders</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-3 col-xxl d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="media">
										<div class="media-body">
											<h3 class="mb-2">0</h3>
											<p class="mb-2">Pending Orders</p>
											
										</div>
										<div class="d-inline-block ml-3">
											<div class="stat">
												<i class="align-middle text-danger" data-feather="shopping-bag"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-3 col-xxl d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="media">
										<div class="media-body">
											<h3 class="mb-2"></h3>
											<p class="mb-2">User Since</p>
											
										</div>
										<div class="d-inline-block ml-3">
											<div class="stat">
												<i class="align-middle text-info" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
      </div>
    </section>-->
<section style=" margin-top: 60px; ">
    <div class="container">
        <div class="section-title">
          <h2>Account Summary</h2>
          </div>
        <div class="row">
           <div class="col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
								
									<h5 class="card-title mb-0">Information</h5>
								</div>
								<div class="card-body">

									<dl class="row">
										<dt class="col-4 col-xxl-3">Seller Name</dt>
										<dd class="col-8 col-xxl-9"><?php echo $row['name']?>
										</dd>
                                        	<dt class="col-4 col-xxl-3">Mobile</dt>
										<dd class="col-8 col-xxl-9">
											<p class="mb-1"><?php echo $row['mobile']?></p>
										</dd>
										<dt class="col-4 col-xxl-3 mb-0">Email</dt>
										<dd class="col-8 col-xxl-9 mb-0">
											<p class="mb-0"><?php echo $row['email']?></p>
										</dd>
									
									</dl>

									<hr>

									<dl class="row">
									    	<dt class="col-4 col-xxl-3 mb-0">Address</dt>
										<dd class="col-8 col-xxl-9 mb-0">
										<?php echo $row['address']?>
										</dd>
										<dt class="col-4 col-xxl-3">District</dt>
										<dd class="col-8 col-xxl-9">
											<p class="mb-1"><?php echo $row['city']?></p>
										</dd>

										<dt class="col-4 col-xxl-3">State</dt>
										<dd class="col-8 col-xxl-9">
											<p class="mb-1"><?php echo $row['state']?></p>
										</dd>

									</dl>

									<hr>

									<dl class="row">
									    
										<dt class="col-4 col-xxl-3 mb-0">Joined On</dt>
										<dd class="col-8 col-xxl-9 mb-0">
											<p class="mb-0"><?php echo date('F j, Y', $timestamp)?></p>
										</dd>
										<dt class="col-4 col-xxl-3 mb-0">Revenue</dt>
										<dd class="col-8 col-xxl-9 mb-0">
											<p class="mb-0">₹ <?php echo $row['revenue']?></p>
										</dd>
									</dl>

									<hr>

									<dl class="row mb-1">
										
									
										<dt class="col-4 col-xxl-3">Status</dt>
										<dd class="col-8 col-xxl-9">
											<span class="badge badge-info mb-1">Active</span>
										</dd>
									</dl>
								</div>
							</div>

							
						</div>
						<div class="col-12 col-lg-6 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<span class="badge badge-info float-right">Today</span>
									<h5 class="card-title mb-0">Daily feed</h5>
								</div>
								<div class="card-body">
								    <?
								     $querys="select * from tbl_orders where seller_id='$sid'";
                                     $results=mysqli_query($conn,$querys);
                                     $rows    = mysqli_fetch_array($results);
                                     $nos     = mysqli_num_rows($results);
                                     $timestamp = strtotime($row['created_at']);
                                     $date = date('H:i', $timestamp);
                                     if($nos>0){
                                         while($nos>0){
								    ?>
									<div class="media">
										<div class="media-body">
											<small class="float-right text-navy"><?php echo $rows['quantity'] ?> Qty.</small>
											<strong><?php echo $rows['c_name']?></strong> Ordered <strong><?php echo $rows['p_name']?></strong><br>
											<small class="text-muted">Today <?php echo $date?> pm</small><br>

										</div>
									</div>

									<hr>
									<?
									$nos--;
                                     $rows    = mysqli_fetch_array($results);
                                         }
									}
									else{
									    
									?>
									<div class="media">
										<div class="media-body">
											<strong>No Recent Orders</strong><br>

										</div>
									</div>

									<hr>
									<?}?>
									<a href="#" class="btn btn-primary btn-block" style="background: #AF601A; border-color: #AF601A" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Load more</a>
								</div>
							</div>
						</div>
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