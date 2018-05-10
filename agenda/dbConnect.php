<?php
	
	define('host', "localhost");
	define('db', 'u372777043_agend');
	define('user', 'u372777043_agend');
	define('pass', '102030');

	$con = mysqli_connect(host, user, pass, db) or die ('Error: ' . mysqli_error());
?>