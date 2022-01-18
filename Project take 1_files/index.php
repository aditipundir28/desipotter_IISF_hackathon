<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DESI POTTER</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
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

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between" >

      <h1 class="logo"><a href="index.php">DESI POTTERS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

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
              <li><a href="seller/index.php"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
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
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Molding the Earth <br> into art.</h1>
          <ul>
            <li><i class="ri-check-line"></i> We're the face and hands behind the pots. Since we have grown the village pottery into a thriving business while keeping all the charm and warmth of the small indian venture it once began as.</li>
            <li><i class="ri-check-line"></i> Vission is to spread the essence of Indian hardship.</li>
            <li><i class="ri-check-line"></i> Let's explore!!!</li>
          </ul>
          <div class="mt-3">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="shop" class="btn-get-quote">Buy Products</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="new.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Life and Pottery!!</h2>
            <h3>Clay feels happy in the good potter's hand.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Desi Potters is a website that connect the extraordinary village potters with the whole world.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Easy to access.</li>
              <li><i class="ri-check-double-line"></i> Reliable products.</li>
              <li><i class="ri-check-double-line"></i> Secure payments.</li>
            </ul>
            <p class="font-italic">
               Have you seen a potter's wheel of Indian village pot maker. I'm sure 'NO',but here you can see them and buy them as well.
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <br>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="section-title">
          <h2>Selection Process</h2>
           </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>District Level</h4>
              <p>Under District Level, the villagers upload there products on Desi Potter and get in touch with higher authority for their verification and product authentication.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>State Level</h4>
              <p>Under State Level, the state officers are working on the proofing, authentication and after completing all the steps. The product is now good to go for selling.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Ministry Level</h4>
              <p>Under Ministry Level, the ministry officer verifies the product and update all the possible details for the people around the world.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">20000</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-users-social"></i>
              <span data-toggle="counter-up">500</span>
              <p>Sellers Registered</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-tea-pot"></i>
              <span data-toggle="counter-up">1000</span>
              <p>Products Approved</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-money-bag"></i>
              <span data-toggle="counter-up">1000000</span>
              <p>Revenue Generated</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Product Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Products</h2>
          <p>Our products are organic made up of natural soil. No harmful products are used in them. The products are easily portable, washable, eye catching hand work and fully hygenic.</p>
        </div>

        <div class="row">
          
          <div class="col-xl-12">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-3 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box iconbox-blue">
                    <div class="icon">
                      <img src="assets/img/diya2.jpg" height="100px" width="150px">
                    </div>
                    <h4>Earthen Lamp</h4>
                    <p style="text-align: justify;">A diya, diyo, deya, divaa, deepa, deepam, or deepak is an oil lamp usually made from clay, with a cotton wick dipped in ghee or vegetable oils. Diyas are native to the Indian subcontinent often used in Hindu, Sikh, Jain and Zoroastrian religious festivals.</p>
                  </div>
                </div>

                <div class="col-lg-3 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box iconbox-orange ">
                    <div class="icon">
                      <img src="assets/img/21.jpg" height="100px" width="100px">
                    </div>
                    <h4>Earthen Pots</h4>
                    <p style="text-align: justify;">Matki (or matka) is a Hindi word used for an earthen pot. It is used all over the Indian subcontinent. It has been in use since ancient times and can be found in houses of every class. The thermal inertia in earthen pots keeps the meat tender and soft for long.</p>
                  </div>
                </div>

                <div class="col-lg-3 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box iconbox-pink">
                    <div class="icon">
                      <img src="assets/img/plate.jpg" height="100px" width="150px">
                    </div>
                    <h4>Earthen Utensils</h4>
                    <p style="text-align: justify;">Earthen Utensils, however, are made of clay--which is organic and thus safe for the human body--and does not release any harmful toxins when exposed to higher temperatures. It is safe for people who are vegetarians, vegans, all organic, and that have certain dietary restrictions.</p>
                  </div>
                </div>

                <div class="col-lg-3 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box iconbox-teal">
                    <div class="icon">
                      <img src="assets/img/deco.jpg" height="100px" widht="100px">
                    </div>
                    <h4>Earthen Decor</h4>
                    <p style="text-align: justify;">Earthen Home Decorative Items made by very fine Earthen. These can also be used in Resorts, Restaurants, Home And Office And Parks to. These can be offered in vibrant color combinations. These can also be used in Resorts, Restaurants and parks to add to the greenery.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Product Section -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>N.H. 58, Delhi-Roorkee Highway, Baghpat Bypass Road Crossing, <br>Meerut, Uttar Pradesh 250005</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91-xxxx xxxx xx<br>+91-xxxx xxxx xx</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Desi Potters</h3>
            <p>
              N.H. 58, Delhi-Roorkee Highway,<br> Baghpat Bypass Road Crossing,<br>Meerut,Uttar Pradesh 250005<br><br>
              <strong>Phone:</strong> +91-xxxx xxxx xx<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
          
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Products</a></li><!--
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          </div>
          
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Community</h4>
            <p>Desi Potters are always free to give you chance to become the part of our community.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Request">
            </form>
          </div>

        </div>
      </div>
    </div>

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
          Designed by <a href="">Desi Potters Pvt. Ltd.</a>
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