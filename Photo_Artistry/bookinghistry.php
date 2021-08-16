<?php 
    
     include 'Dashboard.php';	
     include 'controllers/User_Controller';
     session_start();
     $booking = [];
     if(isset($_SESSION['p_booking']))
     {
       $booking  = $_SESSION['p_booking'];
     }
?>


<html>
<head>
     <title>Booking</title>
</head>
<body>
      <table align="center" border="1">
                <th>Sl</th>
                <th></th>
                <th>Client Name</th>
                <th>ClientEmail</th>
                <th>Event Type</th>
				<th>Photographer Email:</th>
                

 


                <?php  
                   $i=1;
                   foreach ( $booking as $y) 
                   {
                     echo "<tr>";
                             echo "<td>$i</td>";
                            
                             echo "<td>".$y["Name"]."</td>";
                             echo "<td>".$y["Email"]."</td>";
                             echo "<td>".$y["type"]."</td>";
							 echo "<td>".$y["Pemail"]."</td>";
                             
							 
                      echo "</tr>";
                      $i++;
                   }
                ?>
      </table>
</body>
</html>