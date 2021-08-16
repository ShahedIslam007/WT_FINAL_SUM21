
<?php
          include 'Dashboard.php';
		  include 'controllers/Gallery_Controller';
		  
		
		 
?>

<html>
  <head>
	<title>Add Gallery</title>
  </head>
  <body>
                 <form action="" method="post" enctype="multipart/form-data">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Add Gallery</h2>
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
							<b>Photographertype</b>
							</td>
							</tr>
							<tr>
							<td>
      	    	   	   	       <select name="Photographertype">
      	    	   	   	   	       <option selected disabled>Photographertype</option>
								  <?php
								  foreach($Photographertype as $a)
								  {
								  	if($Photographertype == $a)
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
                              	   <?php echo $err_Photographertype;?>
                              	</span>
                            </td>  
                            </tr>
				   
				      <tr>
                         <td>
                             <b>Image</b>
                         </td>
                     </tr>

                     <tr>
                         <td>
                             <input type="file" name="doc">
                         </td>
                    </tr>
					 
					       <tr>
		                     <td>
							   <b>Description</b>
							 </td>
						   </tr>
							<tr>
      	    	   	           <td>
      	    	   	   	         <textarea  cols="30" rows="5" name="desc"  ><?php echo $desc; ?></textarea>
      	    	   	           </td>
      	    	   	           <td>
                              	<span>
                              		<?php echo $err_desc;?>
                              	</span>
                              </td> 
      	    	        </tr>
					   <tr>
                       <td align="center">
                            <input type="submit" name="Add_Gallery" value="Add_Gallery">
                       </td>
                  </tr>
            </table>
      </form>
</body>
</html>