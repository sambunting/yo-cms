<?php 
	function getDatabaseConnecton () {
		$db = new mysqli("localhost", "root", "", "YoCMS");
		return $db;
	}

	
?>