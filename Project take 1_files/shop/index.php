<?php
include('../mietproject.php');
$query  ="select * from states order by name ASC";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
?>
<?php
    
    session_start();
    
     if (isset($_POST["add"])){
         $idd=$_GET['id'];
         $queryp = "SELECT * FROM tbl_products_master where id ='$idd'";
                                        $resultp = mysqli_query($conn,$queryp);
                                        $rowp = mysqli_fetch_array($resultp);
                                        $nop=mysqli_num_rows($resultp); 
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $rowp["id"],
                    'item_name' => $rowp["product_name"],
                    'product_price' => $rowp["product_price"]-($rowp["product_price"]*$rowp["discount"]/100),
                    'product_desc' => $rowp["product_desc"],
                    
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location=""</script>';
            }else if (in_array($_GET["id"],$item_array_id)){
               
                    echo '<script>alert("Product already in cart")</script>';
                    echo '<script>window.location=""</script>';
            }
        }else{
            $item_array = array(
                    'product_id' => $rowp["id"],
                    'item_name' => $rowp["product_name"],
                    'product_price' => $rowp["product_price"]-($rowp["product_price"]*$rowp["discount"]/100),
                    'product_desc' => $rowp["product_desc"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location=""</script>';
                }
            }
        }
    }
    
    $no=0;
    foreach ($_SESSION["cart"] as $key => $value) {
        $no++;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Shop</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
<link rel="icon" href="../icon.png">

    <meta name="generator" content="Jekyll v4.1.1">
    
 <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">

    <style>
    img {
    height: 208px;
}
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
    <!-- Custom styles for this -->
    <link href="album.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/../assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="../index.php">DESI POTTERS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php#header">Home</a></li>
          <li><a href="../index.php#about">About</a></li>
          <li><a href="cat.php">Products</a></li>
          <li><a href="../index.php#contact">Contact</a></li>
         
        </ul>
      </nav><!-- .nav-menu -->
      <?php if(isset($_SESSION['user'])){?>
      <div class="nav-menu">
          <ul>
    <li class=" drop-down">
      <span class="get-started-btn scrollto">My Account <i class='bx bxs-chevron-down' ></i></span> 
      <ul >
              <li><a href="../user/index.php"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
              <li><a href="../user/profile.php"><i class='bx bx-user'></i> Profile</a></li>
              <li><a href="../user/order-history.php"><i class='bx bxs-cart'></i>Your Orders</a></li>
              <li><a href="../logout.php../"><i class='bx bx-log-out' ></i> Logout</a></li>
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
              <li><a href="../seller/index.php"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
              <li><a href="../seller/profile.php"><i class='bx bx-user'></i> Profile</a></li>
              <li><a href="../seller/product-listing.php"><i class='bx bx-upload'></i> List a Product</a></li>
              <li><a href="../seller/products.php"><i class='bx bx-list-ul'></i> View your Products</a></li>
              <li><a href="../seller/index.php"><i class='bx bx-transfer' ></i> Transactions</a></li>
              <li><a href="../logout.php"><i class='bx bx-log-out' ></i> Logout</a></li>
            </ul>
      </li>
    </ul>
    </div>
        <?
    }
    else{?>
    <a href="../login/login.php" class="get-started-btn scrollto">Sign in</a> 
      
    <?}?>
  </header><!-- End Header -->
<br>

  <main id="main">
    <section class="jumbotron text-center" style="margin-bottom:0px; margin-top: 61px;">
    <div class="container">
      <h1>Shop Products</h1>
      <p class="lead text-muted">Buy products from the following sections</p>
    </div>
  </section>


   <div class="row">
       <div class="small">
           <center><img src="../assets/img/diya2.jpg"></center>
       </div>
       <div class="large">
           <p style="text-align: justify;">A diya, diyo, deya, divaa, deepa, deepam, or deepak is an oil lamp usually made from clay, with a cotton wick dipped in ghee or vegetable oils. Diyas are native to the Indian subcontinent often used in Hindu, Sikh, Jain and Zoroastrian religious festivals.</p>
           <center><p>
               
           <a href="cat.php?q=2" class="btn btn-primary my-2" style="background: #AF601A; border-color: #AF601A" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Shop Now</a>
           </p></center>
       </div>
   </div>
   
      <div class="row">
       <div class="large">
           <p style="text-align: justify;">Matki (or matka) is a Hindi word used for an earthen pot. It is used all over the Indian subcontinent. It has been in use since ancient times and can be found in houses of every class. The thermal inertia in earthen pots keeps the meat tender and soft for long.</p>
           <center><p>
           <a href="cat.php?q=1" class="btn btn-primary my-2" style="background: #AF601A; border-color: #AF601A" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Shop Now</a>
           </p></center>
       </div>
       <div class="small">
           <center><img src="../assets/img/21.jpg"></center>
       </div>
   </div>
      <div class="row">
       <div class="small">
           <center><img src="../assets/img/plate.jpg"></center>
       </div>
       <div class="large">
           <p style="text-align: justify;">Earthen Utensils, however, are made of clay--which is organic and thus safe for the human body--and does not release any harmful toxins when exposed to higher temperatures. It is safe for people who are vegetarians, vegans, all organic, and that have certain dietary restrictions.</p>
           <center><p>
           <a href="cat.php?q=3" class="btn btn-primary my-2" style="background: #AF601A; border-color: #AF601A" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Shop Now</a>
           </p></center>
       </div>
   </div>
   </div>
      <div class="row">
       <div class="large">
           <p style="text-align: justify;">Earthen Home Decorative Items made by very fine Earthen. These can also be used in Resorts, Restaurants, Home And Office And Parks to. These can be offered in vibrant color combinations. These can also be used in Resorts, Restaurants and parks to add to the greenery.</p>
           <center><p>
           <a href="cat.php?q=4" class="btn btn-primary my-2" style="background: #AF601A; border-color: #AF601A" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Shop Now</a>
           </p></center>
       </div>
       <div class="small">
           <center><img src="../assets/img/deco.jpg"></center>
       </div>
   </div>
   
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Desi Potters</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            
          Designed by Desi Potters Pvt. Ltd.
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

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>