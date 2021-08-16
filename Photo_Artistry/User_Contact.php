<?php   include 'User_Header.php';
include 'controllers/UserController.php'; ?>

	
<html>
       <head>
         <title>Contact with Photographer</title>
     </head>

       <body>
	   	    <form method="Post"action=""style="
   background: rgb(0,0,0,0.4);;
   width: 40%;
   margin: 150px auto;
  padding: 20px 0;
   border-radius: 15px;
    box-shadow: 5px 5px 8px gray;
          ">
                    <form action="" method="post">
                    <table align="center">
                             <tr>
                               <td  align="center">
                                 <b><h1>Contact with Photographer </h1></b>
                               <td> 
                              </tr>
                              	
							<tr>
                              <td><b>Photographer Name  </b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><span id="err_name"><?php echo $err_name;?></span></td>
                            </tr>
								
							<tr>
                              <td><b>Photographer Email  </b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Email"  name="email" value="<?php echo $email; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><span id="err_name"><?php echo $err_email;?></span></td>
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
                              <td align="center"><input type="submit" name="user_contact" value="Submit"></td>
                    </tr>
      
                        </table>
                    </form>
        </body>
</html>

<?php include 'User_Footer.php';?>
