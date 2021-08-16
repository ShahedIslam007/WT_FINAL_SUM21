<?php  
     include 'Controller/Photographers.php';
     session_start();
     $photographer = [];
     if(isset($_SESSION['s_result']))
     {
        $photographer = $_SESSION['s_result'];
     }
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>All Photographers</title>
</head>
<body>
    <div align="right">

           <a href="AdminDashboard.php" style="text-decoration: none; font-size: 28px;">Dashboard</a>
      </div>
      <table align="center" border="1">
                <th>Sl</th>
                <th></th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Category</th>


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
                      echo "</tr>";
                      $i++;
                   }
                ?>
      </table>
</body>
</html>