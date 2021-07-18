<?php  
     include 'Controller/StudentController.php';
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Login</title>
</head>
<body>
      <h3>Login</h3>

      <form method="Post" action="">
              <table>
                  <tr>
                       <td>
                            UserName:
                       </td>

                       <td>
                            <input type="text" name="uname" value="<?php echo $uname;?>">
                       </td>

                       <td>
                            <?php echo $err_uname;?>
                       </td>
                  </tr>
                       
                       <tr>
                       <td>
                            Password:
                       </td>

                       <td>
                            <input type="Password" name="password" value="<?php echo $pass;?>">
                       </td>

                       <td>
                            <?php echo $err_pass;?>
                       </td>
                  </tr>
                       
                       
                            <tr>
                                   <td align="center" colspan="2"><input type="submit" value="Login" name="login"></td>
                                 </tr>
                  </tr>

                  <?php echo $err_db; ?>
                
              </table>
      </form>
</body>
</html>