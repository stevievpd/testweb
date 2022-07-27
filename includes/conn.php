<?php
	$conn = new mysqli('localhost', 'root', '', 'growth');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>