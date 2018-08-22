<?php 
require 'includes/common.php';
if (!isset($_SESSION['email'])) { header('location: index.php'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Success Lifestyle Store</title>
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
        <div id="banner_image" style="height: 620px;margin-bottom: 0px;">
            <div class="container">
                <div class="jumbotron" style="margin-top: 200px;background-color: rgba(0, 0, 0, 0.7);">
                    <?php
                    $id=$_SESSION['id'];
                    $success_query="update users_items set status='confirmed' where user_id=$id";
                    $success_query_result=mysqli_query($con,$success_query) or die("Some error occurred.");
                    ?>
                    <h1>Your order is confirmed.</h1>
                    <p>Thank you for shopping with us. <a href="product.php">Click here</a> to purchase any other item.</p>
                </div>
            </div>   
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>