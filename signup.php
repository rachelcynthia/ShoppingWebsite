<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:products.php');
}
?>
<html>
    <head>
        <title>Sign Up</title>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <?php        include 'includes/header.php';?>
        <div class="container">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel" style="padding-top:75px;">
                    <div class="panel-heading"><h1>SIGN UP</h1></div>
                    <div class="panel-body">
                        <form action="POST" method="signup_script.php">
                            <div class="form-group">
                                <input type="text"placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Contact" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="City" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Address" class="form-control">
                            </div>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
         <?php        include 'includes/footer.php'; ?>
    </body>
</html>