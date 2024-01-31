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
	<form action="exercise03.php" method="post">
	
		<input type="text" name="user" placeholder="Username"/> <br />
		<input type="text" name="pass" placeholder="Password"/><br />
		<input class="btn" type="submit" value="Update" name="submit"/>
		
		<select name="id" id="">
			<?php
			
			$connection = mysqli_connect('localhost','root','','test02');
			if(!$connection){
				die("Connection failed " . "<br />" . mysqli_error());
			}
			$sql = "SELECT * FROM users ";
			$result = mysqli_query($connection, $sql);
			
			if(!$result){
				die("Connection failed " . "<br />" . mysqli_connect_error());
			}
			while($row = mysqli_fetch_assoc($result)){
				$id = $row["id"];
				echo "<option value='$id'> $id </option>";
			}
			
			?>
		</select>
		
	</form>
	
	
	<?php 
	
	if(isset($_POST['submit'])){
		global $connection;
		$username = $_POST["user"];
		$password = $_POST["pass"];
		$id_Slct = $_POST["id"];
		
		$myquery = "UPDATE users SET username ='$username', password = '$password' WHERE id = '$id_Slct'  ";
		
		$rslt = mysqli_query($connection, $myquery);
		
		if (!$rslt){
			die("Connection failed " . "<br />" . mysqli_connect_error());
		}
		else{
			echo "Data has updated successfully";
		}
	
	
	}
	?>
	
	
	</div>
	
	<footer><h2>Welcome for practising the MySQL DATABASE</h2></footer>
</body>
</html>