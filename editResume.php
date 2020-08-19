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
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Resume</title>
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

	   	table td{
	    	text-align: center;
	    	color: white;
	    	font-size: 25px;
	    	margin: 5px;
	    	padding: 10px 10px;
	    }

	    table input{
	    	color: black;
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

 	<form action="editResumeProcess.php" method="POST">
 		<table>
 			<tr>
 				<td colspan="2" style="text-align: center;font-size: 50px">Edit Resume</td>
 			</tr>
 			<tr>
 				<td>Name: </td>
 				<?php echo '<td><input type="text" name="name" value="' . $row['Name'] . '"></td>';; ?>
 			</tr>
 			<tr>
 				<td>Age: </td>
 				<?php echo '<td><input type="text" name="age" value="' . $row['Age'] . '"></td>';; ?>
 			</tr>
 			<tr>
 				<td>Email: </td>
 				<?php echo '<td><input type="text" name="email" value="' . $row['Email'] . '"></td>';; ?>
 			</tr>
 			<tr>
 				<td>Phone: </td>
 				<?php echo '<td><input type="text" name="phone" value="' . $row['Phone'] . '"></td>';; ?>
 			</tr>
 			<tr>
 				<td>Languages: </td>
 				<?php echo '<td><input type="text" name="languages" value="' . $row['Languages'] . '"></td>';; ?>
 			</tr>
 			<tr>
 				<td>Work Experience: </td>
 				<?php echo '<td><input type="text" name="wexp" value="' . $row['WExp'] . '"></td>';; ?>
 			</tr>
 			<tr>
 				<td colspan="2"><input type="submit" value="Submit"></td>
 			</tr>
 		</table>
 	</form>
 </body>
 </html>