<?php
 session_start();
 require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    
    
    <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
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
         
          <li><a href="bookings.php">Bookings</a></li>
          <li><a href="index.html">Training</a></li>
		  <li><a href="index.html">Tournament</a></li>
		  <li><a href="index.html">Report</a></li>
		  <li><a href="index.html">Employee</a></li>
		  <li><a href="index.html">Logout</a></li>
        
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <section id="tournament" class="tournament">
  <div class="container">

      
         <div class="t_back">
          <img src="back.jpg" alt="Italian Trulli"  style="width:1200px; height:800px;" >  
          </div>
      
      
        <div class="section-title">
         
        <div class="cards-list">
  
<div class="card 1">
  <div class="card_image"> <img src="img6.jpg" /> </div>
  <div class="card_title title-white">
    <p>Football</p>
  </div>
</div>

  <div class="card 2">
  <div class="card_image">
    <img src="img8.jpg" />
    </div>
  <div class="card_title title-white">
    <p>Volleyball</p>
  </div>
</div>

<div class="card 3">
  <div class="card_image">
    <img src="img9.png" />
  </div>
  <div class="card_title title-white">
    <p>Badmitton</p>
  </div>
</div>
  
  

</div>
        
      </div>
    
	
  </section>
</body>
</html>