<?php
	include 'controllers/UserController.php';
	$key = $_GET["key"];
	$package = search($key);
	
	if(count($package) > 0){
		foreach($package as $p){
			echo "<a href='User_Login.php?id=".$p["id"]."'>".$p["name"]."</a><br>";
		}
	}
?>