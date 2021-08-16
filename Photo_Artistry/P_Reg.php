<?php
          include 'controllers/R_Controller';
?>
<html>
  <head>
	<title>Photographer Registration</title>
	
	<style>
        input{
            padding: 8px 10px;
            border-radius: 5px;
            margin: 5px;
            border: 2px solid red;
        }
		</style>'
  </head>
  <body>
                
				 
				  
     <form method="Post"action=""  style="
        background: #BCFFB9;
        width: 40%;
        margin: 50px auto;
        padding: 20px 0; 
        border-radius: 15px;
        box-shadow: 5px 5px 8px gray;
      enctype="multipart/form-data">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Registration</h2>
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
                                   <b> Name</b> 
                              </td>
							  </tr>
							  <tr>
							  <td>
                                  <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" size="40">
                              </td>
							  
                              <td>
                              	<span>
                              		<?php echo $err_name;?>	
                              	</span>
                              </td>
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
								    <b>Photographer Type</b>
								</td>
							</tr>
							<tr>
                	  	     	 <td>
                                    <input type="text" placeholder="Ptype" name="Ptype" value="<?php echo $Ptype; ?>" size="40">
                                 </td>
								 
                                 <td>
                                    <span>
                                        <?php echo $err_Ptype;?>    
                                    </span>
                                 </td> 						   
						    </tr>
							
					<tr>
                         <td>
                             <b>Upload Your Photo</b>
                         </td>
                    </tr>
					<tr>
                         <td>
                             <input type="file" name="u_image">
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
						    <tr>
                	  	
							  <td>
      	    	   	   	         <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $cpass;?>" size="40">
      	    	   	          </td>
                             
      	    	   	            <td>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	            </td>
                             </tr>
							 
							 
							 
                            <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="Register" value="Register">
							   </td>
					        </tr>
							 
							
                	  </table>
                </form>   	
   </body>
</html>