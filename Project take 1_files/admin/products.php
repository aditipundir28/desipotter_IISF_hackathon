<?php
include('../mietproject.php');
include('block.php');
session_start();
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

      <h1 class="logo"><a href="#">DESI POTTERS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      

      <div class="nav-menu">
          <ul>
    <li class=" drop-down">
      <span class="get-started-btn scrollto">My Account <i class='bx bxs-chevron-down' ></i></span> 
      <ul >
              <li><a href="index.php"><i class='bx bx-user'></i> Profile</a></li>
              <li><a href="products.php"><i class='bx bx-upload'></i> Review Products</a></li>
              <li><a href="logout.php"><i class='bx bx-log-out' ></i> Logout</a></li>
            </ul>
      </li>
    </ul>
    </div>

    </div>
  </header><!-- End Header -->

  <main id="main">
      <br><br>
    <section class="inner-page">
      <div class="container">
          
   <?
   $eid=$_SESSION['amail'];
   $query  ="select * from tbl_admin where email='$eid'";
            $result =mysqli_query($conn,$query);
            $rows    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
            $l=$rows['level'];
            if($rows['level']==3)
            {
   ?>
   <div class="section-title">
          <h2>Products Review (Ministry Level)</h2>
           </div>
    <div class="row">       
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose a state</option>
          <?php
            $query  ="select * from states order by name asc";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
           
            if($no>0)
            {
                while($no>0)
                {
                    ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
        <?
        $no--;
            $row    = mysqli_fetch_array($result);
                }
            }
        ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="city">City</label>
      <select id="city" class="form-control" name="city" id="city">
        <option selected>Choose a city</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="village">Village</label>
      <select id="village" class="form-control" name="village">
        <option>...</option>
      </select>
    </div>
    </div>
    
    <?
    }
    else if($rows['level']==2)
            {
    ?>
    
    <div class="section-title">
          <h2>Products Review (State Level)</h2>
           </div>
    <div class="row">       
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state" disabled>
          <?php
          $sid="23";
            $query  ="select * from states where id = '$sid'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
           
            if($no>0)
            {?>
        <option selected><?php echo $row['name']?></option>
          <?  }
            ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="city">City</label>
      <select id="city" class="form-control" name="city" id="city">
        <option selected>Choose a city</option>
         <?php
            $query  ="select * from cities where state_id = '$sid'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
           
            if($no>0)
            {
                while($no>0)
                {
                    ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['city']?></option>
        <?
        $no--;
            $row    = mysqli_fetch_array($result);
                }
            }
        ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="village">Village</label>
      <select id="village" class="form-control" name="village">
        <option>...</option>
      </select>
    </div>
    </div>
    
    <?
            }
    else if($rows['level']==1)
            {
    ?>
    
    <div class="section-title">
          <h2>Products Review (District Level)</h2>
           </div>
    <div class="row">       
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state" disabled>
          <?php
          $sid="23";
            $query  ="select * from states where id = '$sid'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
           
            if($no>0)
            {?>
        <option selected><?php echo $row['name']?></option>
          <?  }
            ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="city">City</label>
      <select id="city" class="form-control" name="city" id="city" disabled>
         <?php
         $cid="563";
            $query  ="select * from cities where id = '$cid'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
           
            if($no>0)
            {
                while($no>0)
                {
                    ?>
        <option selected value="<?php echo $row['id']?>"><?php echo $row['city']?></option>
        <?
        $no--;
            $row    = mysqli_fetch_array($result);
                }
            }
        ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="village">Village</label>
      <select id="village" class="form-control" name="village">
        <option>Choose a Village</option>
        <?php
            $query  ="select * from villages where city_id = '$cid'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
           
            if($no>0)
            {
                while($no>0)
                {
                    ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
        <?
        $no--;
            $row    = mysqli_fetch_array($result);
                }
            }
        ?>
      </select>
    </div>
    </div>
    
    <?
            }
    else if($rows['level']==0)
            {
    ?>
    
    <div class="section-title">
          <h2>Products Review (Village Level)</h2>
           </div>
    <div class="row">       
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state" disabled>
          <?php
          $sid="23";
            $query  ="select * from states where id = '$sid'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
           
            if($no>0)
            {?>
        <option selected><?php echo $row['name']?></option>
          <?  }
            ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="city">City</label>
      <select id="city" class="form-control" name="city" id="city" disabled>
         <?php
         $cid="563";
            $query  ="select * from cities where id = '$cid'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
           
            if($no>0)
            {
                while($no>0)
                {
                    ?>
        <option selected value="<?php echo $row['id']?>"><?php echo $row['city']?></option>
        <?
        $no--;
            $row    = mysqli_fetch_array($result);
                }
            }
        ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="village">Village</label>
      <select id="village" class="form-control" name="village">
        <option>Choose a Village</option>
        <?php
            $vid="1";
            $query  ="select * from villages where id = '$vid'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
           
            if($no>0)
            {
                while($no>0)
                {
                    ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
        <?
        $no--;
            $row    = mysqli_fetch_array($result);
                }
            }
        ?>
      </select>
    </div>
    </div>
    
    <?
            }
    ?>
           <div class="row" id="data">
               
            
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

    <script type="text/javascript">
            $(function() {
//alert('Document is ready');

                $('#inputState').change(function() {
                    var sel_stud = $(this).val();
                
//alert('You picked: ' + sel_stud);

                    $.ajax({
                        type: "POST",
                        url: "ajaxData.php",
                        data: 'state_id=' + sel_stud,
                        success: function(whatigot) {
//alert('Server-side response: ' + whatigot);
                            $('#city').html(whatigot);
                        } //END success fn
                    }); //END $.ajax
                }); //END dropdown change event
            }); //END document.ready
            
            
            $(function() {
//alert('Document is ready');

                $('#city').change(function() {
                    var sel_stud = $(this).val();
                
//alert('You picked: ' + sel_stud);

                    $.ajax({
                        type: "POST",
                        url: "ajaxData.php",
                        data: 'city_id=' + sel_stud,
                        success: function(whatigot) {
//alert('Server-side response: ' + whatigot);
                            $('#village').html(whatigot);
                        } //END success fn
                    }); //END $.ajax
                }); //END dropdown change event
            }); //END document.ready
            
            $(function() {
//alert('Document is ready');

                $('#village').change(function() {
                    var sel_stud = $(this).val();
                    var id="<?php echo $l?>";
                
//alert('You picked: ' + sel_stud);

                    $.ajax({
                        type: "POST",
                        url: "ajaxData.php",
                        data: 'village_id=' + sel_stud+'&id='+id,
                        success: function(whatigot) {
//alert('Server-side response: ' + whatigot);
                            $('#data').html(whatigot);
                        } //END success fn
                    }); //END $.ajax
                }); //END dropdown change event
            }); //END document.ready
            
            

                
                
             
             
        </script>

</body>

</html>