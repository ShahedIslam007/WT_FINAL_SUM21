<?php
          include 'controllers/P_Controller';
		  $id = $_GET["id"]; 
            
	      $C = getContact($id);
?>

<form action="" method="post">
                	  <table align="center">
					        <input type="hidden" value="<?php echo $id ; ?>" name="id">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>MsgBox</h2>
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
							    
								 <input type="text" name="name" value="<?php echo $C["Name"]; ?>" size="40">
                              </td>
							
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
								</tr>
								<tr>
                	  	     	 <td>
                                    <input type="text" name="email" value="<?php echo $C["Email"]; ?>" size="40">
                                 </td>
								 </tr>
							  <tr>
                         <td>
                           <b> Message</b>
                         </td>
						 </tr>
						 <tr>
                        
                          <td> 
                              	<textarea cols="38" rows="3" name="Message"  >"<?php echo $C["Message"]; ?>"</textarea>
                              </td>
                              
                              
                            </tr>
							
                          <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="Send" value="Send">
							   </td><br>
					        </tr>       
								
                	  </table>
                </form>   			