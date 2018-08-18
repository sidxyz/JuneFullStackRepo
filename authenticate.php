<?php

$username = $_POST['username'];
$password = $_POST['password'];

session_start();
if($username=='admin' && $password=='admin')
{
    $_SESSION['username']=$username;
    header('Location: form.php');
}
else
{
    header('Location: login.php');
    $_SESSION['message']="invalid username or password";
}