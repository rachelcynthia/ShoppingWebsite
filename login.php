<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:products.php');
}
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="index.css" type="text/css">
        </head>
    <body style="height:100%">
        <?php        include 'includes/header.php';?>
        <div class="panel">
            <div class="panel-heading">    
            </div>
            <div class="panel-body">
                <br>
                <p class="text-warning">Login to make a purchase</p>
                <form method="POST" action="login_submit.php">
                    <div class="form-group">
                        Email: <input type="email" class="form-control" name="email">
                    </div>
                   <div class="form-group">
                       Password: <input type="password" class="form-control" name="password">
                   </div>
                    <button type="button" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="panel-footer">Don't have an account?<a href="signup.html">Register</a></div>
        </div>
       <?php        include 'includes/footer.php';?>
    </body>
</html>
