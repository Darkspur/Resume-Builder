<?php
		session_start();

		$servername = "localhost";
		$email = $_POST['email'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$age = $_POST['age'];
		$languages = $_POST['languages'];
		$wexp = $_POST['wexp'];
		$college = $_POST['college'];
		$degree = $_POST['degree'];
		$username = $_SESSION['Username'];
		$dbname = "wpl";

		$conn = mysqli_connect($servername, 'root', '', $dbname);

		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO Resume (Name, Age, Email, Phone, College, Degree, Languages, WExp, Username)
		VALUES ('$name','$age','$email','$phone','$college','$degree','$languages','$wexp','$username')";

		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		header('refresh:3;url=first.php');

		mysqli_close($conn);
	?> 