<?php  
     include 'Controller/Photographers.php';
     $photographer = allBookingPhotographers();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Photographers</title>
</head>
<body>
	<h1 align="center">Photographer Booking Information</h1><br><br>
      <table align="center" border="1">
      	      <th>Sl</th>
      	      <th>Customer Name</th>
      	      <th>Customer Contact Number</th>
      	      <th>Booked Photographer</th>
              <th>Booking Location</th>
              <th>Photographer Type</th>
              <th>Photographer Number</th>


      	      <?php  
                   $i=1;
                   foreach ($photographer as $p) 
                   {
                   	 echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td>".$p["Customer"]."</td>";
                             echo "<td>".$p["C_Number"]."</td>";
                             echo "<td>".$p["Photographer"]."</td>";
                             echo "<td>".$p["Location"]."</td>";
                             echo "<td>".$p["Category"]."</td>";
                             echo "<td>".$p["P_Number"]."</td>";
                      echo "</tr>";
                      $i++;
                   }
      	      ?>
      </table>
</body>
</html>