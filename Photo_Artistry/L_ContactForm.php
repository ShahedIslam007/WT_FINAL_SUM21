<?php
          include 'controllers/ContactController.php';
?>
<html>
       <head>
         <title>Learner Contact Form</title>
     </head>
             <body>
                    <form action="" method="post">
                    <table align="center">
                             
                              	
							<tr>
                              <td><b>Learner Name  </b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><span id="err_name"><?php echo $err_name;?></span></td>
                            </tr>
								
							
							
								
                            <tr>
                            <td>
                              <b>Message Box</b>
                            </td>
                            </tr>

                            <tr>
                            <td>
                            <textarea  cols="38" rows="5" name="message"  ><?php echo $message; ?></textarea>
                            </td>
							</tr>

                            <tr>
                            <td>
                                  <span><?php echo $err_message;?></span>
                            </td> 
                            </tr>
							
							<tr>
                              <td align="center"><input type="submit" name="lc_send" value="Send"></td>
                           </tr>
      
                        </table>
                    </form>
        </body>
</html>