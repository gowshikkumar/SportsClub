<?php
     session_start();
     require_once('config.php');
     ?>
     <?php error_reporting (E_ALL ^ E_NOTICE); ?>
     

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
         
          
          <li><a href="dashboard.php">Booking</a></li>
          <li><a href="training.php">Training</a></li>
          <li><a href="index.html">History</a></li>
          <li><a href="index.html">Tournaments</a></li>
          <li class="username"><a><?php echo($_SESSION['userid']) ?></a></li>
        
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  
  
  <section id="training">
   
     <form  method="POST" class="form-training">
            <h1>Training</h1>
           <tr>
           <div class="details1">  
                 <td> <label>  Game:</label>
                  
                    <select name="game" class="input-sec" >
                             <option>Soccer</option>
                             <option>badmitton</option>
                             <option>cricket</option>
                    </select></td>  

          <td> <label>  Plan: </label>  
                    <select name="plan" class="input-sec">
                             <option>monthly</option>
                             <option>weekly</option>
                             <option>yearly</option>
                     </select></td>
</tr>
<tr>

          <td> <label> Session:</label> 
                     <select name="session" class="input-sec">
                             <option>Morning</option>
                             <option>Afternoon</option>
                             <option>Evening</option>
             </select></td>
</tr>       </div>
             <input type="submit" class="submit-btn" name="submit"> 
             
             <div class="tips" >
                 <h1 >Note:</h2>
                 <p1>* The timing for morning session will start from 7 A.M TO  9 A.M </p1><br>
                 <p1>* The timing for afternoon session will start from 1 P.M TO 3 P.M</p1><br>
                 <p1>* The timing for evening session will start from 6 P.M TO 8 P.M</p1><br>

             </div>
              

       </form>
      
  </section>
</body>
</html>

<?php
        $game=$_POST['game'];
        $plan=$_POST['plan'];
        $session=$_POST['session'];
        
      if(isset($_POST['submit']))
      {
       if(empty($game)||empty($plan)||empty($session))
       {
          echo"please enter details";
       } else{
        $query1="INSERT INTO `training`(`game`, `plan`, `session`) VALUES ('$game','$plan','$session') ";
        $result1=mysqli_query($conn,$query1) or trigger_error(mysqli_error($conn)); }
       }
      
       ?>