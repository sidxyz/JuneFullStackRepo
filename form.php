<?php
    session_start();
	//var_dump($_SESSION['username']);
     if($_SESSION['username']!=true)
	header('Location: login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>form entry</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="jquery.js" type="text/javascript"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a href="showData.php">Registrations</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
	<h1>Enter student data</h1>
	<form>
		<input type="text" name="name" id="name" placeholder="name">	
		<input type="tel" name="phone"  id="phone" placeholder="phone">	
		<input type="email" name="email"  id="email" placeholder="email">
		<button type="button" id="addStudentButton">Add</button>	

	</form>
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
	showData();
	function showData()
	{
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
	}
    
?>

  </tbody>
</table>


</body>
<script>
        $("#addStudentButton").click(function()
        {
            var formData = {
                name:document.querySelector('#name').value,
				phone:document.querySelector('#phone').value,
				email:document.querySelector('#email').value
            }

            var ajaxObject = {
                    url:'processing.php',
                    data:formData,
                    method:'POST'
            }
            
            $.ajax(ajaxObject).done(ajaxSuccess);

            function ajaxSuccess(data)
            {
                if(data=="success")
                {
					alert("student added!");
					//document.querySelector('tbody').html = null;
                	window.location="form.php";
                    //console.log("access provided");
                }
                else
                {
                    console.log(data);
                    console.log("could not enter data");
                }
            }
            
        });
        
        
    </script>
</html>