<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) { header('location: product.php'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="description" content="LifeStyle Store India's faishon e-store."/>
        <meta name="keywords" content="camera, watches, shirts"/>
        <meta name="author" content="Bipul Kumar">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner_image" style="margin-bottom: 0px;">
            <div class="inner-banner-image">
                <center>
                    <div class="row row_style">
                        <div class="col-xs-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>Make a free account</h4>
                                </div>
                                <div class="panel-body">
                                    <form method='post' action='includes/signup_script.php'>
                                        <div class="form-group">
                                            <label for="name" style="color:#000000;">Name</label>
                                            <input type="text" class="form-control" name="name" required = "true">
                                        </div>                                     
                                        <div class="form-group">
                                            <label for="email" style="color:#000000;">Email</label>
                                            <input type="email" class="form-control" name="email" required = "true" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" style="color:#000000;">Password</label>
                                            <input type="password" class="form-control" name="password" required = "true" pattern=".{6,}">
                                        </div>
                                        <div class="form-group">
                                            <label for="date" style="color:#000000;">DOB</label>
                                            <input type="date" class="form-control" name="date" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tel" style="color:#000000;">Contact</label>
                                            <input type="tel" class="form-control" name="tel" placeholder="+91 90000 00000" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" style="color:#000000;">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="City" required = "true">
                                        </div>                                        
                                        <div class="radio">
                                            <label style="color:#000000;">
                                                <input type="radio" name="gender" value="male">Male
                                            </label>
                                            <label style="color:#000000;">
                                                <input type="radio" name="gender" value="female">Female
                                            </label>
                                            <label style="color:#000000;">
                                                <input type="radio" name="gender" value="other">Other
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Signup</button>
                                    </form> 
                                </div>
                                <div style="color:#FF0000;">
                                    <?php echo $error=filter_input(INPUT_GET,'m'); ?>
                                </div>                               
                                <div class="panel-footer">
                                    <h4 style="color:#000000;">Already have an account? <a href="login.php" class="btn btn-primary btn-lg active">Login</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>       
    </body>   
</html>    