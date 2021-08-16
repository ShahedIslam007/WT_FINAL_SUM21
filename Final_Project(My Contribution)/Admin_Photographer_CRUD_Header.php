<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">
     <script type="text/javascript">
               function loadDoc()
               {
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET","AllPhotographers.php",true);
                    xhr.onreadystatechange = function()
                    {
                         if (this.readyState == 4 && this.status == 200) 
                         {
                              get("all").innerHTML = this.responseText;
                         }
                    };

                    xhr.send();
               }

               function get(id)
               {
                    return document.getElementById(id);
               }
     </script>
</head>
<body background="Picture/OIP (1).jpg">

      <section id="banner">
      	      <img src="Picture/logo2.png" class="logo">
      </section>

      <div class="home">
<?php  
     include 'space.php';
?>
           <a href="Start.php" style="text-decoration: none; font-size: 28px;">Home</a>
      </div>

      <div align="right">

           <a href="AdminDashboard.php" style="text-decoration: none; font-size: 28px;">Dashboard</a>
      </div>
      