<?php
require_once('dal.php');

$id = $_GET["id"];

$obj = new DBConnection;
$executed = $obj->executeQuery("DELETE FROM student WHERE id =".$id,"delete");
if($executed==true)
header('Location: showData.php');
else
echo "error while deletings data";
