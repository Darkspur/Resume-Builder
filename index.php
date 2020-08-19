<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
    	
    	body{
    		background-image: url("https://coolbackgrounds.io/images/backgrounds/index/aqua-d9b59c89.png");
    		background-repeat: no-repeat;
    	}

    	button{
    		margin: 10px;
    		padding: 10px 10px;
    		font-size: 35px;
    		background-color: green;
    		border-radius: 30px;
    		height: 150px;
    		width: 250px;
    		color: white;
    	}

    	.table{
    		width:33%;
    		margin-left: 33%;
    		margin-top: 5%;
    	}

    	.table td{
    		text-align: center;
    		color: white;
    		font-size: 40px;
    	}

    	h1{
    		font-size: 60px;
    		margin-left: 35%;
    		margin-top: 5%;
    		color: white;
    	}


    </style>
</head>
<body>
	<h1>RESUME BUILDER</h1>
	<table class="table" border="0">
		<tr>
			<td><b>Admin</b></td>
			<td><b>User</b></td>
		</tr>
		<tr>
			<td><button onclick="window.location.href='loginAdmin.php'">Login</button></td>
			<td><button onclick="window.location.href='loginUser.php'">Login</button></td>
		</tr>	
		<tr>
			<td><button onclick="window.location.href='signUpAdmin.php'">SignUp</button></td>
			<td><button onclick="window.location.href='signUpUser.php'">SignUp</button></td>
		</tr>
	</table>	
</body>
</html>