<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registered Students</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>
<h1> Registered Students are </h1>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
    require_once('dal.php');
    $obj = new DBConnection;
    $rows = $obj->executeQuery("SELECT * FROM  `student`","select");
    for($i=0;$i<count($rows);$i++)
    {
           $row = $rows[$i];

           echo "<tr>";
           echo "<th scope='row'>".($i+1)."</th>";
           echo "<td>".$row['name']."</td>";
           echo "<td>".$row['email']."</td>";
           echo "<td>".$row['contact']."</td>";
           echo "<td>
           <a href='delete.php?id=".$row['id']."' style='color:red;font-weight:800'>x</a>
           <span>||</span>
           <a href='edit.php?id=".$row['id']."' style='color:blue;'>update</a>
           </td>";
           echo "</tr>";
    }
?>

  </tbody>
</table>

</div>    
</body>
</html>
