<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>WordPress theme</title>
	
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
	<form action="exercise01.php" method="post">
	
		<input type="text" name="user" placeholder="Username"/> <br />
		<input type="text" name="pass" placeholder="Password"/><br />
		<input class="btn" type="submit" value="Login" name="submit"/>
		
	</form>
	
	
	<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test02";
	
	$connection = mysqli_connect($servername, $username, $password, $dbname);
	
	if(! $connection){
		die("Connection failed" . "<br />" . mysqli_connect_error());
	}
	
	if(isset($_POST['submit'])){
		
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass');";
		
		$result = mysqli_query($connection, $sql);
		
		if(!$result){
			die("Data inserting failed" . mysqli_error());
		}
		else{
			echo "Data has inserted successfullly";
		}
		
	}
	
	
	
	?>
	
	</div>
	
	<footer><h2>Welcome for practising the MySQL DATABASE</h2></footer>
</body>
</html>