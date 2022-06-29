<?php

$servername="localhost";
$dbname="login";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die($conn);


if(!$conn)
{
    die('connection failed'.mysqlerror());

}

?>