<?php 
          include 'UserDashboard.php';
         include 'controllers/User_Controller';
	   
 ?>
 
 
  
              <form action="" method="post"  enctype="multipart/form-data">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Payment</h2>
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
				       <td><b>
      	    	   	   	   From:
      	    	   	   </b></td>

      	    	   	   <td>
      	    	   	   	   <input type="text"  name="email" size="40" value="<?php echo $email;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_email;?>
      	    	   	   </td>
      	    	      </tr>
					  
					   <td><b>
      	    	   	   	   To:
      	    	   	      </b></td>

      	    	   	   <td>
      	    	   	   	   <input type="text"  name="email" size="40" value="<?php echo $email;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_email;?>
      	    	   	   </td>
      	    	      </tr>
							
                	  	      <tr>
                	  	     	 <td><b> Type of  Transaction </b></td>
                	  	     	 <td><input type="text" name="transaction" value="<?php echo $Ttype; ?>" size="40"></td>	
                              </tr>
							    
							  <tr> 
							     <td></td>
								 <td><span><?php echo $err_Ttype;?></span></td> 
      	    	              </tr>
							  
							  <tr>
                	  	     	 <td><b> Tansaction No </b></td>
                	  	     	 <td><input type="text" name="transaction_no" value="<?php echo $tn; ?>" size="40"></td>	
                              </tr>
							  <tr>  
							  <td></td>
								 <td><span><?php echo $err_tn;?></span></td> 
      	    	              </tr>
							  
							  <tr>
                	  	     	 <td><b> Date </b></td>
                	  	     	 <td><input type="text" name="date" value="<?php echo $date; ?>" size="40"></td>	
                              </tr>
							  <tr>  
							     <td></td>
								 <td><span><?php echo $err_date;?></span></td> 
      	    	              </tr>
							  
							  
							  <tr>
                	  	     	 <td><b> Balance </b></td>
                	  	     	 <td><input type="text" name="balance" value="<?php echo $balance; ?>" size="40"></td>
                              </tr>
							  <tr>	
							     <td></td>					 
                                 <td><span><?php echo $err_balance;?></span></td> 
      	    	              </tr>
                	  	     
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="transfer" value="Transfer">
							   </td><br>
					        </tr>
							 
							
                	  </table>
                </form> 
 