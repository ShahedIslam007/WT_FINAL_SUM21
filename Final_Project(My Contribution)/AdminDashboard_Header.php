<?php  
     session_start();

     if(!isset($_SESSION['data']))
     {
        header("Location: Admin_login.php");
     }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">
     <script src="JavaScript/Search.js"></script>
</head>
<body background="Picture/OIP (1).jpg">

      <section id="banner">
      	      <img src="Picture/logo2.png" class="logo">
      </section>

      <div>
<?php  
     include 'space.php';
?>  
          <a href="Admin_login.php" style="text-decoration: none; font-size: 28px;">Logout</a>
<?php  
     include 'space.php';
?>          
           <a href="Start.php" style="text-decoration: none; font-size: 28px;">Home</a>
      </div>
      