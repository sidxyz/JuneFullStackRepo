<?php
require_once('dal.php');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['phone'];

$obj = new DBConnection;
$executed = $obj->executeQuery("INSERT INTO `student`
VALUES (NULL,'".$name."','".$email."','".$contact."')","insert");

//var_dump($executed);
if($executed==true)
header('Location: showData.php');
else
echo "error while entering data";