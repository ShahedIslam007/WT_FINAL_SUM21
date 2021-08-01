<?php  
     include 'Controller/Category.php';

     $catagory = allCatagories();
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>All Catagories</title>
</head>
<body>
      <h1 align="center">All Catagories</h1><br>
      <div align="center">
           <input type="text" name="" placeholder="search" size="40">
      </div>
      <table align="center">
               <th>Sl#</th>
               <th> Name</th>
               <th></th>
               <th></th>

               <?php  
                    $i=1;
                    foreach ($catagory as $c) 
                    {
                         echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td>".$c["Name"]."</td>";
                             echo '<td><a href="editCatagory.php?id='.$c["id"].'">Edit</a></td>';
                             echo '<td><a href="deleteCatagory.php?id='.$c["id"].'">Delete</a></td>';
                         echo "</tr>";
                         $i++;
                    }
               ?>
      </table>
</body>
</html>