<?php  
     include 'Controller/All_Payments.php';
     $learner = allTutors();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Photographers Payment</title>
</head>
<body>
	  <h1 align="center">All Tutors Payment</h1>
      <table align="center" border="1">
      	      <th>Sl</th>
      	      <th>Learner Name</th>
      	      <th>Learner Paid</th>
      	      <th>Tutor Name</th>
                <th>Transiotion Via</th>
      	      <th></th>
      	      <th></th>

      	      <?php  
                   $i=1;
                   foreach ($learner as $l) 
                   {
                   	 echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td>".$l["L_Name"]."</td>";
                             echo "<td>".$l["Paid"]."</td>";
                             echo "<td>".$l["T_Name"]."</td>";
                             echo "<td>".$l["Via"]."</td>";
                             echo '<td colspan="2"><a href="editTutorsPayment.php?id='.$l["id"].'">Edit</a></td>';
                             echo '<td><a href="deleteTutorsPayment.php?id='.$l["id"].'">Delete</a></td>';
                      echo "</tr>";
                      $i++;
                   }
      	      ?>
      </table>
</body>
</html>