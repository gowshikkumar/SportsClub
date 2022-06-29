<?php
     
     require_once('config.php');
     ?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appland Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

 

  

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">IBA sports club</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    
       
<nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#hero">Login</a></li>
          <li><a href="#Games">Games</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li class="get-started"><a href="reg.html">Signup</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
          <div class="container">
           
          <div class="back">
          <img src="assets/img/img5.jpg" alt="Italian Trulli"  style="width:2000px; height:1000px;" >  
          </div>
                     
            <div class="loginform">
              <form action="login.php" method="POST">
         
                  <h1>Login</h1><br>
                  <div class="form-group">
                
                  <input type="text" name="user" class="form-control" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                      <input type="password" name="pass" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                      <button type="submit" value="submit" name="submit" class="submit-btn">Login</button>
                  </div>
                  <div class="clearfix">                  
                      <a href="#" class="pull-right">Forgot Password?</a>
                      </div>   
                   
                    </form>
                 </div>
                  
              
              
             
         
          
          </div>

  </section><!-- End Hero -->

  <main id="main">

    

    
    <!-- ======= Games Section ======= -->
    <section id="Games" class="Games">
      <div class="container">

        <div class="section-title">
          <h2>Games</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="cards-list">
  
<div class="card 1">
  
  <div class="card_image">
   <img src="assets/img/gallery/img6.jpg" />
    </div>
  <div class="card_title title-white">
    <p>Football</p>
  </div>
</div>

  <div class="card 2">
  <div class="card_image">
    <img src="assets/img/gallery/img8.jpg" />
    </div>
  <div class="card_title title-white">
    <p>Volleyball</p>
  </div>
</div>

<div class="card 3">
  <div class="card_image">
    <img src="assets/img/gallery/img9.png" />
  </div>
  <div class="card_title title-white">
    <p>Badmitton</p>
  </div>
</div>
  
  

</div>
        
      </div>
    </section><!-- End Games Section -->

    
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Membership</h2>
          <p>Become a memeber of the club to have a great experience </p>
        </div>

        <div class="memplan">

          <div class="plan1" >
            <h3>1 month</h3>
            <h4>&#x20b9;100</h4>

            <h5 href="#" class="get-started-btn">Select</h5>
          </div>

          <div class="plan2" >
            <h3>6 months</h3>
            <h4>&#x20b9;500</h4>

            <h5 href="#" class="get-started-btn">Select</h5>
          </div>

          <div class="plan3">
            <h3>1 year</h3>
            <h4>&#x20b9;1000</h4>
            
            <h5 href="#" class="get-started-btn">Select</h5>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

   

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="section-title">
      <h2>About</h2>
    </div>
    
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="about" data-aos="fade-up">
            <h3>IBA sports club</h3>
            <p>
              Gandhi nagar <br>
              Madukkarai,coimbatore<br>
              Tamil nadu <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="about1" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

         

          <div class="about2" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Social Networks</h4>
            <p>Follow us on the social media  </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>IBA sports club</span></strong>. All Rights Reserved
      </div>
     

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>




  

</body>

</html>

