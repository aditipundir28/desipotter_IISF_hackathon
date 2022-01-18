<?php
    include('block.php');
    include('../mietproject.php');
    $i=$_SESSION['user_mail'];
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

  <title>User Dashboard</title>
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
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">


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
      
	::-webkit-scrollbar {
	  width: 3px;
	}

	::-webkit-scrollbar-thumb {
	  background: #888; 
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
        ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 55px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #e9b587;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
        
</style>
<style>
    .col, .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col-auto, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-auto, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md-auto, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-auto {
    width: 100%;
    padding:-1px;    
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
              <li><a href="order-history.php"><i class='bx bx-cart' ></i> Your Orders</a></li>
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
          <h2>User Dashboard</h2>
           </div>
        <div class="row">
						<div class="col-12 col-sm-3 col-xxl d-flex">
							<div class="card illustration flex-fill" onmouseover="this.style.background='#AF601A'; this.style.color='#FFFFFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#784212'">
								<div class="card-body p-0 d-flex flex-fill">
									<div class="row no-gutters w-100">
										<div class="col-12">
											<div class="illustration-text p-3 m-1">
												<h4 class="illustration-text" >Welcome Back, <?php echo $row['name']?>!</h4>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-3 col-xxl d-flex">
							<div class="card flex-fill" onmouseover="this.style.background='#AF601A'; this.style.color='#FFFFFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#784212'">
								<div class="card-body py-4">
									<div class="media">
										<div class="media-body">
											<h3 class="mb-2"><?php echo $row['orders']?></h3>
											<p class="mb-2">Total Orders</p>
										</div>
										<div class="d-inline-block ml-3" style=" border-radius: 22px; background: #00000029;">
											<div class="stat">
											    <i class='bx bxs-shopping-bag bx-md' ></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-3 col-xxl d-flex">
							<div class="card flex-fill" onmouseover="this.style.background='#AF601A'; this.style.color='#FFFFFF'" onmouseout="this.style.background='#FFFFFF';this.style.color='#784212'">
								<div class="card-body py-4">
									<div class="media">
										<div class="media-body">
											<h3 class="mb-2">0</h3>
											<p class="mb-2">Pending Orders</p>
											
										</div>
										<div class="d-inline-block ml-3" style=" border-radius: 22px; background: #00000029;">
											<div class="stat">
												<i class='bx bxs-truck bx-md' style=" padding-left: 3px; "></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					</div>
					</section>
					<section>
					    <div class="container">
					        <div class="section-title">
          <h2>Recent Order Details</h2>
           </div>
					<div class="row">
					    <div class="col-12 col-md-5 col-lg-4 col-xxl-2 d-flex" style=" padding-top: 2px; ">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Order Details</a>
												<a class="dropdown-item" href="#">Track Order</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Order Activity</h5>
								</div>
								<div class="card-body">
									<ul class="timeline m-3">
										<li class="timeline-item">
											<strong>Delivered</strong>
											<p class="text-sm">2 hours ago</p>
										</li>
										<li class="timeline-item">
											<strong>Pick Up</strong>
											<p class="text-sm">6 hours ago</p>
										</li>
										<li class="timeline-item">
											<strong>In Transit</strong>
											<p class="text-sm">1 days ago</p>
										</li>
										<li class="timeline-item">
											<strong>Dispatched</strong>
											<p class="text-sm">3 days ago</p>
										</li>
										<li class="timeline-item">
											<strong>Order Received</strong>
											<p class="text-sm">4 days ago</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card flex-fill">
						<div class="card-header">
							<div class="card-actions float-right">
								<div class="dropdown show">
									<a href="#" data-toggle="dropdown" data-display="static">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
        </a>

									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Your Orders</a>
										<a class="dropdown-item" href="#">Pay</a>
										<a class="dropdown-item" href="#">Remove product</a>
									</div>
								</div>
							</div>
							<h5 class="card-title mb-0">Recent Orders</h5>
						</div>
						<div id="datatables-dashboard-products_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12" style=" padding-top: 0px; "><table id="datatables-dashboard-products" class="table table-striped my-0 dataTable no-footer" role="grid" aria-describedby="datatables-dashboard-products_info">
							<thead>
								<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Order Id</th><th class="d-none d-xl-table-cell sorting" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-label="Tech: activate to sort column ascending">Payment Status</th><th class="d-none d-xl-table-cell sorting" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-label="License: activate to sort column ascending">Product Name</th><th class="d-none d-xl-table-cell sorting" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-label="Tickets: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="datatables-dashboard-products" rowspan="1" colspan="1" aria-label="Sales: activate to sort column ascending">Status</th></tr>
							</thead>
							<tbody>
								
								
								
								
								
								
								
								
								
							<tr role="row" class="odd">
									<td class="sorting_1">#186573</td>
									<td><span class="badge badge-danger">Not Done</span></td>
									<td class="d-none d-xl-table-cell">Single license</td>
									<td class="d-none d-xl-table-cell">80</td>
									<td class="d-none d-xl-table-cell">150</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">#186574</td>
									<td><span class="badge badge-info">Unavailable</span></td>
									<td class="d-none d-xl-table-cell">Single license</td>
									<td class="d-none d-xl-table-cell">60</td>
									<td class="d-none d-xl-table-cell">610</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">#186575</td>
									<td><span class="badge badge-success">Done</span></td>
									<td class="d-none d-xl-table-cell">Single license</td>
									<td class="d-none d-xl-table-cell">50</td>
									<td class="d-none d-xl-table-cell">720</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">#186576</td>
									<td><span class="badge badge-warning">Pending</span></td>
									<td class="d-none d-xl-table-cell">Single license</td>
									<td class="d-none d-xl-table-cell">30</td>
									<td class="d-none d-xl-table-cell">280</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">#186577</td>
									<td><span class="badge badge-info">Unavailable</span></td>
									<td class="d-none d-xl-table-cell">Single license</td>
									<td class="d-none d-xl-table-cell">10</td>
									<td class="d-none d-xl-table-cell">480</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">#186578</td>
									<td><span class="badge badge-warning">Pending</span></td>
									<td class="d-none d-xl-table-cell">Single license</td>
									<td class="d-none d-xl-table-cell">40</td>
									<td class="d-none d-xl-table-cell">280</td>
								</tr></tbody>
						</table></div></div></div>
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