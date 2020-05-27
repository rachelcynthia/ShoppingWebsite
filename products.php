<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title>Products</title>
                <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body style="height:100%">
         <?php        include 'includes/header.php'; 
        include 'includes/check-if-added.php';
         ?>
        <div class="container" style="padding-top:75px;">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <image src="./images/5.jpg" alt="image"/>
                    <p>Price: Rs. 36000.00</p>
                     <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>          
                    </div>
                </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <image src="./images/2.jpg" alt="image"/>
                    <div class="caption">Sony DSLR</div>
                    <p>Price: Rs. 40000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
                </div>
        <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <image src="./images/3.jpg" alt="image"/>
                    <div class="caption">Sony DSLR</div>
                    <p>Price: Rs. 50000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
                </div>
        <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <image src="./images/4.jpg" alt="image"/>
                    <div class="caption">Olympus DSLR</div>
                    <p>Price: Rs. 80000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
                </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <image src="./images/9.jpg"/>
                    <div class="caption">Titan Model #301</div>
                    <p>Price: Rs. 13000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <image src="./images/10.jpg"/>
                    <div class="caption">Titan Model #201</div>
                    <p>Price: Rs. 3000.00</p>
                    <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <image src="./images/11.jpg" alt="image"/>
                    <div class="caption">HMT Milan</div>
                    <p>Price: Rs. 8000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <image src="./images/12.jpg"/>
                    <div class="caption">Faber Luba #111</div>
                    <p>Price: Rs. 18000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
            </div>
        </div>
           <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <image src="./images/8.jpg"/>
                    <div class="caption">H&W</div>
                    <p>Price: Rs. 800.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <image src="./images/6.jpg"/>
                    <div class="caption">Luis Phil</div>
                    <p>Price: Rs. 1000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <image src="./images/13.jpg" alt="image"/>
                    <div class="caption">John Zok</div>
                    <p>Price: Rs. 1500.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <image src="./images/14.jpg"/>
                    <div class="caption">Jhalsani</div>
                    <p>Price: Rs. 1300.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>    
                    
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                         <?php                             }
                         else {                             
                             //We have created a function to check whether this particular product is added to cart or not.                                
                              if (check_if_added_to_cart(1)) { 
                                    //This is same as if(check_if_added_to_cart != 0)                                    
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                              } 
                            else {                               
                              ?>                        
                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
                         <?php                               
                            }
                            }
                            ?>
                </div>
            </div>
        </div>
        <?php         include 'includes/footer.php';
        ?>
    </body>
</html>
