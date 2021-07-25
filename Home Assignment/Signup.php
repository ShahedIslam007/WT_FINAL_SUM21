
<?php
            
     include 'Controller/temp.php';

?>

<html>
  <head>
	<title>Photographer SignUp</title>
  </head>
  <body>
                 <form action="" method="post">
                	  <table align="center">
                             <tr>
                             	 <td  align="center">
								   <b>
								     <h2>SignUp</h2>
								   </b>
								 </td>
                             </tr>
                	  	     <tr>
                	  	     	 <td>
								     <b>Name</b>
							     </td>
                	  	     </tr>
							 <tr>
      	    	   	   <td>
                           <input type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" size="15" >-
                           <input type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>" size="18">
                       </td>
                       <td>
                            <span>
                                <?php echo $err_name;?>   
                            </span>
                        </td>
      	    	   </tr>
							 
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
                	  	     </tr>
							 <tr>
                	  	     	 <td>
                                    <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                                 </td>
                                 <td>
                                    <span>
                                        <?php echo $err_email;?>    
                                    </span>
                                 </td> 
      	    	            </tr>
                	  	     
							 
							  <tr>
                             <td>
							     <b>Gender:</b>
							 
                                  <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
                            </td>
                             <td>
                                <span><?php echo $err_gender;?></span>
                            </td>
                              </tr>
							  
							  
                           <tr>
                            <td>
							<b>Address:</b>
      	    	   	   	       <select name="Address">
      	    	   	   	   	       <option selected disabled>Address</option>
								  <?php
								  foreach($Address as $a)
								  {
								  	if($add == $a)
								  		echo "<option selected>$a</option>" ;
								  	else
								  		echo "<option>$a</option>";
								  }
								  ?>
      	    	   	   	        </select>
      	    	   	             </td>
						    
      	    	   	              <td>
                              	<span>
                              	   <?php echo $err_add;?>
                              	</span>
                            </td>  
                            </tr>
							
							

                	  	     <tr>
                	  	     	 <td>
								    <b>Password<b>
								</td>
                	  	     </tr>
							 <tr>
							 <td>
      	    	   	   	           <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>" size="40">
      	    	   	         </td>

      	    	   	          <td>
      	    	   	   	             <?php echo $err_pass;?>
      	    	   	          </td>
      	    	            </tr>
							 
							 <tr>
                	  	     	 <td>
								   <b>Confirm Password</b>
								 </td>
                	  	     </tr>
							 <td>
      	    	   	   	         <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $cpass;?>" size="40">
      	    	   	         </td>

      	    	   	         <td>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	         </td>

							 
							
							 <tr>
							   <td>
							   <br><input type="checkbox" value="" <?php if(Service("")) echo "checked" ?> name="services[]"> I agree to the term of services<br><br>
							   </td>
							 
                              <td>
                              	<span>
                              	   <?php echo $err_services;?>
                              	</span>
                        </td>
							 </tr>
							 
                             <tr>
						     <td align="center"><input type="submit" value="SignUp" name="sign-up"></td><br>
					        </tr>
							 <tr>
                	  	     	<td> Do you have an account?<a href="Photographer_login.php">Sign in </a></td>
                	  	     </tr>

                	  	     <?php echo $err_db;?>
							
                	  </table>
                </form>   	
   </body>
</html>