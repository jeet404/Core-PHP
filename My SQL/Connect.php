<?php
	error_reporting(0);
	$servername = "localhost"; // 0.0.0.0:3306
	$username = "root";
	$password = ""; //blank/null/empty
	#$password = "root"; //For mobile users
	// Create connection
	$con = mysqli_connect($servername, $username, $password);
	mysqli_select_db($con, "ksc_students");
	// Check connection
	if (!$con) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
?>