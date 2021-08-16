<?php 
          include 'UserDashboard.php';
          include 'controllers/User_Controller';
	 
?>


<html>
       <head>
	      <title>Booking Request for a photographer</title>
         
     </head>
                 
       <body>
                    <form action="" method="post">
                    <table align="center">
                             <tr>
                               <td  align="center">
                                 <b><h1>Booking Form</h1></b>
                               <td> 
                              </tr>
                              	
							<tr>
                              <td><b>Client Name</b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><?php echo $err_name;?></span></td>
                            </tr>
							
							<tr>
                              <td><b>Client Email</b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Email"  name="pemail" value="<?php echo $pemail; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><?php echo $err_pemail;?></span></td>
                            </tr>
							
							
							
                            <tr>
                	  	     	 <td>
								    <b>Event Type</b>
								</td>
							</tr>
							<tr>
                	  	     	 <td>
                                    <input type="text" placeholder="type" name="type" value="<?php echo $type; ?>" size="40">
                                 </td>
								 
                                 <td>
                                    <span>
                                        <?php echo $err_type;?>    
                                    </span>
                                 </td> 						   
						    </tr>
							
                             <tr>
                              <td><b>Photographer Email</b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Email"  name="email" value="<?php echo $email; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><?php echo $err_email;?></span></td>
                            </tr>
							
							
							
                            <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="Booking" value="Booking">
							   </td>
					        </tr>
      
                        </table>
                    </form>
        </body>
</html>