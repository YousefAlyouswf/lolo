<?php
include_once '../db.inc.php';
?><?php

if (mysqli_connect_errno()) {
    die("field " . mysqli_connect_errno());
}
$username = $_POST['username'];
$password = $_POST['pass'];
session_start();
$result = mysqli_query($connect, "SELECT * FROM `login` WHERE `username` = '$username' && `password` = '$password'");
$count = mysqli_num_rows($result);
if ($count == 1) {
    $_SESSION['log'] = 1;
    $_SESSION['username'] = $username;

    header("location:control");


} else {
    header("refresh:0;url=login.php");
}

mysqli_close($connect);
?>