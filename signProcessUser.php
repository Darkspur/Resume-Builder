
	 <?php
		$servername = "localhost";
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		$dbname = "wpl";

		$conn = mysqli_connect($servername, 'root', '', $dbname);

		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
	
			$sql = "INSERT INTO User (Name, Email, Username, Password)
			VALUES ('$name','$email','$username','$password')";

			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		
		}
		
		mysqli_close($conn);
	?> 

	<?php 
		header('refresh:2;url=signUpUser.php');
	 ?>