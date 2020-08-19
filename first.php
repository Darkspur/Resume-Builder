<?php
	session_start();
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>

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

      .php{
        color: white;
        font-size: 100px;
        margin-left: 30%;
        margin-top: 10%; 
      }

      .btn1{
        margin: 10px;
        padding: 10px 10px;
        font-size: 35px;
        background-color: green;
        border-radius: 30px;
        height: 150px;
        width: 250px;
        color: white;
        margin-left: 34%;
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

    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Resume Builder</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

    <div class="php">
      <?php 
        echo "<p>Welcome {$_SESSION['Name']}!</p>";
       ?>
    </div>
    <div class="buttons">
      <button onclick="window.location.href='makeResume.php'" class="btn1">Make resume</button>
      <button onclick="window.location.href='viewResume.php'">View Resume</button>
    </div>
  	<br>
  </body>
  </html> 

