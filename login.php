<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style type="text/css">
		body{
			background-color: black;
		}

		.login{
			background-color: white;
			width: 33%;
		}

	</style>
</head>
<body>
	<div class="login">
	<form action="process.php" method="POST">
		<table class="logTable">
			<tr colspan = 2>
				<td>Login</td>
			</tr>
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username" placeholder="Enter Username" /></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="text" name="password" placeholder="Enter Password" /></td>
			</tr>
		</table>		
	</form>
	</div>
</body>
</html>

	