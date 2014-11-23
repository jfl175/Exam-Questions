<?php
	// Set database access credentials
	$DB_name	= 'examquestions';
	$user 		= 'root';
	$password 	= '123456';
	$host 		= '127.0.0.1';

	// Make connection to our database
	$mysqli = mysqli_connect($host, $user, $password) 
	or die('Could not connect: ' . mysqli_error($mysqli));

	// Select DB
	$db_selected = mysqli_select_db($mysqli, $DB_name) 
	or die('Can\'t use ' . $DB_name . ': ' . mysqli_error($mysqli));
?>