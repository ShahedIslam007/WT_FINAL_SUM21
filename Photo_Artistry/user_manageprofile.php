
<?php  
include 'User_Header.php';
		  include 'controllers/UserController.php';
     session_start();
     $user = [];
     if(isset($_SESSION['profile']))
     {
        $user = $_SESSION['profile'];
     }
?>
 <html>
  <head>
  </head>
     <body>
	   	    <form method="Post"action=""style="
   background: rgb(0,0,0,0.4);;
   width: 40%;
   margin: 150px auto;
  padding: 20px 0;
   border-radius: 15px;
    box-shadow: 5px 5px 8px gray;
          ">

      <table>
	  
	 
                <?php
           
            foreach($user as $a){
               
              echo "<td>";
			             echo  "<tr><h1>My Profile</tr></h1>";   
                        echo "<tr><img src='".$a["img"]."' width='250px' height='250px'></tr>";
                        echo "<br>";
                        echo "<br>";
                        echo "Name : ";
                        echo "<tr>".$a["name"]."</tr>";
                        echo "<br>";
                        echo "Email : ";
                        echo "<tr>".$a["email"]."</tr";
                        echo "<br>";
                        echo "<br>";
                        echo "Address : ";
                        echo "<tr>".$a["address"]."</tr>";
                        echo "<br>";
                        echo "Postal Code : ";
                        echo "<tr>".$a["postal_code"]."</tr>";
                        echo "<br>";
                        echo "Phone Number : ";
                        echo "<tr>".$a["number"]."</tr>";
                        echo "<br>";
                        echo "Gender : ";
                        echo "<tr>".$a["gender"]."</tr>";
                        echo "<br>";
                        echo "<br>";
                        echo '<tr><a href="Update.php?id='.$a["id"].'" class="btn btn-success">Update</a></tr>';
                        echo "<br>";
                        echo "<br>";
            echo "</td>";
            }
            ?>


      </table>
  </body>
</html>	
<?php include 'User_Footer.php';?>