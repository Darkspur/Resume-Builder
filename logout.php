<?php
	session_start();
	
	session_destroy();
	echo "You have been logged out";
	header('refresh:3;url=index.php');
 ?>