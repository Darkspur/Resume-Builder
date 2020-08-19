<?php 
	session_start();

	$servername = "localhost";
	$username = $_SESSION['Username'];
	$dbname = "wpl";

	$conn = mysqli_connect($servername, 'root', '', $dbname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$result = mysqli_query($conn,"SELECT * FROM Resume")
		OR die("Failed to query database ".mysqli_error($conn));

	//$rows = mysqli_fetch_assoc($result);	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin View</title>
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

    </style>

 </head>
 <body>
 	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Resume Builder</a>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="firstAdmin.php"><span class="glyphicon glyphicon-menu-left"></span> Back</a> </li>
	      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	    </ul>
	  </div>
	</nav>
 	<table align="center" border="1">
 		<tr>
 			<th>Name</th>
 			<th>Age</th>
 			<th>Email</th>
 			<th>Phone</th>
 			<th>College</th>
 			<th>Degree</th>
 			<th>Languages</th>
 			<th>Work Experience</th>
 		</tr>
 		<?php
 		 while($rows=mysqli_fetch_array($result))
	    {
	      ?>
	      <tr>
	      <td><?php echo $rows['Name']; ?></td>
	      <td><?php echo $rows['Age']; ?></td>
	      <td><?php echo $rows['Email']; ?></td>
	      <td><?php echo $rows['Phone']; ?></td>
	      <td><?php echo $rows['College']; ?></td>
	      <td><?php echo $rows['Degree']; ?></td>
	      <td><?php echo $rows['Languages']; ?></td>
	      <td><?php echo $rows['WExp']; ?></td>
	      <tr>
	      <?php
	    }
	    ?>
 	</table>
 </body>
 </html>