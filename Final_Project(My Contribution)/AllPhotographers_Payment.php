<?php  
     include 'Controller/All_Payments.php';
     $photographer = allPhotographers();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Photographers Payment</title>
</head>
<body>
	  <h1 align="center">All Photographers Payment</h1>
      <table align="center" border="1">
      	      <th>Sl</th>
      	      <th>Customer Name</th>
      	      <th>Customer Paid</th>
      	      <th>Photographer Name</th>
              <th>Transiotion Via</th>
      	      <th></th>
      	      <th></th>

      	      <?php  
                   $i=1;
                   foreach ($photographer as $p) 
                   {
                   	 echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td>".$p["C_Name"]."</td>";
                             echo "<td>".$p["Paid"]."</td>";
                             echo "<td>".$p["P_Name"]."</td>";
                             echo "<td>".$p["Via"]."</td>";
                             echo '<td colspan="2"><a href="editPhotographerPayment.php?id='.$p["id"].'">Edit</a></td>';
                             echo '<td><a href="deletePhotographerPayment.php?id='.$p["id"].'">Delete</a></td>';
                      echo "</tr>";
                      $i++;
                   }
      	      ?>
      </table>
</body>
</html>