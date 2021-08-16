<?php  
     include 'Controller/Photographers.php';
     $photographer = allPhotographers();
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
                <th>Category</th>
      	      <th></th>
      	      <th></th>

      	      <?php  
                   $i=1;
                   foreach ($photographer as $p) 
                   {
                   	 echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td><img src='".$p["img"]."' width='100px' height='100px'></td>";
                             echo "<td>".$p["Name"]."</td>";
                             echo "<td>".$p["Phone"]."</td>";
                             echo "<td>".$p["Address"]."</td>";
                             echo "<td>".$p["Category"]."</td>";
                             echo '<td colspan="2"><a href="editPhotographer.php?id='.$p["id"].'">Edit</a></td>';
                             echo '<td><a href="deletePhotographer.php?id='.$p["id"].'">Delete</a></td>';
                      echo "</tr>";
                      $i++;
                   }
      	      ?>
      </table>
</body>
</html>