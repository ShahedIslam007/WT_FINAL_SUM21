
<?php  include 'controllers/UserController.php'; ?>

	 
<html>
<head>
	  <style>
	  body{
		   background-image:url(img2.jpg);
         background-position:justify;
         background-repeat: no-repeat;
        background-size: 1680px 1080px;
		  
		  color:white;
		  text-align:justify;
		  font-family: ageo;
          font-size: 22px;
	  }
	  .btn-link{
	  border-Width:2px solid white;
	
	background-color:;
	color:white;
	padding-left:30px;
	padding-right:30px;
	padding-top:15px;
	padding-bottom:15px;
	border-radius:2px;
	font-family:ageo;
	font-size: 15px;
	text-decoration:none;
}
	   </style>
	   <title>User Login</title>
</head>
<body>
       <form method="Post"action=""style="
   background: rgb(0,0,0,0.4);;
   width: 40%;
   margin: 150px auto;
  padding: 20px 0;
   border-radius: 15px;
    box-shadow: 5px 5px 8px gray;
          ">
      

      <form method="Post" action="">
      	    <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h1>Sign in</h1>
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
                	  	     	<td align="center" colspan="2">Create Account?  <a href="User_Signup.php">Sign Up </a></td>
                  </tr>
      	    	 
      	    </table>
      </form>
</body>
</html>

