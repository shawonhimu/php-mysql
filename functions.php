<?php
	
	function showAllData(){
		
		global $conn;
		$sql = "SELECT * FROM users ";
		$result = mysqli_query($conn, $sql);

		
		if (mysqli_num_rows($result) > 0) {
	  // output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$id = $row["id"];
					
				echo "<option value='$id'>$id</option>";
			}
		} 
		else {
		  echo "0 results";
		  mysqli_close($conn);
		}
		
	}


		
?>