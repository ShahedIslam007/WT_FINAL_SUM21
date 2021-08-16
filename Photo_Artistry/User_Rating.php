<?php  include 'User_Header.php';  
  include 'controllers/UserController.php'; 
  ?>
  <html>
       <head>
	    <style>
	   body{
         background-image:url(img6.jpg);
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

                     <table align="center">
                <h1>Photographer Rating Form </h1>
                     <form action="" method="post">
                       
                       
                            <tr> 
                              <td colspan="2">
                                  <b>
                                     Name
                                  </b>                    
                              </td>   
                            </tr>
  
                            
                              <td colspan="2">
                                  <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" size="40">
                              </td>

                              <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span>
                                  <?php echo $err_name;?>  
                                </span>
                              </td>
                            
              
                           <tr><td></td></tr>
                           <tr><td></td></tr>
                           <tr><td></td></tr>
              
                          
                    <tr>
                      <td>
                        <h3>How Would You Like to Rate :</h3>
                      </td>
                    </tr>
              
                            <tr>
                              <td>
                                   <b>
                                  1. Overall Experience
                                  </b>                   
                              </td>
                              <td >
                                  <input type="radio" name="experience" value="Excellent" <?php if($experience == "Excellent") echo "checked"?> >Excellent
                                  <input type="radio" name="experience" value="Good" <?php if($experience == "Good") echo "checked"?> >Good
                                  <input type="radio" name="experience" value="Fair" <?php if($experience == "Fair") echo "checked"?> >Fair
                                  <input type="radio" name="experience" value="Poor" <?php if($experience == "Poor") echo "checked"?> >Poor
                              </td>

                             <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span><?php echo $err_experience ; ?></span>
                              </td>
                                     
                            </tr>
              
                            <tr>
                              <td>
                                  <b>
                                  2. Photograph Quality
                                  </b>                   
                              </td>
                              <td >
                                   <input type="radio" name="quality" value="Excellent" <?php if($quality == "Excellent") echo "checked"?> >Excellent
                                   <input type="radio" name="quality" value="Good" <?php if($quality == "Good") echo "checked"?> >Good  
                                   <input type="radio" name="quality" value="Fair" <?php if($quality == "Fair") echo "checked"?> >Fair
                                   <input type="radio" name="quality" value="Poor" <?php if($quality == "Poor") echo "checked"?> >Poor
                              </td>

                             <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span><?php echo $err_quality ; ?></span>
                              </td>
 
                             </tr>
               
                             <tr>
                              <td>
                                  <b>
                                 3. Communication Level
                                  </b>                   
                              </td>
                              <td>
                                   <input type="radio" name="communication" value="Excellent" <?php if($communication == "Excellent") echo "checked"?> >Excellent
                                   <input type="radio" name="communication" value="Good" <?php if($communication == "Good") echo "checked"?> >Good  
                                   <input type="radio" name="communication" value="Fair" <?php if($communication == "Fair") echo "checked"?> >Fair
                                   <input type="radio" name="communication" value="Poor" <?php if($communication == "Poor") echo "checked"?> >Poor                   
                              </td>  

                              <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span><?php echo $err_communication ; ?></span>
                              </td> 
                            </tr>
              
                           <tr>
                              <td>
                                  <b>
                                  4. Level of comfort during the shoot
                                  </b>                   
                              </td>
                              <td>
                                   <input type="radio" name="shoot" value="Excellent" <?php if($shoot == "Excellent") echo "checked"?> >Excellent
                                   <input type="radio" name="shoot" value="Good" <?php if($shoot == "Good") echo "checked"?> >Good  
                                   <input type="radio" name="shoot" value="Fair" <?php if($shoot == "Fair") echo "checked"?> >Fair
                                   <input type="radio" name="shoot" value="Poor" <?php if($shoot == "Poor") echo "checked"?> >Poor                 
                              </td> 

                              <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span><?php echo $err_shoot ; ?></span>
                              </td> 
                            </tr>
              
                            <tr><td></td></tr>
                            <tr><td></td></tr>
                            <tr><td></td></tr>
               
                              <tr>
                            <td>
                              <b>Any Message...</b>
                            </td>
                   </tr>

     

                   <tr>
                                    <td colspan="2">
                                         <textarea  cols="50" rows="5" name="message"  ><?php echo $message; ?></textarea>
                                    </td>
                                    <td>
                                  <span>
                                      <?php echo $err_message;?>
                                  </span>
                              </td> 
                      </tr>
                                </span>
                              </td> 
                          </tr>

              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
                            <tr>
                              <td colspan="2" align="center">
                                    <input type="submit" name="user_submit" value="Submit"></td>
                              </td>
                            </tr>
              
                        </table>
                    </form>
        </body>
</html>


<?php include 'User_Footer.php';?>
