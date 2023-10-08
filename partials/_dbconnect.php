<?php
$servername="localhost";
$username="root";
$password="";
$database="spacebuddy";

$conn=mysqli_connect($servername,$username,$password,$database);
if($conn = true){
    echo "Connection Succesful!";
   } else{
       die(mysqli_error);
   }

?>