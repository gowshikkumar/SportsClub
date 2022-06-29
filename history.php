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
    <title>Registration</title>
    
    
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
         
          
          <li><a href="#reserv">Booking</a></li>
          <li><a href="training.php">Training</a></li>
          <li><a href="index.html">History</a></li>
          <li><a href="index.html">Tournaments</a></li>
          <li class="membership"><a href="">Membership</a></li>
          <li class="username"><a><?php echo($_SESSION['userid']) ?></a></li>
          <li><a href="logout.php">Logout</a></li>


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<div id="table1">
<div class="table">
<table>
<tr>
<th>B_Id</th>
<th>ame</th>
<th>Game</th>
<th>Time</th>
<th>Booking_time</th>
<th>session_timing</th>

</tr>
</table>
</div>
</div>


</body>
</html>

<?php

$name=$_SESSION['userid'];
$sql = "SELECT `b_id`, `name`, `game`, `time`, `booking_time`, `date`, `session_timing` FROM `categories` WHERE  `m_id`='$name' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) 
{
echo"<table>";
  echo "<tr><td>" . $row["b_id"]. "</td><td>" . $row["name"] . "</td><td>". $row["game"] . "</td><td>". $row["time"] . "</td><td>". $row["booking_time"] . "</td><td>". $row["date"] . "</td><td>". $row["session_timing"] . "</td></tr>";
  echo "</table>";
}
echo "</table>";
}
 else
  {
     echo "0 results"; 
  }
$conn->close();
?>

