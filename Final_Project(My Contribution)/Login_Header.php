<?php  
     session_start();

     if(isset($_SESSION['data']))
     {
        header("Location: AdminDashboard.php");
     }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login/Sign-up</title>
	<script src="https://kit.fontawesome.com/3013859f94.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">
	<link rel="stylesheet" type="text/css" href="CSS/Style3.css">
	<link rel="stylesheet" type="text/css" href="CSS/Style4.css">
</head>
<body background="Picture/20.jpg">

