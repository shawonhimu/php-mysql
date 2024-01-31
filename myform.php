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
			PHP Code Practise Field
		</h1>
	</header>
	
	
	<div class="practise">
	
	<!---
	
	
	***************************** PHP Code Play *********************************************
	
	---->
	<form action="myform.php" method="post">
	
		<input type="text" name="username" placeholder="Username"/> <br />
		<input type="text" name="password" placeholder="Password"/><br />
		<input class="btn" type="submit" value="Login" name="submit"/>
		
	</form>
	
	
	<?php
	
	
	$conn = mysqli_connect("localhost","root","","test02");
	
	if(!$conn){
		die("Connection failed" . mysqli_connect_error());
	}
	else{
		echo "Connected successfully. <br />";
		
	}
	
	
	$sql = "CREATE DATABASE test02";
	
	if(mysqli_query($conn, $sql)){
		echo "Database has created successfully";
	}
	else{
		"Database creation failed". mysqli_error($conn);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
	
	</div>
	
	<footer><h2>Welcome for practising the course</h2></footer>
</body>
</html>