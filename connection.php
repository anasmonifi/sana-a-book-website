<?php

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "anas";


	$conn = mysql_connect("$hostname","$username","$password") or die(mysql_error());
	mysql_select_db("$database", $conn) or die(mysql_error());

?>