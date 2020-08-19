<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

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

		.login{
			background-color: rgba(0,0,0,0.6);
			width: 33%;
			color: white;
			font-size: 25px;
			margin-left: 33%;
			margin-top: 15%;
			width: 28%;
		}

		.logTable td{
			padding: 10px 10px;
			margin: 5px;
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

	<div class="login">
	<form action="logProcessAdmin.php" method="POST">
		<table class="logTable">
			<tr >
				<td colspan = 2 style="text-align: center; font-size: 40px;">Admin Login</td>
			</tr>
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username" placeholder="Enter Username" /></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" placeholder="Enter Password" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" id="button" name="login" value="Login" /></td>
			</tr>
		</table>		
	</form>
	</div>
</body>
</html>

	