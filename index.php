<?php
require 'includes/common.php';
if (isset($_SESSION['email']))
    {   
    header('location: products.php');
    } 
 ?>
<html>
    <head>
        <title>Index page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <?php         include 'includes/header.php'; ?>
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <a href="products.html" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
                </center>
            </div>
        </div>
        <?php         include 'includes/footer.php'; ?>
    </body>
</html>
