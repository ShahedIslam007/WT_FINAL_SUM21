<?php  
     include 'Controller/AdminLoginController.php';
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Add New Admin</title>
</head>
<body>
      <form action="" method="post">
             <h1 align="center">Recruit New Admin</h1>
             <table align="center">
                     <tr>
                         <td><h2>New Admin Email</h2></td>
                         <td>
                             <input type="text" name="n_admin" value="<?php echo $n_admin; ?>" size="40">
                             <span>
                                 <?php echo $err_n_admin;?>   
                            </span>
                         </td>
                     </tr>

                     <tr>
                         <td><h2 align="center">Password</h2></td>
                         <td>
                             <input type="text" name="n_pass" value="<?php echo $n_pass; ?>" size="40">
                             <span>
                                 <?php echo $err_n_pass;?>   
                            </span>
                         </td>
                     </tr>
             </table><br><br>
             
             <div align="center">
                   <button name="admin">Submit</button>
             </div>
      </form>
</body>
</html>