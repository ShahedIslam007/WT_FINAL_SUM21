<?php  
     include 'Controller/Photographers.php';
     $id= $_GET["id"];
     $photographer= searchPhotographers($id);
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>All Photographers</title>
</head>
<body>
      <table align="center" border="1">
                <th></th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Category</th>
                <th></th>
                <th></th>

                <?php  
                     echo "<tr>";
                             echo "<td><img src='".$photographer["img"]."' width='100px' height='100px'></td>";
                             echo "<td>".$photographer["Name"]."</td>";
                             echo "<td>".$photographer["Phone"]."</td>";
                             echo "<td>".$photographer["Address"]."</td>";
                             echo "<td>".$photographer["Category"]."</td>";
                             echo '<td colspan="2"><a href="editPhotographer.php?id='.$photographer["id"].'">Edit</a></td>';
                             echo '<td><a href="deletePhotographer.php?id='.$photographer["id"].'">Delete</a></td>';
                      echo "</tr>";
                ?>
      </table>
</body>
</html>