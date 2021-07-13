<?php
function connect(){
	$conn = new mysqli("localhost", "tina", "123", "wtk", "3306");
	if ($conn -> connect_error){
		die("Connection Failed: " . $conn -> connect_error);
	}
	return $conn;
}
?>