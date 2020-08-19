<?php 
	session_start();

	$servername = "localhost";
	$username = $_SESSION['Username'];
	$dbname = "wpl";

	$conn = mysqli_connect($servername, 'root', '', $dbname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$result = mysqli_query($conn,"SELECT * FROM Resume WHERE Username = '$username'")
		OR die("Failed to query database ".mysqli_error($conn));

	$row = mysqli_fetch_array($result);	
	if ($row['Name'] == null) {
		header('Location:makeResume.php');
	}	
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>View Resume</title>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
	    body{
	      background-image: url("https://coolbackgrounds.io/images/backgrounds/index/aqua-d9b59c89.png");
	      background-repeat: no-repeat;
	    }

	    table{
	    		width:33%;
	    		margin-left: 33%;
	    		margin-top: 5%;
	    		background-color: rgba(0,0,0,0.6);
	    	}

	   	table th{
	    	color: white;
	    	font-size: 25px;
	    	margin: 5px;
	    	padding: 10px 10px;
	    }

	    table td{
	    	color: white;
	    	font-size: 25px;
	    	margin: 5px;
	    	padding: 10px 10px;
	    }

	    table input{
	    	color: black;
	    }

	    button{
	    	margin: 10px;
	    	padding: 10px 10px;
	    	font-size: 25px;
	    	background-color: green;
	    	border-radius: 30px;
	    	height: 70px;
	    	width: 120px;
	    	color: white;
	    	margin-left: 30%;
	    }

	    .btn1{
	    	margin-left: 280%;
	    }
    </style>
 </head>
 <body>

 	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Resume Builder</a>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="first.php"><span class="glyphicon glyphicon-menu-left"></span> Back</a> </li>
	      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	    </ul>
	  </div>
	</nav>
	
 	<table>
 		<tr>
 			<td colspan="2" style="text-align: center;font-size: 50px"><b>My Resume</b></td>
 		</tr>
 		<tr>
 			<td>Name:</td>
 			<td><?php echo "{$row['Name']}"; ?></td>
 		</tr>
 		<tr>
 			<td>Age:</td>
 			<td><?php echo "{$row['Age']}"; ?></td>
 		</tr>
 		<tr>
 			<td>Email:</td>
 			<td><?php echo "{$row['Email']}"; ?></td>
 		</tr>
 		<tr>
 			<td>Phone:</td>
 			<td><?php echo "{$row['Phone']}"; ?></td>
 		</tr>
 		<tr>
 			<td>College:</td>
 			<td><?php echo "{$row['College']}"; ?></td>
 		</tr>
 		<tr>
 			<td>Degree:</td>
 			<td><?php echo "{$row['Degree']}"; ?></td>
 		</tr>
 		<tr>
 			<td>Languages:</td>
 			<td><?php echo "{$row['Languages']}"; ?></td>
 		</tr>
 		<tr>
 			<td>Work Experience:</td>
 			<td><?php echo "{$row['WExp']}"; ?></td>
 		</tr>
 	</table>
 	<div class="btn">
 		<button onclick="window.location.href='editResume.php'" class="btn1">Edit</button>
 		<button onclick="window.location.href='delResume.php'">Delete</button>
 	</div>
 </body>
 </html>