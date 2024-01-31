<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>MySQL | Delete Data</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<header>
		<h1>
			PHP And DATABASE Practise Field
		</h1>
	</header>
	
	
	<div class="practise">
	
	<!---
	
	
	***************************** PHP Code Play *********************************************
	
	---->
	
	<?php include "db.php";?>
	<?php include "functions.php";?>
	
	<form action="myform_delete.php" method="post">
	
		<input type="text" name="username" placeholder="Username"/> <br />
		<input type="text" name="password" placeholder="Password"/><br />
		
		<p>Select ID for delete the row</p>
		
		<select name="id" id="">
		<?php
			showAllData();
		?>
		</select>
		<br />
		
		<input class="btn" type="submit" value="Delete" name="submit"/>
		
		
	</form>
	
	
	<?php
	
	
	
	if(isset($_POST['submit'])){
		
		global $conn;
		
		$id = $_POST['id'];
		
		$query = "DELETE FROM users WHERE id = '$id' ";
			
		$result = mysqli_query($conn, $query);
			
		if(!$result){
			die("Data deleting failed" . "<br />" . mysqli_error($conn));
		}
			
		else{
			echo"Data deleted successfully";
		}
		
	
	}
	
	
	
	/* $sql = "CREATE DATABASE test02";
	
	if(mysqli_query($conn, $sql)){
		echo "Database has created successfully";
	}
	else{
		"Database creation failed". mysqli_error($conn);
	} */
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
	
	</div>
	
	<footer><h2>Welcome for practising the MySQL DATABASE</h2></footer>
</body>
</html>