<?php
	$conn = new PDO( 'mysql:host=localhost;dbname=inventory_for_php', 'root', '');
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>