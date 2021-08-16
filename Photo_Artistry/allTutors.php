<?php  
     include 'Controller/Tutors.php';
     $tutor = allTutors();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Photographers</title>
</head>
<body>
      <table align="center" border="1">
      	      <th>Sl</th>
                <th></th>
      	      <th>Name</th>
      	      <th>Phone</th>
      	      <th>Address</th>
                <th>Tution Topic</th>
      	      <th></th>
      	      <th></th>

      	      <?php  
                   $i=1;
                   foreach ($tutor as $t) 
                   {
                   	 echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td><img src='".$t["img"]."' width='100px' height='100px'></td>";
                             echo "<td>".$t["Name"]."</td>";
                             echo "<td>".$t["Phone"]."</td>";
                             echo "<td>".$t["Address"]."</td>";
                             echo "<td>".$t["Category"]."</td>";
                             echo '<td colspan="2"><a href="editTutor.php?id='.$t["id"].'">Edit</a></td>';
                             echo '<td><a href="deleteTutor.php?id='.$t["id"].'">Delete</a></td>';
                      echo "</tr>";
                      $i++;
                   }
      	      ?>
      </table>
</body>
</html>