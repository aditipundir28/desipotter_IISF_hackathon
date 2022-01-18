<?php
    include('block.php');
    include('../mietproject.php');
    $i=$_SESSION['seller_mail'];
    $query="select * from tbl_seller where email='$i'";
            $result=mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Seller Profile</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/16.jpg" rel="icon">
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
a.list-group-item.list-group-item-action.active {
    background: #af601a;
    border-color: #af601a;
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
    ul.timeline > li:before {
        border: #e9b587;
    }
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

      <h1 class="logo"><a href="https://13.127.116.90/" style="text-shadow:2px 2px 5px #AF601A">DESI POTTERS</a></h1>
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
          <h2>Your Profile</h2>
           </div>
					<div class="row">
						<div class="col-md-3 col-xl-4">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Settings</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
          Account
        </a>
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
          Password
        </a>
									
									<a class="list-group-item list-group-item-action" href="../logout.php" role="tab">
          Logout
        </a>
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-8">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">

								

									<div class="card">
										<div class="card-header">
											
											<h5 class="card-title mb-0">Your Information</h5>
										</div>
										<div class="card-body">
											<form>
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputFirstName">First name</label>
														<input type="text" class="form-control" id="inputFirstName" value="<?php echo $row['name']?>">
													</div>
													<div class="form-group col-md-6">
														<label for="inputLastName">Mobile Number</label>
														<input type="mobile" class="form-control" id="inputMobile" value="<?php echo $row['mobile']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail4">Email</label>
													<input type="email" class="form-control" id="inputEmail4" value="<?php echo $row['email']?>">
												</div>
												<div class="form-group">
													<label for="inputAddress">Address</label>
													<input type="text" class="form-control" id="inputAddress" value="<?php echo $row['address']?>">
												</div>
												<div class="form-group">
													<label for="inputAddress2">Address 2</label>
													<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
												</div>
												<div class="form-row">
													<div class="form-group col-md-4">
														<label for="inputState">State</label>
														<select id="inputState" class="form-control">
                    <option selected>Choose State</option>
                    <option>...</option>
                  </select>
													</div>
													<div class="form-group col-md-4">
														<label for="inputcity">City</label>
														<select id="inputcity" class="form-control">
                    <option selected>Choose City</option>
                    <option>...</option>
                  </select>
													</div>
													<div class="form-group col-md-2">
														<label for="inputZip">Zip</label>
														<input type="text" class="form-control" id="inputZip">
													</div>
												</div>
												<button type="submit" class="btn btn-primary" style="background: #AF601A; border-color: #AF601A" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Save changes</button>
											</form>

										</div>
									</div>

								</div>
								<div class="tab-pane fade" id="password" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Password</h5>

											<form>
												<div class="form-group">
													<label for="inputPasswordCurrent">Current password</label>
													<input type="password" class="form-control" id="inputPasswordCurrent">
													<small><a href="#">Forgot your password?</a></small>
												</div>
												<div class="form-group">
													<label for="inputPasswordNew">New password</label>
													<input type="password" class="form-control" id="inputPasswordNew">
												</div>
												<div class="form-group">
													<label for="inputPasswordNew2">Verify password</label>
													<input type="password" class="form-control" id="inputPasswordNew2">
												</div>
												<button type="submit" class="btn btn-primary" style="background: #AF601A; border-color: #AF601A" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Save changes</button>
											</form>

										</div>
									</div>
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
          &copy; Copyright <strong><span>Desi Potters</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
          Designed by <a href="https://13.127.116.90">Desi Potters Pvt. Ltd.</a>
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