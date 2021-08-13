<?php  
     include 'Controller/All_Payments.php';
     $photographer = allPhotographersReview();
?>  

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Photographers Review & Ratting</title>
</head>
<body>
       <h1 align="center">Photographers Review & Ratting</h1>
      <table align="center" border="1">
                <th>Sl</th>
                <th>Reviwer Name</th>
                <th>Review to</th>
                <th>Review</th>
                <th>Ratting</th>
                <th></th>
                <th></th>

                <?php  
                   $i=1;
                   foreach ($photographer as $p) 
                   {
                     echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td>".$p["Name"]."</td>";
                             echo "<td>".$p["ReviewTo"]."</td>";
                             echo "<td>".$p["Review"]."</td>";
                             echo "<td>".$p["Ratting"]."</td>";
                             echo '<td colspan="2"><a href="editPhotographerReview.php?id='.$p["id"].'">Edit</a></td>';
                             echo '<td><a href="deletePhotographerReview.php?id='.$p["id"].'">Delete</a></td>';
                      echo "</tr>";
                      $i++;
                   }
                ?>
      </table>
</body>
</html>