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
</head>
<body>
	<nav>
		<ul>
			<li><a href="showData.php">Registrations</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
	<h1>Enter student data</h1>
	<form method="POST" action="processing.php">
		<input type="text" name="name" placeholder="name">	
		<input type="tel" name="phone" placeholder="phone">	
		<input type="email" name="email" placeholder="email">
		<input type="submit" value="submit">	

	</form>
</body>
</html>