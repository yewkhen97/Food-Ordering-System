<?php
	$conn = new mysqli('localhost', 'root', '', 'ca17054');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>