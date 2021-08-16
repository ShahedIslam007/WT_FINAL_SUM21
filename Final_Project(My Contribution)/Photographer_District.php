<?php  
     include 'Controller/Photographers.php';
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Sorting Photographer</title>
</head>
<body>
    <div align="right">

           <a href="AdminDashboard.php" style="text-decoration: none; font-size: 28px;">Dashboard</a>
      </div>
      <form method="post" action="">
             <h1 align="center">Sorting Photographer By District</h1>

             <table align="center">
                     <tr>
                         <td>
                             <h2>Enter District</h2>
                         </td>

                         <td>
                             <input type="text" name="district" size="30" value="<?php echo $district;?>">
                             <span>
                               <?php echo $err_district;?>   
                         </span>
                         </td>
                     </tr>
             </table>

             <table align="center">
                     <tr>
                         <td>
                             <button name="Submit">Search</button>
                         </td>
                     </tr> 
             </table>
      </form>
</body>
</html>