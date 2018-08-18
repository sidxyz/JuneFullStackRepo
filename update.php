<?php
require_once('dal.php');
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$id = $_POST['id'];

$obj = new DBConnection;
$query = "UPDATE student
          SET name='".$name."',
           email='".$email."' ,
           contact='".$contact."' 
           WHERE id=".$id;
$executed = $obj->executeQuery($query,"update");
//var_dump($query);

if($executed==true)
header('Location: showData.php');
else
echo "error while updating data";

