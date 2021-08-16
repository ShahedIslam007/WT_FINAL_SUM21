<?php 
          include 'Learner_header.php';
          include 'controllers/LearnerController.php';
	   
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
                	  	     	 <td><b> Payment By </b></td>
                	  	     	 <td><input type="text" name="payment_by" value="<?php echo $Pby; ?>" size="40"></td>	
                              </tr>
							  <tr>
							     <td></td>
								 <td><span><?php echo $err_Pby;?></span></td> 
      	    	              </tr>
                	  	     
							 
							  <tr>
                	  	     	 <td><b> Received By </b></td>
                	  	     	 <td><input type="text" name="received_by" value="<?php echo $Rby; ?>" size="40"></td>	
                              </tr>
							  <tr>
							     <td></td>
       							 <td><span><?php echo $err_Rby;?></span></td> 
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
 
 
 
 <?php include 'Learner_footer.php';?>
 
 
 	  
	 