<?php
	$servername = "localhost";
	$username = "arni";
	$password = "pass";
	$dbname   = "dbJCompany"

	$con = mysqli_connect($servername, $username, $password, $dbname);

	if(!$con){
		die("Connection failed.". mysqli_connect_error());
	}


?>