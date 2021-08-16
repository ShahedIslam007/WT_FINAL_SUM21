<?php 
          include 'controllers/LearnerController.php';
	 
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/L_login.css">
	<title>Learner Login</title>
	<style>
input{
padding: 8px 10px;
border-radius: 5px;
margin: 5px;
border: 2px solid red;
}

 

</style>
</head>
<body>
      

      <form method="Post" action="" enctype='multipart/form-data' style="
background: rgb(0,0,0,0.5);
width: 40%;
margin: 150px auto;
padding: 20px 0;
border-radius: 15px;
box-shadow: 5px 5px 8px gray;
">
      	    <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Sign in</h2>
								   </b>
								 </td>
                             </tr>
							 
							 <tr>
                              <td>
                              	<span>
                              		<?php echo $err_db;?>	
                              	</span>
                              </td>
                            </tr>
							
							
      	    	   <tr>
				       <td>
      	    	   	   	   Email
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" placeholder="Email" name="email" size="40" value="<?php echo $email;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_email;?>
      	    	   	   </td>
      	    	   </tr>
				   
				   <tr>
      	    	   	   <td>
      	    	   	   	   Password
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="Password" placeholder="Password" name="password" size="40" value="<?php echo $pass;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_pass;?>
      	    	   	   </td>
      	    	   </tr>
				   
				   
                            <tr>
						     <td align="center" colspan="2"><input type="submit" name="login" value="Login"></td>
					        </tr>
							
      	    	   </tr>
				   
				   <tr>
                	  	     	<td align="center" colspan="2">Create Account?  <a href="Learner_Signup.php">Sign Up </a></td>
                  </tr>
      	    	 
      	    </table>
      </form>
</body>
</html>