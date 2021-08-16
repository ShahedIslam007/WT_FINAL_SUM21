<?php include 'User_Header.php'; 

include 'controllers/UserController.php';
if(!isset($_COOKIE['loggedUser']))
{
header("Location: User_Login.php");
}
?>
 <html>
  <head>
  </head>
     <body>
	   	    <form method="Post"action=""style="
   background: rgb(0,0,0,0.7);;
   width: 40%;
   margin: 150px auto;
  padding: 20px 0;
   border-radius: 15px;
    box-shadow: 5px 5px 8px gray;
          ">


 <h2 align="center">Welcome  <?php echo $_COOKIE["loggedUser"]; ?> </h2>
  </body>
 </html>

<?php include 'User_Footer.php';?>
