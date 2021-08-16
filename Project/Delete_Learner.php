<?php  

       include 'Tutor_header.php'; 
       include 'controllers/LearnerController.php';
       $id = $_GET["id"];
	   $d =getLearner($id);
 ?>


                   <form action="" method="post" enctype="multipart/form-data">
                	  <table align="center">
                           <input type="hidden" value="<?php echo $id ; ?>" name="id" >
							 
							 
                	  	        <tr>
                	  	     	 <td>
                                    <input type="text" name="email" value="<?php echo $d["email"]; ?>" size="40">
                                 </td>
								 </tr>
							
                	  	     
							
                           
							
							<tr>
                               
                               <td>
							       <img src="<?php echo $d["img"];?>" width='290px' height='220px'>
							      
			    		       </td>
				            </tr>
							
							 
							
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="delete" value="Delete">
							   </td><br>
					        </tr>
							
                	  </table>
                </form>   	
							 
				   
                          
								
<?php include 'Tutor_footer.php';?>