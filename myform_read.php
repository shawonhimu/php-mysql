<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>MySQL | Read Data From DATABASE</title>	
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
	
	
	<?php
	
	
		
	$conn = mysqli_connect("localhost","root","","test01");
		
	if(!$conn){
		die("Connection failed" . mysqli_connect_error());
	}
	
	$query = "SELECT * FROM users";
		
	$result = mysqli_query($conn, $query);
		
	if(!$result){
		die("Data connection failed" . mysqli_error());
	}
	
	
	while($row = mysqli_fetch_assoc($result)){
		
		?>
		<pre>
		<?php
		print_r($row);
		?>
		</pre>
		<?php
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