<?php
require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = MD5(filter_input(INPUT_POST,'old-password'));

$new_pass = MD5(filter_input(INPUT_POST,'password'));

$new_pass1 = MD5(filter_input(INPUT_POST,'passwordl'));

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass != $new_pass1) {
    header('location: ../setting.php?error=<span><strong>The two passwords don\'t match</strong></span>');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: ../setting.php?error=<span><strong>Password Updated</strong></span>');
    }
    else
        header('location: ../setting.php?error=<span><strong>Wrong Old Password</strong></span>');
}
?>