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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
</head>
<body >
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
          <li><a href="history.php">History</a></li>
          <li><a href="index.html">Tournaments</a></li>
          <li class="membership"><a href="">Membership</a></li>
          <li class="username"><a><?php echo($_SESSION['userid']) ?></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
 <form action="time.php">
 <div class="cards-list1">
    
    <div id="card_images1" class="card_image1">
     
     <input type="image" id="myImg" class="img1"  src="assets/img/gallery/img6.jpg" onclick='gam()' style="width:300px;height:400px;border:0">
      
         </div>
   
    <div class="card_image1">
   
    <img id="myImg2"   src="assets/img/gallery/img8.jpg" class="img2" style="width:300px;height:400px;border:0">
    
      </div>
    
    <div class="card_image1">
   
     <img id="myImg3"   src="assets/img/gallery/img9.png" class="img3" style="width:300px;height:400px;border:0">
   
    </div>
       
     
  </div>   
 </form>
<script>
function gam()
{
  var game="football";
  localstorage.setItem("textvalue",game);
  alert("hello")
  

}
</script>


  
</body>
</html>
<!-------php code for reservation>
<?php
    ///football//
       if(isset($_POST['sub']))
       { 
        $sub1_2=$_POST['s1_2'];
        $sub2_2=$_POST['s2_2'];

        if($sub1_2>$sub2_2)
        {
          echo "<script>
          alert('username and password in not correct');
          window.location.href='dashboard.php';
          </script>";
        }

       }

         ///volleyball//

    if(isset($_POST['sub2']))
    {
     $name=$_POST['name2'];
     $game=$_POST['game2'];
     $date=$_POST['date2'];
     $sub1=$_POST['s1_2'];
     $sub2=$_POST['s2_2'];
     $m_id=$_SESSION['userid'];

     if($sub1<$sub2){
      $sub3=strtotime($sub1);
      $sub4=strtotime($sub2);
      
      $diff=$sub3-$sub4;
     if($diff<0){
      $seconds=3600;
      $hours=-($diff/$seconds);
 
      
      $query="INSERT INTO `categories`( `name`, `game`, `time`, `date`, `session_timing`,`m_id`) VALUES ('$name','$game','$hours','$date','$sub1','$m_id')" ;
      $result=mysqli_query($conn,$query) or trigger_error(mysqli_error($conn));
 
    
     }
      else{
            $seconds=3600;
            $hours=$diff/$seconds;
           
            $query="INSERT INTO `categories`( `name`, `game`, `time`, `date`, `session_timing`,`m_id`) VALUES ('$name','$game','$hours','$date','$sub1','$m_id')" ;
            $result=mysqli_query($conn,$query) or trigger_error(mysqli_error($conn));
            
            
            header("location:dashboard.php");
          }
        }
        else{
          echo"check your timing";
             }
        }

        ///badmitton//
         
    if(isset($_POST['sub3']))
    {
     $name=$_POST['name3'];
     $game=$_POST['game3'];
     $date=$_POST['date3'];
     $sub1=$_POST['s1_3'];
     $sub2=$_POST['s2_3'];
     $m_id=$_SESSION['userid'];

      $sub3=strtotime($sub1);
      $sub4=strtotime($sub2);
      
      $diff=$sub3-$sub4;
     if($diff<0){
      $seconds=3600;
      $hours=-($diff/$seconds);
 
      
      $query="INSERT INTO `categories`( `name`, `game`, `time`, `date`, `session_timing`,`m_id`) VALUES ('$name','$game','$hours','$date','$sub1','$m_id')" ;
      $result=mysqli_query($conn,$query) or trigger_error(mysqli_error($conn));
 
    
     }
      else{
            $seconds=3600;
            $hours=$diff/$seconds;
           
            $query="INSERT INTO `categories`( `name`, `game`, `time`, `date`, `session_timing`,`m_id`) VALUES ('$name','$game','$hours','$date','$sub1','$m_id')" ;
            $result=mysqli_query($conn,$query) or trigger_error(mysqli_error($conn));
            
            
            header("location:dashboard.php");
          }
        }
       
    
        
      
       
       ?>
       <--------php code for registration>