
<?php
     if(!isset($_COOKIE['loggedUser']))
     {
        header("Location: P_Login.php");
     }
?>
     <h4 align="center">Welcome <?php echo $_COOKIE["loggedUser"]; ?> </h4>

    <html>
    <head>
	     <style>
             .navBar-btn a{
                   padding: 10px 20px;
                   background-color: blueviolet;
                   color: white;
                   border-radius: 5px;
                   text-decoration: none;
				   
              }
			  
         </style>
    </head>
 
    <body>
 
            <div  class= "navBar-btn" style="text-align: center; margin: 100px 0; ">
            <b>Photographer Dashboard</b><br>
            <br><a href="Viewlist.php">Viewlist</a>
            <a href="bookinghistry.php">BookingHistry</a>
            <a href="ContactList.php">ContactList</a>
            <a href="Addgallery.php">Addgallery</a>
            <a href="Allgallery.php">Allgallery</a>
            <a href="manageprofile.php">Manageownprofile</a>
            <a href="Payment.php">Payment</a>
            <a href="P_Profile.php">Profile</a>
            <a href="P_Search.php">Search</a>
            <a href="HomePage.php">Logout</a>
        </div>
    </body>
 
    </html>
