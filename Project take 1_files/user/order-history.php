<?php
    include('block.php');
    include('../mietproject.php');
    $i=$_SESSION['user_mail'];
    $query="select * from tbl_customer where email='$i'";
            $result=mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
            $cid=$row['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Your Orders</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="assets/img/16.jpg" rel="icon">
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
        .card{
            margin: 10px;
            transition: 0.3s;
        }
        .card:hover{
            box-shadow: 2px 2px 5px black;
        }
        .card .card-header{
            transition: 0.3s;
        }
        .card:hover .card-header{
            color:white;
            background: #e9b587;
        }
        
        .card .card-footer{
            color: #AF601A;
            background:white;
            transition: 0.3s;
        }
        .card:hover .card-footer{
            color: #784212;
            background: rgba(0,0,0,.03);
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
              <li><a href="index.php"><i class='bx bx-cart' ></i> Dashboard</a></li>
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

    
			<section style="margin-top:60px">
      <div class="container">
          <div class="section-title">
          <h2>Your Orders</h2>
           </div>
					<div class="row">
					 <?
								     $querys="select * from tbl_orders where c_id='$cid'";
                                     $results=mysqli_query($conn,$querys);
                                     $rows    = mysqli_fetch_array($results);
                                     $nos     = mysqli_num_rows($results);
                                     if($nos>0){
                                         while($nos>0){
                                             $pid=$rows['p_id'];
                                             $queryw="select * from tbl_products_master where id='$pid'";
                                             $resultw=mysqli_query($conn,$queryw);
                                             $roww    = mysqli_fetch_array($resultw);
                                     
								    ?>
						<div class="col-12 col-md-6 col-lg-12">
							<div class="card">
							    <div class="row">
						<div class="col-12 col-md-6 col-lg-12">
								<div class="card-header row" style="margin-left: 0;  margin-right: 0;">
									
						<div class="col-12 col-md-6 col-lg-3">
									<h5 class="card-title mb-0">Order Id #<?php echo $rows['order_id']?></h5>
									<div class="badge badge-warning my-2">On the way</div>
									</div>
						<div class="col-12 col-md-6 col-lg-4">
									
									<small class="card-title mb-0">Shipped to : <?php echo "\n".$rows['address']?></small>
									</div>
							<div class="col-12 col-md-6 col-lg-2">
									
									<small class="card-title mb-0">Order Total : </small><small style="white-space: pre-line;">₹<?php echo number_format($rows['amount'],2)?></small>
									</div>
										<div class="col-12 col-md-6 col-lg-3">
									
									<small class="card-title mb-0">Order date : <?php echo "\n". date('F j, Y', strtotime($rows['created_at']))?></small>
									</div>
								</div>
								</div>
							</div>
                            <div class="row">
						<div class="col-12 col-md-6 col-lg-12">
								<div class="card-footer row" style="margin-left: 0;  margin-right: 0;">
								    
                                <div class="col-12 col-md-6 col-lg-2">
								<img class="card-img-top" src="../<?php echo $roww['image']?>" alt="Unsplash">
                                </div>
                                <div class="col-12 col-md-6 col-lg-7">
								<div class="card-body px-1 pt-2">
									<p>Product Name : <?php echo $rows['p_name']?></p>
									<p>Quantity : <?php echo $rows['quantity']?></p>
									<p>Amount : ₹<?php echo $roww['price']?>/Unit</p>

								</div>
								
								</div>
                                <div class="col-12 col-md-6 col-lg-2">
								<div class="card-body px-1 pt-2">
									<button type="submit" class="btn btn-primary" style="background: rgb(175, 96, 26); margin-top:5px; width:100%; border-color: rgb(175, 96, 26);" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Order Details</button>
									<button type="submit" class="btn btn-primary" style="background: rgb(175, 96, 26); margin-top:5px; width:100%; border-color: rgb(175, 96, 26);" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Track Order </button>
									<button type="submit" class="btn btn-primary" style="background: rgb(175, 96, 26); margin-top:5px; width:100%; border-color: rgb(175, 96, 26);" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Cancel Order</button>
									
								</div>
								
								</div>
                                </div>
							</div>
							</div>
							</div>
						</div>
						<?
						$nos--;
                                     $rows    = mysqli_fetch_array($results);
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