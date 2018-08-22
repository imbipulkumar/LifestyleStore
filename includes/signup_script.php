<?php
require 'common.php';
$name=filter_input(INPUT_POST,'name');
$dob=filter_input(INPUT_POST,'date');
$tel=filter_input(INPUT_POST,'tel');
$address=filter_input(INPUT_POST,'address');
$gender=filter_input(INPUT_POST,'gender');
$email=filter_input(INPUT_POST,'email');
$passwd=filter_input(INPUT_POST,'password');

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";

$duplicate_email_query="select * from users where email='$email'";
$duplicate_email_result=mysqli_query($con,$duplicate_email_query);
$num = mysqli_num_rows($duplicate_email_result);

if ($num != 0) {
    $m = "<span><strong>Email Already Exists</strong></span>";
    header('location: ../signup.php?m=' . $m);
} else if (!preg_match($regex_email, $email)) {
    $m = "<span><strong>Not a valid Email Id</strong></span>";
    header('location: ../signup.php?m=' . $m);
} else if (!preg_match($regex_num, $tel)) {
    $m = "<span><strong>Not a valid phone number</strong></span>";
    header('location: ../signup.php?m=' . $m);
}
else if (strlen($passwd)<6){
    $m = "<span><strong>Password should have at-least 6 characters long</strong></span>";
    header('location: ../signup.php?m=' . $m);
}

$password=md5($passwd);
$user_registration_query="insert into users (email,name,dob,gender,contact,address,password) values ('$email','$name','$dob','$gender','$tel','$address','$password')";
$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));

$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
header('location: ../product.php');
?>