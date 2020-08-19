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

	if ($row['Name'] != null) {
		die("Session Already Exists");	
	}
 ?>								

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Make Resume</title>
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

 	<form action="makeResumeProcess.php" method="POST">
 		<table>
 			<tr>
 				<td colspan="2" style="font-size: 50px;text-align: center;">
 					<b>My Resume</b>
 				</td>
 			</tr>
 			<tr>
 				<td>Name:</td>
 				<td><input type="text" name="name" placeholder="Enter Name" title="Please enter valid name" /></td>
 			</tr>
 			<tr>
 				<td>Age:</td>
 				<td><input type="text" name="age" placeholder="Enter Age" pattern="[2-5]{1}[0-9]{1}" title="Age between 20-50" /></td>
 			</tr>
 			<tr>
 				<td>Email:</td>
 				<td><input type="email" name="email" placeholder="Enter Email" /></td>
 			</tr>
 			<tr>
 				<td>Phone:</td>
 				<td><input type="tel" name="phone" placeholder="Enter 10 digit Phone Number" pattern="[0-9]{10}" /></td>
 			</tr>
            <tr>
                <td>College:</td>
                <td><input type="text" name="college" placeholder="Enter College Name" /></td>
            </tr>
            <tr>
                <td>Degree:</td>
                <td><input type="text" name="degree" placeholder="Enter Degree" /></td>
            </tr>
 			<tr>
 				<td>Languages:</td>
 				<td><input type="text" name="languages" placeholder="Enter Languages" /></td>
 			</tr>
 			<tr>
 				<td>Work Experience:</td>
 				<td><input type="text" name="wexp" placeholder="Enter Work Experience" /></td>
 			</tr>
 			<tr>
 				<td colspan="2" ><input type="submit" id="button" name="submit" value="submit" style="background-color: green; text-align: center;color: white"></td>
 			</tr>
 		</table>
 	</form>
 </body>
 </html>