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
                             <button name="Search">Search</button>
                         </td>
                     </tr> 
             </table>
      </form>
</body>
</html>