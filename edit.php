<!DOCTYPE html>
<html>
<head>
	<title>Edit student</title>
</head>
<body>
	<h1>Edit student data</h1>
	<form method="POST" action="update.php">
    <?php
        require_once('dal.php');
        $id = $_GET["id"];
        $obj = new DBConnection;
        $rows = $obj->executeQuery("SELECT * FROM student WHERE id =".$id,"select");
        $row = $rows[0];
		echo "<input type='text' name='name' value=".$row['name']." placeholder='name'>";	
		echo "<input type='tel' name='phone' value=".$row['contact']." placeholder='phone'>";	
        echo "<input type='email' name='email'value=".$row['email']." placeholder='email'>";
        echo "<input type='hidden' name='id'value=".$row['id'].">";
    ?>
    <input type="submit" value="submit">
	</form>
</body>
</html>

