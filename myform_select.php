<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>MySQL | Select Data</title>
	
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
		<input class="btn" type="submit" value="Login" name="submit"/>
		
	</form>
	
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test01";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	
?>
	
	
	
	<select name="id" id="">
	<?php
		$sql = "SELECT id, username, password FROM users";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
			$id = $row["id"];
			
			echo "<option value='$id'>$id</option>";
		  }
		} else {
		  echo "0 results";
		}

		mysqli_close($conn);
		
	?>
	</select>
	
	
	
	</div>
	
	<footer><h2>Welcome for practising the MySQL DATABASE</h2></footer>
</body>
</html>