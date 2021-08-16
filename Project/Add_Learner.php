<?php  include 'Tutor_header.php';  ?>
<?php  include 'controllers/LearnerController.php'; ?>


 <form action="" method="post" enctype="multipart/form-data">
                	  <table align="center">
                           
							 
							 <tr>
                              <td>
                              	<span>
                              		<?php echo $err_db;?>	
                              	</span>
                              </td>
                            </tr>
							 
							 
							 
                	  	     <tr>
                              <td>
                                   <b> Name  </b> 
                              </td>
							  <td>
                                  <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" size="40">
                              </td>
							  </tr>
							 
                             <tr>
							 <td>
							 </td>
                              <td>
                              	<span><?php echo $err_name;?></span>
                              </td>
                            </tr>
							 
							 
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								 </td>
                	  	     	 <td>
                                    <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                                 </td>
							 </tr>
							 
                             <tr>
								 <td>
								 </td>
                                 <td>
                                    <span><?php echo $err_email;?></span>
                                 </td> 
      	    	             </tr>
                	  	     
							 
							  <tr>
                                 <td>
							       <b>Address</b>
							     </td>
							     <td>
                                   <input type="text" placeholder="Address" size="40" name="address" value="<?php echo $add;?>">
                                 </td>
							  </tr>
							 
                              <tr>
                                 <td></td>								 
      	    	   	             <td>
                                 	<span><?php echo $err_add;?></span>
                                 </td>  
                              </tr>
							
							
							
							  <tr>
                                  <td>
                                     <b>Postal Code</b>
                                  </td>
                                  <td>
                                     <input type="text" placeholder="PostalCode" size="40" name="pcode" value="<?php echo $pcode;?>">
                                  </td>
                              </tr>
							  <tr>
								   <td></td>
                                   <td>
                       	               <span><?php echo $err_pcode;?></span>
                                   </td>
                              </tr>
							
							
							
							 <tr>
      	    	   	             <td>
      	    	   	   	           <b>Phone Number</b>
      	    	   	             </td>
      	    
      	    	   	             <td>
                                  	<input type="text" placeholder="Phone Number" name="num" value="<?php echo $num; ?>" size="40">
                                 </td>
					         </tr>
				             <tr> 
						         <td></td>
                                 <td>
                              	     <span><?php echo $err_num;?></span>
                                 </td> 
      	    	             </tr>
				   
							
							 
							 <tr>
                                 <td>
							          <b>Gender</b>
							     </td>
							     <td>
                                      <input type="text" placeholder="Gender" size="40" name="gender" value="<?php echo $gender;?>">
                                 </td> 
							 </tr>
							 
                             <tr>
							     <td></td>
                                 <td>
                                      <span><?php echo $err_gender;?></span>
                                 </td>
                             </tr>
							  
							  
                          
							<tr>
                                 <td>
							         <b>Blood Group</b>
							     </td>
							     <td>
      	    	   	   	             <select name="Blood">
      	    	   	   	   	         <option selected disabled>Select Blood Group</option>
								     <?php
								          foreach($Blood as $b)
								          {
								            	if($bld == $b)
								  		        echo "<option selected>$b</option>" ;
								  	      else
								  	        	echo "<option>$b</option>";
								          }
								     ?>
      	    	   	   	             </select>
      	    	   	             </td>
						    </tr>
							 
                            <tr>
                                 <td></td>								 
      	    	   	             <td>
                                        	<span><?php echo $err_bld;?></span>
                                 </td>  
                            </tr>
							
							
							<tr>
                               <td>
							        <b>Upload Your Photo</b> 
					           </td>
				           
                               <td>
							       <input type="file" name="image">
			    		       </td>
				            </tr>
							 
							

                	  	     <tr>
                	  	     	 <td>
								    <b>Password<b>
								</td>
							    <td>
      	    	   	   	           <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>" size="40">
      	    	   	            </td>
                             </tr>
							 
                             <tr>
							      <td></td>
      	    	   	              <td>
      	    	   	   	                <span><?php echo $err_pass;?></span>
      	    	   	              </td>
      	    	             </tr>
							 
							 <tr>
                	  	     	 <td>
								   <b>Confirm Password</b>
								 </td>
                	  	
							     <td>
      	    	   	   	           <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $cpass;?>" size="40">
      	    	   	             </td>
                             </tr>
							 
                             <tr>
							     <td></td>
      	    	   	             <td>
      	    	   	   	              <span><?php echo $err_cpass;?></span>
      	    	   	             </td>
                             </tr>
							 
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="Add" value="ADD">
							   </td><br>
					        </tr>
							
                	  </table>
                </form>   	


<?php include 'Tutor_footer.php';?>