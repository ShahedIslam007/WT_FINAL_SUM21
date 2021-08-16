<?php  
       include 'Tutor_header.php'; 
       include 'controllers/LearnerController.php';
       $id = $_GET["id"];
	   $c = getLearner($id);
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
							      
                                  <input type="text" name="name" value="<?php echo $c["name"]; ?>" size="40">
                              </td>
							  </tr>
							 
                           
							 
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
                	  	     	 <td>
								   
                                    <input type="text" name="email" value="<?php echo $c["email"]; ?>" size="40">
                                 </td>
								 </tr>
							 
                               
							 
							 <tr>
                                 <td>
							       <b>Address</b>
							     </td>
							     <td>
								  
								   <input type="text" size="40" name="address" value="<?php echo $c["address"];?>">
                                 </td>
							  </tr>
							 
                           
							
				        
				               <tr>
                                  <td>
                                      <b>Postal Code</b>
                                  </td>
                                  <td>
                                      <input type="text" size="40" name="pcode" value="<?php echo $c["postal_code"];?>">
                                  </td>
                               </tr>

                              
						  
				              
							
							<tr>
                               <td>
							        <b>Upload Your Photo</b> 
					           </td>
				           
                               <td>
							       <img src="<?php echo $c["img"];?>" width='290px' height='220px'>
							      
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
							     <input type="submit" name="edit" value="Edit">
							   </td><br>
					        </tr>
							
                	  </table>
                </form>   	


<?php include 'Tutor_footer.php';?>