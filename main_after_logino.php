<?php
session_start();
include("connection.php");

 if(isset($_SESSION['user']))
 {
   
 header("location:main_after_login.php");
  }  
 
else
{
 	header("location:login.php");
}



?>
