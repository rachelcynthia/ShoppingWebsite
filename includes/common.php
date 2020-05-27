<?php
    $con = mysqli_connect("localhost:3306", "root", "", "ecommerce");
    //or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>