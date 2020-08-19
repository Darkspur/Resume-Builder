<!DOCTYPE html>
<html>
<head>
	<title>Sign Up: User</title>

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
	      <li><a href="index.php"><span class="glyphicon glyphicon-menu-left"></span> Back</a> </li>
	    </ul>
	  </div>
	</nav>
	
	<form action="signProcessUser.php" method="POST">
	<table>
		<tr>
			<td colspan="2" style="text-align: center;font-size: 50px">User Sign Up</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" placeholder="Enter Name" required></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" placeholder="Enter Email" required></td>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" placeholder="Enter Username" required></td>
		</tr>
		<tr>
			<td>Passowrd:</td>
			<td><input type="password" name="pass" placeholder="Enter Password" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" id="button" name="signup" value="SignUp" /></td>
		</tr>
	</table>
	</form>
	
</body>
</html>