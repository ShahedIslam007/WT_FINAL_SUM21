<?php  
         include 'User_Header.php'; 
       include 'controllers/UserController.php';
      $id = $_GET["id"];
      $u= getUser($id);
 ?>

 <html>
  <head>
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
                           <input type="hidden" value="<?php echo $id ; ?>" name="id" >
                             
                             <tr>
                              <td>
                                  <span>
                                      <?php echo $err_db;?>    
                                  </span>
                              </td>
                            </tr>
                             
                             
                             
                               <tr>
                              <td>
                                   <b> Name </b> 
                              </td>
                              <td>
                                  
                                  <input type="text" name="name" value="<?php echo $u["name"]; ?>" size="40">
                              </td>
                              </tr>
                             
                           
                             
                             </tr>
                               <tr>
                                    <td>
                                    <b>Email</b>
                                </td>
                                    <td>
                                   
                                    <input type="text" name="email" value="<?php echo $u["email"]; ?>" size="40">
                                 </td>
                                 </tr>
                             
                               
                             
                             <tr>
                                 <td>
                                   <b>Address</b>
                                 </td>
                                 <td>
                                  
                                   <input type="text" size="40" name="address" value="<?php echo $u["address"];?>">
                                 </td>
                              </tr>
                             
                           
                            
                        
                               <tr>
                                  <td>
                                      <b>Phone Number</b>
                                  </td>
                                  <td>
                                      <input type="text" size="40" name="num" value="<?php echo $u["number"];?>">
                                  </td>
                               </tr>
  
                            <tr>
                               <td>
                                    <b>Upload Your Photo</b> 
                               </td>
                           
                               <td>
                                   <img src="<?php echo $u["img"];?>" width='290px' height='220px'>
                                  
                               </td>
                            </tr>
                            <tr>
                               <td></td>
                           
                               <td>
                                   <input type="file" name="img">
                               </td>
                            </tr>
                             
                   
                             
                             
                             <tr>
                               <td align="center" colspan="2">
                                 <input type="submit" name="user_update" value="Update">
                               </td><br>
                            </tr>
                            
                      </table>
                </form>       

 
   </body>
  </html>

<?php include 'User_Footer.php';?>