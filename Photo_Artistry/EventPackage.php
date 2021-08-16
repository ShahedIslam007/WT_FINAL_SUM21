<?php  include 'controllers/UserController.php'; ?>

	
<html>
       <head>
	   <style>
	   body{
         background-image:url(img4.jpg);
         background-position:justify;
         background-repeat: no-repeat;
        background-size: 1680px 1080px;
        color:black;
		  text-align:center;
		  font-family: ageo;
          font-size: 25px;
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
                    <form action="" method="post" enctype="multipart/form-data">
                    
					
                    <table align="center">
                             <tr>
                               <td  align="center">
                                 <b><h1>Package</h1></b>
                               <td> 
                              </tr>
                              	
							<tr>
                              <td><b>Event Name</b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><span id="err_name"><?php echo $err_name;?></span></td>
                            </tr>
							
							<tr>
                              <td><b>Discount</b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Discount"  name="dis" value="<?php echo $dis; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><span id="err_dis"><?php echo $err_dis;?></span></td>
                            </tr>
							
							
							 <tr>
                                   <td>
                                    <b>Contact Number</b>
                                   </td>
                             </tr>
							 <tr>
							 
                                   <td>
                                      <input type="text"placeholder="Number"  name="num" value="<?php echo $num; ?>" size="40">
                              </td>
                           </tr>
						    
                            <tr>
							<td><span id="err_date"><?php echo $err_date;?></span></td>
                            </tr>
                         <tr>
                              <td><b> Date</b></td>
							</tr>
							 
                            <tr>
							 <td> <input type="text" placeholder="Date"  name="date" value="<?php echo $date; ?>" size="40"></td>
                            </tr>
							 
                            <tr>
							<td><span id="err_date"><?php echo $err_date;?></span></td>
                            </tr>
							
							
							
							<tr>
                              <td align="center"><input type="submit" name="User_event" value="Submit"></td>
                    </tr>
      
                        </table>
                    </form>
        </body>
</html>

<?php include 'User_Footer.php';?>
