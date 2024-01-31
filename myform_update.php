<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>MySQL | Update Data</title>
	
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
	
	<form action="myform_update.php" method="post">
	
		<input type="text" name="username" placeholder="Username"/> <br />
		<input type="text" name="password" placeholder="Password"/><br />
		
		<p>Select ID from here</p>
		<select name="id" id="">
		<?php
			showAllData();
		?>
		</select>

		<br />
		
		<input class="btn" type="submit" value="Update" name="submit"/>
		
		
	</form>
	
	
	
	
	
	<?php
	
	
	//make connection

	
	if(isset($_POST['submit'])){
		
		global $conn;
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];
		
		if($username && $password){
			
			$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id';";
			
			$result = mysqli_query($conn, $query);
			
			if(!$result){
				die("Data inserting failed" . mysqli_error($conn));
			}
			
			else{
				echo"Data updated successfully";
			}
			
		}
		
		else{
			echo "Please fill the required fields";
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