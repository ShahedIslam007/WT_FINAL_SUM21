
<?php   include 'User_Header.php'; 
 include 'controllers/UserController.php'; ?>

	
<html>
  <head>
   		<script type="text/javascript">
              
            var hasError = false;
             function get(id)
             {
                 return document.getElementById(id);
             }
             function validate()
             {
                refresh(); 
               if(get("name").value == "")    //name validation
                 {
                     hasError = true;
                     get("err_name").innerHTML="**Name Required";
                 }

              else if(get("name").value.indexOf(' ') && get("name").value.length >=8)
                {
                    hasError = true;
                    get("err_name").innerHTML="**Space Required";
                }

          
               }    
                    
             function refresh()
             {
                 hasError = false;
                get("err_name").innerHTML="";
             }
   
   </script>
  
			 
			 
	<title>Registration</title>
  </head>
  <body>
                 <form action="" method="post" enctype="multipart/form-data">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>User Registration</h2>
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
                	  	     	 <td>
                                    <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                                 </td>
								 </tr>
							 
                                 <tr>
								 <td>
								 </td>
                                 <td>
                                    <span>
                                        <?php echo $err_email;?>    
                                    </span>
                                 </td> 
      	    	            </tr>
                	  	     
							 
							 <tr>
                            <td>
							<b>Address</b>
							</td>
							<td>
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
								  </tr>
							 
                                 <tr>
                                 <td>
							     </td>								 
      	    	   	              <td>
                              	<span>
                              	   <?php echo $err_add;?>
                              	</span>
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
                       	          <span>
                       	   	          <?php echo $err_pcode;?>
                       	           </span>
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
                                  <span>
                                      <?php echo $err_num;?>   
                                  </span>
                              </td>
                          </tr>
				   
				   
				   
							  <tr>
                             <td>
							     <b>Gender</b>
							 </td>
							 <td>
							 
                                  <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
								  <input type="radio" name="gender" value="Other" <?php if($gender == "Other") echo "checked"?> > Other
                            </td>
							 </tr>
							 
                             <tr>
							 <td>
							 </td>
                             <td>
                                <span><?php echo $err_gender;?></span>
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
							 </tr>
				   
				             <tr>
							
							
						
							

                	  	     <tr>
                	  	     	 <td>
								    <b>Password<b>
								</td>
							    <td>
      	    	   	   	           <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>" size="40">
      	    	   	            </td>
                             </tr>
							 
                             <tr>
							 <td>
							 </td>
      	    	   	            <td>
      	    	   	   	             <?php echo $err_pass;?>
      	    	   	            </td>
      	    	            </tr>
							 
							 
							 
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="register" value="Register">
							   </td><br>
					        </tr>
							 
							
                	  </table>
                </form>   	
   </body>
</html>

<?php include 'User_Footer.php';?>