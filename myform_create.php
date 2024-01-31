<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>MySQL | Create Data</title>
	
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
	<form action="myform_create.php" method="post">
	
		<input type="text" name="username" placeholder="Username"/> <br />
		<input type="text" name="password" placeholder="Password"/><br />
		<input class="btn" type="submit" value="Add data" name="submit"/>
		
	</form>
	
	
	<?php
	
	
	
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username && $password){
			$conn = mysqli_connect("localhost","root","","test01");
			
			if(!$conn){
				die("Connection failed" . mysqli_connect_error());
				}
				else{
					echo "Connected successfully. <br />";
					
				}
				
				
				$query = "INSERT INTO users(username, password) VALUES('$username', '$password')";
				
				$result = mysqli_query($conn, $query);
				
				if(!$result){
					die("Data inserting failed" . mysqli_error());
				}
				
				else{
					echo"Data inserted successfully";
				}
			
			}
		
		else{
			echo "Please fill the required field";
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