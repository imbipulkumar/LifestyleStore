<?php
require 'common.php';
$email=filter_input(INPUT_POST,'email');
$password=md5(filter_input(INPUT_POST,'password'));
$user_login_query="select * from users where email='$email' and password='$password'";
$query_result=mysqli_query($con,$user_login_query) or die(mysqli_error($con)); 
if(mysqli_num_rows($query_result)==0){
    $error = "<span><strong>Please enter correct E-mail id and Password</strong></span>";
    header('location: ../login.php?error=' . $error);
}
else {
    $row=mysqli_fetch_array($query_result);
    session_start();
    $_SESSION['id']=$row['id'];
    $_SESSION['email']=$row['email'];
    header('location: ../product.php');
}
?>