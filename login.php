<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) { header('location: product.php'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Lifestyle Store</title>
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
                            <div class="panel panel-primary" style="margin-bottom: 65px;">
                                <div class="panel-heading">
                                    <h4>Login to make a purchase</h4>
                                </div>
                                <div class="panel-body">
                                    <form method='post' action='includes/login_submit.php'>
                                        <div class="form-group">
                                            <label for="email" style="color:#000000;">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" style="color:#000000;">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group form-check">
                                            <label class="form-check-label" style="color:#000000;">
                                            <input class="form-check-input" type="checkbox" checked> Remember me</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </form> 
                                </div>
                                <div style="color:#FF0000;">
                                    <?php echo $error=filter_input(INPUT_GET,'error'); ?>
                                </div>
                                <div class="panel-footer">
                                    <h4 style="color:#000000;">Don't have an account? <a href="signup.php" class="btn btn-primary btn-lg active">Register</a></h4>
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