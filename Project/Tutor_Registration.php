<?php
          include 'controllers/TutorController.php';
	      
?>
<html>
  <head>
        <link rel="stylesheet" type="text/css" href="style/T_Registration.css">
		   
		   <style>
input{
padding: 8px 10px;
border-radius: 5px;
margin: 5px;
border: 2px solid red;
}

 

</style>
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

		
	
  </head>
  <body>
  
              
                             <tr>
                             	 <td  align="center" colspan="2">
								     <h1><b>Tutor Registration Form</b></h1>
								 </td>
                             </tr>
					 
					  
			
              <form action="" method="post" enctype="multipart/form-data"  onsubmit="return validate()"style="
background: rgb(0,0,0,0.5);
width: 50%;
margin: 150px auto;
padding: 20px 0;
border-radius: 15px;
box-shadow: 5px 5px 8px gray;
">
			
                	  <table>
					  
					  <div class="main"> 
							 <tr>
                              <td>
                              	<span>
                              		<?php echo $err_db;?>	
                              	</span>
                              </td>
                            </tr>
							 
							
						<div class="class">
                	  	     <tr><td><b> Name  </b> </td>
							 <td><input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name; ?>" size="40"></td></tr>
						
							 
                             <tr><td></td> <td>
                              	<span id="err_name"><?php echo $err_name;?></span>
                              </td></tr>
							 
							  </div>
							
							 </tr><tr><td><b>Email</b></td><td>
                              <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                               </td></tr>
							 
                                 <tr><td></td><td>
                                    <span><?php echo $err_email;?></span>
                                 </td> </tr>
                	  	    
							
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
      	    	   	   	           <b>National ID Number</b>
      	    	   	          </td>
      	    	  
      	    	   	          <td>
                                  	<input type="text" placeholder="NID Number" name="nid" value="<?php echo $nid; ?>" size="40">
                              </td>
					    </tr>
				        <tr>
						      <td></td>
                              <td>
                              	<span>
                              		<?php echo $err_nid;?>	
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
                                 <td>
							     </td>								 
      	    	   	              <td>
                              	<span>
                              	   <?php echo $err_bld;?>
                              	</span>
                            </td>  
                            </tr>
							
							<tr>
                               <td>
							        <b>Upload Your Photo</b> 
					           </td>
				           
                               <td>
							       <input type="file" name="image" >
			    		       </td>
				            </tr>
							 </tr>
				   
				             <tr>
							
							
							<tr>
                               <td>
					               <b>Category</b>  
					           </td>
					           <td>
      	    	   	   	         <textarea  cols="38" rows="3" name="category"  size="40"><?php echo $category; ?></textarea>
      	    	   	           </td>
							   </tr>
							    <tr>
							   <td></td>
							   <td>
                              	<span>
                              		<?php echo $err_category;?>
                              	</span>
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
							 <td>
							 </td>
      	    	   	            <td>
      	    	   	   	             <?php echo $err_pass;?>
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
							 <td>
							 </td>
      	    	   	         <td>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	         </td>
                             </tr>
							 
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="register" value="Register">
							   </td><br>
					        </tr>
							
							
                	  </table>
                </form>  
</div>				
   </body>
</html>