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
         
          <li><a href="index.html">Bookings</a></li>
          <li><a href="tournament.php">Training</a></li>
		  <li><a href="index.html">Tournament</a></li>
		  <li><a href="index.html">Report</a></li>
		  <li><a href="index.html">Employee</a></li>
		  <li><a href="index.html">Logout</a></li>
        
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <section id="bookings" class="bookings">
  
  <?php
 

  ?>
  <table class="table">
        
        <tr>
            <th>B.ID</th>
            <th>Name</th>
            <th>Game</th>
            <th>Time</th>
            <th>Booking-Time</th>
            <th>Date</th>
            <th>Session time</th>
            <th>M_id</th>
            <th>Delete</th>
          
        </tr>
       <?php
       $sql = "SELECT * FROM categories ";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) 
       {
       while($row = $result->fetch_assoc()) 
       {
       echo"<tr>";
       echo"<td>{$row['b_id']}</td>";
       echo"<td>{$row['name']}</td>";
       echo"<td>{$row['game']}</td>";
       echo"<td>{$row['time']}</td>";
       echo"<td>{$row['booking_time']}</td>";
       echo"<td>{$row['date']}</td>";
       echo"<td>{$row['session_timing']}</td>";
       echo"<td>{$row['m_id']}</td>";
       echo"<td><button type='button' class='delete_button'>Reject</td>";
       echo"</tr>";
      }
    }
    ?>
       
    </table>
    
	
  </section>
</body>
</html>