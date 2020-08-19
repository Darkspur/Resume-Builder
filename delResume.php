<?php 
	session_start();

	$servername = "localhost";
	$username = $_SESSION['Username'];
	$dbname = "wpl";

	$conn = mysqli_connect($servername, 'root', '', $dbname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$result = mysqli_query($conn,"DELETE FROM Resume WHERE Username = '$username'")
		OR die("Failed to query database ".mysqli_error($conn));
	
	header('Location:first.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<script type="text/javascript">alert("Resume Deleted")</script>
 </body>
 </html>