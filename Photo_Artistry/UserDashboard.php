<?php
     if(!isset($_COOKIE['loggedUser']))
     {
        header("Location: User_login.php");
     }
?>
     <h4 align="center">Welcome <?php echo $_COOKIE["loggedUser"]; ?> </h4>


<html>
   
     <head>
	       
	 </head>
	 <body>
	    
	 
	 <div style="text-align: center">
	      <a><b>User Dashboard</b></a><br>
	      <br><a href="Photographerlist.php">Viewlist</a>
		  <a href="P_booking.php">BookingPhotographer</a>
		  <a href="User_Profile.php">User Profile</a>
		  <a href="UserMsgBox.php">Message</a>
		  <a href="UserPayment.php">Payment</a>
		  <a href="HomePage.php">Logout</a>
		  
		  
		 </div>
		 </body>
		</html>