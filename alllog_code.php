<?php
include('connection.php');


$username =$_POST['username'];
$password =$_POST['password'];


 
 

$save=mysql_query("INSERT INTO log(username, password, date)
  VALUES ('$username','$password',now())");
  if(!$save)
  {
    die(mysql_error());
    }
  echo"<script>alert('Thanks! You have login successfully! ')</script>";
  echo"<script>window.open('allhome.php','_self')</script>";
  exit();
?>