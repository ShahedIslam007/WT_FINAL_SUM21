<?php
         
          include 'controllers/P_Controller';
		     
              $id = $_GET["id"]; 
            
	          $k = getUser($id);
?>

                 <form action="" method="post" enctype="multipart/form-data">
                	  <table align="center">
					        <input type="hidden" value="<?php echo $id ; ?>" name="id">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Manage Profile</h2>
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
							    
								 <input type="text" name="name" value="<?php echo $k["Name"]; ?>" size="40">
                              </td>
							
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
								</tr>
								<tr>
                	  	     	 <td>
                                    <input type="text" name="email" value="<?php echo $k["Email"]; ?>" size="40">
                                 </td>
								 </tr>
							 
                                 
								
                               
							 <tr>
                             <td>
							     <b>Gender:</b>
							      
                                  <input type="radio" name="gender" value="Male" <?php if ($k["Gender"] == "Male") echo "checked" ?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($k["Gender"]== "Female") echo "checked"?> > Female
								  
                            </td>
                             
                              </tr>
							  
							 <tr>
                                 <td>
							       <b>Photographer Type</b>
							     </td>
								 </tr>
								 <tr>
							     <td>
								  
								   <input type="text" name="Ptype" value="<?php echo $k["Ptype"];?>"size="40" >
                                 </td>
							  </tr>  
							  
                       
							
							<tr>
                         <td>
                             <b>Upload Your Photo</b>
                         </td>
                     </tr>

                     <tr>                               
                         <td>
						      <img src="<?php echo $k["Image"];?>" height ="180px"><br>
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
      	    	   	   	           <input type="Password"  name="password" value="<?php echo $k["Password"]; ?>"  size="40">
      	    	   	            </td>
                             </tr>
							 
                         
      	    	            
							 <tr>
                	  	     	 <td>
								   <b>Confirm Password</b>
								 </td>
								 </tr>
						    <tr>
                	  	
							 <td>
      	    	   	   	         <input type="Password"  name="confirm_password" value="<?php echo $k["Password"]; ?>"  size="40">
      	    	   	         </td>
                             </tr>
						
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="Update" value="Update">
							   </td>
					        </tr>
							 
							
                	  </table>
                </form>   	
  