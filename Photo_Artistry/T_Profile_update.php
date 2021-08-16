<?php  
         include 'Tutor_header.php'; 
       include 'controllers/TutorController.php';
       $id = $_GET["id"];
	   $t= getTutor($id);
 ?>


                   <form action="" method="post" enctype="multipart/form-data">
                	  <table align="center">
                           <input type="hidden" value="<?php echo $id ; ?>" name="id" >
							 
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
							      
                                  <input type="text" name="name" value="<?php echo $t["name"]; ?>" size="40">
                              </td>
							  </tr>
							 
                           
							 
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
                	  	     	 <td>
								   
                                    <input type="text" name="email" value="<?php echo $t["email"]; ?>" size="40">
                                 </td>
								 </tr>
							 
                               
							 
							 <tr>
                                 <td>
							       <b>Address</b>
							     </td>
							     <td>
								  
								   <input type="text" size="40" name="address" value="<?php echo $t["address"];?>">
                                 </td>
							  </tr>
							 
                           
							
				        
				               <tr>
                                  <td>
                                      <b>Phone Number</b>
                                  </td>
                                  <td>
                                      <input type="text" size="40" name="num" value="<?php echo $t["number"];?>">
                                  </td>
                               </tr>

                              
						  
				              
							
							<tr>
                               <td>
							        <b>Upload Your Photo</b> 
					           </td>
				           
                               <td>
							       <img src="<?php echo $t["img"];?>" width='290px' height='220px'>
							      
			    		       </td>
				            </tr>
							<tr>
                               <td></td>
				           
                               <td>
							       <input type="file" name="image">
			    		       </td>
				            </tr>
							 
				   
				             
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="T_update" value="Update">
							   </td><br>
					        </tr>
							
                	  </table>
                </form>   	


<?php include 'Tutor_footer.php';?>