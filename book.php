<?php





if(isset($_GET['date'])){
    $date = $_GET['date'];
    session_start();
     require_once('config.php');
}


?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
  </head>

  <body>
    <div class="container">
        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
      <form method="post">
        <table class="time" id="table" style="width:100% "  >
        
           <tr><td><input type="button" onclick="insert(this)" name="bt1"  value="06:00 AM TO 06:30 AM" ></td>
               <td><input type="button" onclick="insert(this)" name="bt2"  value="06:30 AM TO 07:00 AM"></td>
               <td><input type="button" onclick="insert(this)" name="bt3"  value="07:00 AM TO 07:30 AM"></td>
               <td><input type="button" onclick="insert(this)" name="bt4"  value="07:30 AM TO 08:00 AM"></td></tr>

           <tr><td><input type="button" name="bt5" value="08:00 AM TO 08:30 AM" ></td>
               <td><input type="button" name="bt6" value="08:30 AM TO 09:00 AM"> </td>
               <td><input  type="button"name="bt7" value="09:00 AM TO 09:30 AM"> </td>
               <td><input  type="button"name="bt8" value="09:30 AM TO 10:00 AM"> </td></tr>

           <tr><td><input  type="button"name="bt9" value="10:00 AM TO 10:30 AM"> </td>
               <td><input type="button" name="bt10" value="10:30 AM TO 11:00 AM"></td>
               <td><input  type="button"name="bt11" value="11:00 AM TO 11:30 AM"> </td>
               <td><input  type="button"name="bt12" value="11:30 AM TO 12:00 PM"> </td></tr>

           <tr><td><input  type="button"name="bt13" value="12:00 PM TO 12:30 PM"> </td>
               <td><input type="button" name="bt14" value="01:00 PM TO 01:30 PM"> </td>
               <td><input type="button" name="bt15" value="01:30 PM TO 02:00 PM"> </td>
               <td><input type="button" name="bt16" value="02:00 PM TO 02:30 PM">  </td>
           
            <tr><td><input type="button" name="bt17" value="02:30 PM TO 03:00 PM"> </td>
               <td><input  type="button"name="bt18" value="03:00 PM TO 03:30 PM"> </td>
               <td><input  type="button"name="bt19" value="03:30 PM TO 04:00 PM"></td>
               <td><input  type="button"name="bt20" value="04:00 PM TO 04:30 PM"> </td>
               
            <tr><td><input  type="button"name="bt21" value="04:30 PM TO 05:00 PM"> </td>
               <td><input  type="button"name="bt22" value="05:00 PM TO 05:30 PM"> </td>
               <td><input type="button" name="bt23" value="05:30 PM TO 06:00 PM"> </td>
               <td><input type="button" name="bt24" value="06:00 PM TO 06:30 PM"> </td></tr>
    
              <tr><td><input type="button" name="bt25" value="06:30 PM TO 07:00 PM"> </td> 
                  <td><input  type="button"name="bt26" value="07:00 PM TO 07:30 PM"> </td>
                  <td><input type="button" name="bt27" value="07:30 PM TO 08:00 PM"> </td>
                  <td><input  type="button"name="bt27" value="08:30 PM TO 09:00 PM"> </td></tr>
      
</form>
</div>
           
           
           </table>
<script  >

  function insert(ob)
  {
    if(document.getElementById("val3").value==ob.value||document.getElementById("val2").value==ob.value||document.getElementById("val1").value==ob.value)
    {
      alert("please check ur date")
    }
    else{
var na =ob.value;
var ni=document.getElementById("val1").value
var ne=document.getElementById("val2").value
var nr=document.getElementById("val3").value

if(ni<=0)
{
  document.getElementById("val1").value=na;
}
else if(ne<=0){
  document.getElementById("val2").value=na;
}
else if(nr<=0){
  document.getElementById("val3").value=na;
}
else{
  alert("your slots are full")
}

}
  }
  

function del1()
{
 var nt=0;
 document.getElementById("val1").value=nt;

}
function del2()
{
 var nt=0;
 document.getElementById("val2").value=nt;

}
function del3()
{
 var nt=0;
 document.getElementById("val3").value=nt;

}

                     </script>

      <form method="post" >
      <table id="table2" >
               <div class="slot">
                 <tr><th>Time</th> 
                      <th>Name</th>
                      <th></th>
                      <th></th> </tr>
                 
                 
                   <tr><td><input type="button" class="bt" onclick="del1()" value="x |"><input  name="val" class="val" id="val1" value="0"  readonly ></td>
                     <td><input type="text" name="p1" class="nam" id="nam1" placeholder="player 1"></td>
                     <td><input type="text" name="p2" class="nam" id="nam2"placeholder="player 2"></td>
                     <td><input type="text" name="p3" class="nam" id="nam3"placeholder="player 3"></td></tr>

                     <tr><td><input type="button" class="bt" onclick="del2()" value="x |"><input  name="time" class="val" id="val2" value="0"  readonly > </td>  
                        <td><input type="text" name="p4" class="nam" id="nam4" placeholder="player 4"></td>
                        <td><input type="text" name="p5" class="nam" id="nam5" placeholder="player 5"></td>
                        <td><input type="text" name="p6" class="nam" id="nam6" placeholder="player 6"></td></tr>

                      <tr><td><input type="button" class="bt" onclick="del3()" value="x |"><input  name="time" class="val" id="val3"  value="0"   readonly ></td>
                       <td><input type="text" name="p7" class="nam" id="nam7" placeholder="player 7"></td>
                       <td><input type="text" name="p8" class="nam" id="nam8" placeholder="player 8"></td>
                       <td><input type="text" name="p9" class="nam" id="nam9" placeholder="player 9"></td></tr>
             
                       <tr><td></td>
                       <td><input type="text" name="p10" class="nam" id="nam10" placeholder="player 10"></td>
                       <td><input type="text" name="p11" class="nam" id="nam11" placeholder="player 11"></td>
                       <td><button type="submit" class="book" name="submit">Book</button></td></tr>

                             


                </table>
            
               </div>
      </form>

     <?php
          

           if(isset($_POST['submit'])){
            $time=$_POST['time'];
            $name=$_POST['name'];
            $date;
            $query1="INSERT INTO `categories`(`time`, `name`, `date`) VALUES ('$time','$name','$date') ";
            $result1=mysqli_query($conn,$query1) or trigger_error(mysqli_error($conn)); 
           
        }
        
           ?>

        </div>
    </div>

     

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>

</html>
