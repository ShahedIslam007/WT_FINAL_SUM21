<?php   include 'User_Header.php'; 
      include 'controllers/UserController.php'; ?>

	
<html>
       <head>
	    <style>
	   body{
         background-image:url(img5.jpg);
         background-position:justify;
         background-repeat: no-repeat;
        background-size: 1680px 1080px;
        color:black;
		  text-align:center;
		  font-family: ageo;
          font-size: 17px;
		  color:white;
	  }
	  </style>
         <title>Booking Request for a photographer</title>
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
							 <td> <input type="text" placeholder="Email"  name="email" value="<?php echo $email; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><?php echo $err_email;?></span></td>
                            </tr>
							
							
							 <tr>
                                   <td>
                                    <b>Client Phone Number</b>
                                   </td>
             </tr>
							
							
							 <tr>
                                   <td>
                                      <input type="text"  placeholder="Number" name="num" value="<?php echo $num; ?>" size="40">
                              </td>
                           </tr>
                         <tr>
                              <td><b>Event Date</b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Date"  name="date" value="<?php echo $date; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><?php echo $err_date;?></span></td>
                            </tr>
							
							  	
							<tr>
                              <td><b>Photographer Name</b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Name" name="pname" value="<?php echo $pname; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><span><?php echo $err_pname;?></span></td>
					        </tr>
								
							
                            <tr>
                            <td>
                              <b>Feel free to ask any query</b>
                            </td>
                            </tr>
							
                            <tr>
                            <td>
                            <textarea  cols="38" rows="5" name="message"  placeholder="Any Query"  ><?php echo $message; ?></textarea>
                            </td>
							</tr>

                            <tr>
                            <td>
                                  <span><?php echo $err_message;?></span>
                            </td> 
                            </tr>
							
							<tr>
                              <td align="center"><a href="User_Dashboard.php"><input type="submit" name="User_Booking_request" value="Submit"></td>
                    </tr>
      
                        </table>
                    </form>
        </body>
</html>

<?php include 'User_Footer.php';?>
