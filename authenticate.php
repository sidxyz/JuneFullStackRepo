<?php

$username = $_POST['username'];
$password = $_POST['password'];

session_start();
if($username=='admin' && $password=='admin')
{
    $_SESSION['username']=$username;
    echo "success";
    //header('Location: form.php');
}
else
{   
    echo "failure";
    //header('Location: login.php');
    $_SESSION['message']="invalid username or password";
}