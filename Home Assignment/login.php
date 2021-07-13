<?php 

	 include 'Controller/temp.php';
?>
<html>
<head>
	
	<title> Login</title>
</head>
<body>
      <h3>Login</h3>

      <form method="Post" action="">
      	    <table>
      	    	   <tr>
				       <td>
      	    	   	   	   Email:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" name="email" value="<?php echo $email;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_email;?>
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