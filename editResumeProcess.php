<?php 
	session_start();

	$servername = "localhost";
	$username = $_SESSION['Username'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$languages = $_POST['languages'];
	$wexp = $_POST['wexp'];

	$dbname = "wpl";

	$conn = mysqli_connect($servername, 'root', '', $dbname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "UPDATE Resume SET Name = '$name', Age = '$age', Email = '$email', Phone = '$phone', Languages = '$languages', WExp = '$wexp' WHERE Username = '$username'";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	sleep(3);
	header('Location:viewResume.php');
	
 ?>