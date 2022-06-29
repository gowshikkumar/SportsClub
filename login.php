<?php
     
     require_once('config.php');
     ?>
<?php
session_start();

$uname=$_POST['user'];
$pass=$_POST['pass'];

if(isset($_POST['user'] ))
{
  $query="select * from login where username='$uname' and password='$pass'";
  $result=mysqli_query($conn,$query) or trigger_error(mysqli_error($conn));


  if($row=mysqli_fetch_assoc($result))
  {
      $pass=$row['password'];
      $_SESSION['userid']=$uname; 
      header("location:dashboard.php");

  }
  else
  {  
        echo "<script>
        alert('username and password in not correct');
        window.location.href='index.php';
        </script>";
      
  }

        
    
   
}



?>
