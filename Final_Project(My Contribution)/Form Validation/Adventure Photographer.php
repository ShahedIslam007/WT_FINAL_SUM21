<?php
     include 'Validation_Adventure.php'; 
?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Adventure Photographer Booking Form</title>
    <script type="text/javascript">
    	     var hasError = false;

    	     function get(id)
    	     {
    	     	return document.getElementById(id);
    	     }

    	     function validate()
    	     {
    	     	refresh();
    	     	if(get("fname").value=="")
    	     	{
    	     		hasError = true;
    	     		get("err_name").innerHTML="**Name Recuired";
    	     	}
    	     	return !hasError;
    	     }

    	     function refresh()
    	     {
    	     	hasError = false;
    	     	get("err_name").innerHTML="";
    	     }
    </script>
</head>
<body>
      <h1>Adventure Photographer Booking Form</h1><br>
      <form method="post" action="" onsubmit="return validate()">
            <table>
                   <tr>
                       <td>
                           <b>Client Name *</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <input type="text" id="fname" name="fname" placeholder="Name" size="31" value="<?php echo $fname;?>">
                       </td>

                       <td>
                       	   
                       	   	      <span id="err_name">
                       	   	     <?php echo $err_name;?>
                       	   </span>
        
                       </td>
                   </tr>

                    <tr>
                       <td>
                           <b>Client Email *</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <input type="text" placeholder="Email" size="31" name="email" value="<?php echo $email;?>">
                       </td>

                       <td>
                       	   <span>
                       	   	     <?php echo $err_email;?>
                       	   </span>
                       </td>
                   </tr>

                   <tr>
                         <td>
                             <b>Upload Your Passport Size Photo *</b>
                         </td>
                     </tr>

                     <tr>
                         <td>
                             <input type="file" name="file">
                         </td>
                     </tr>

                   <tr>
                       <td>
                           <b>Client Phone Number *</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
      	    	   	   	   <select>
      	    	   	   	   	       <option selected="+88" disabled="+88">+88</option>
      	    	   	   	   </select> -
      	    	   	   	   <input type="text" name="number" size="23" placeholder="Number" value="<?php echo $number;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <span>
      	    	   	   	   	     <?php echo $err_phone;?>
      	    	   	   	   </span>
      	    	   	   </td>
                   </tr>

                   <tr>
                       <td>
                           <b>Client Address *</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <textarea  cols="33" name="address"><?php echo $addr;?></textarea>
                       </td>

                       <td>
                       	   <span>
                       	   	     <?php echo $err_addr;?>
                       	   </span>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <b>Client Gender *</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <input type="radio" <?php if($gender == "Male") echo "checked";?> name="Gender" value="Male">Male &nbsp;&nbsp;
                           <input type="radio"  <?php if($gender == "Female") echo "checked";?> name="Gender" value="Female">Female 
                       </td>

                       <td>
                       	   <span>
                       	   	     <?php echo $err_gender;?>
                       	   </span>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <b>Hire Date *</b>
                       </td>              
                   </tr>

                   <tr>
                       <td>
                            <select name="Day">
      	    	   	   	   	       <option selected="Day" disabled="Day">Day</option>

      	    	   	   	   	       <?php
                                        foreach ($Days as $dy) 
                                        {
                                        	if ($day==$dy) 
                                        	{
                                        		echo "<option selected>$dy</option>";
                                        	}
                                        	else
											   echo "<option>$dy</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	   	       echo $day;
      	    	   	   	   </select>

      	    	   	   	   <select name="Month">
      	    	   	   	   	       <option selected="Month" disabled="Month">Month</option>

      	    	   	   	   	       <?php
                                        foreach ($Months as $my) 
                                        {
                                        	if ($month==$my) 
                                        	{
                                        		echo "<option selected>$my</option>";
                                        	}
                                        	else
											   echo "<option>$my</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	   </select>

      	    	   	   	   <select name="Year">
      	    	   	   	   	       <option selected="Year" disabled="Year">Year</option>

      	    	   	   	   	       <?php
                                        foreach ($Years as $yy) 
                                        {
                                        	if ($year==$yy) 
                                        	{
                                        		echo "<option selected>$yy</option>";
                                        	}
                                        	else
											   echo "<option>$yy</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	   </select>
                       </td>

                       <td>
                       	   <span>
                       	   	     <?php echo $err;?>
                       	   </span>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <b>Hire Address *</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                            <textarea cols="33" placeholder="Address" name="address2"><?php echo $addr2;?></textarea>
                       </td>

                       <td>
                       	   <span>
                       	   	     <?php echo $err_addr2;?>
                       	   </span>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <span>
                                 <input type="text" size="15" placeholder="City" name="city"  value="<?php echo $city;?>">- 
                                 <input type="text" size="10" placeholder="State" name="state" value="<?php echo $state;?>">
                           </span>
                       </td>

                       <td>
      	    	   	   	   <span>
      	    	   	   	   	     <?php echo $err_region;?>
      	    	   	   	   </span>
      	    	   	   </td>
                   </tr>

                   <tr>
                   	   <td>
                   	   	   <input type="text" name="zip" placeholder="Postal/Zip Code" value="<?php echo $zip;?>">
                   	   </td>

                   	   <td>
      	    	   	   	   <span>
      	    	   	   	   	     <?php echo $err_zip;?>
      	    	   	   	   </span>
      	    	   	   </td>
                   </tr>

                   <tr>
                       <td>
                           <b>Expected Charge</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <input type="text" value="6000 TK Only">
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <b>Payment With *</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <input type="radio" <?php if($payment == "Bkash") echo "checked";?> name="Payment" value="Bkash">Bkash
                           <input type="radio" <?php if($payment == "Rocket") echo "checked";?> name="Payment" value="Rocket">Rocket
                           <input type="radio" <?php if($payment == "Nogot") echo "checked";?> name="Payment" value="Nogot">Nogot
                           <input type="radio" <?php if($payment == "Upay") echo "checked";?> name="Payment" value="Upay">Upay
                       </td>

                       <td>
      	    	   	   	   <span>
      	    	   	   	   	     <?php echo $err_payment;?>
      	    	   	   	   </span>
      	    	   	   </td>
                   </tr>

                   <tr><td></td></tr>
                   <tr><td></td></tr>
                   <tr><td></td></tr>

                   <tr>
                       <td align="center">
                            <input type="submit" name="upload" value="Submit">
                       </td>
                  </tr>
            </table>
      </form>
</body>
</html>