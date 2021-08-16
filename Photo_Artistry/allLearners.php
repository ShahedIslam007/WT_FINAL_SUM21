<?php  
     include 'Controller/Learners.php';
     $learner = allTutors();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Learners</title>
</head>
<body>
      <table align="center" border="1">
      	      <th>Sl</th>
                <th></th>
      	      <th>Name</th>
      	      <th>Phone</th>
      	      <th>Address</th>
              <th>Learning Topic</th>
      	      <th></th>
      	      <th></th>

      	      <?php  
                   $i=1;
                   foreach ($learner as $l) 
                   {
                   	 echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td><img src='".$l["img"]."' width='100px' height='100px'></td>";
                             echo "<td>".$l["Name"]."</td>";
                             echo "<td>".$l["Phone"]."</td>";
                             echo "<td>".$l["Address"]."</td>";
                             echo "<td>".$l["Category"]."</td>";
                             echo '<td colspan="2"><a href="editLearner.php?id='.$l["id"].'">Edit</a></td>';
                             echo '<td><a href="deleteLearner.php?id='.$l["id"].'">Delete</a></td>';
                      echo "</tr>";
                      $i++;
                   }
      	      ?>
      </table>
</body>
</html>