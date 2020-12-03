<?php
	define("DATABASE_HOST", "localhost");
	define("DATABASE_USER", "ca17054");
	define("DATABASE_PASSWORD", "ca17054"); 
	$conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,'ca17054');
	if (!$conn){ die( "Could not connect to
database" );
} 
	//mysql_select_db("ca17054", $conn) or die ( "Could not open products database" ); 
?>