<?php 
     $fname="";
     $lname="";
     $err_name="";
     $email="";
     $err_email="";
     $number="";
     $err_phone="";
     $addr="";
     $err_addr="";
     $gender="";
     $err_gender="";
     $day="";
     $month="";
     $year="";
     $err="";
     $addr2="";
     $err_addr2="";
     $city="";
     $state="";
     $err_region="";
     $zip="";
     $err_zip="";
     $payment="";
     $err_payment="";

     $hasError=false;

     $Days= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
     $Months= array("January","February","March","April","May","June","July","Agust","September","Octobor","November","December");
     $Years= array("2021","2022","2023","2024","2025");

     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
     	if (empty($_POST["fname"]) && empty($_POST["lname"]))   //Name Validation
     	{
     		$err_name="First Name & Last Name Required";
			$hasError = true;
     	}

     	elseif(is_numeric($_POST["fname"]) || is_numeric($_POST["lname"]))  
     	{
     		$err_name="First Name & Last Name Should not be Start With Numeric";
			$hasError = true;
     	}

     	elseif(!empty($_POST["fname"]) && !empty($_POST["lname"]))
		{
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
		}

		elseif (!empty($_POST["fname"])) 
		{
			if(!empty($_POST["lname"]))
			{
				$fname=$_POST["fname"];
				$lname=$_POST["fname"];
			}

			else if(empty($_POST["lname"]))
			{
				$err_name="Last Name Required";
			    $hasError = true;
			    $fname=$_POST["fname"];
			}
		}

		elseif (!empty($_POST["lname"])) 
		{
			if(empty($_POST["fname"]))
			{
				$err_name="First Name Recuired";
			    $hasError = true;
			    $lname=$_POST["lname"];
			}
		}

		if(empty($_POST["email"]))      //Email validation
     	{
			$err_email="Email Required";
			$hasError = true;
		}

		elseif(is_numeric($_POST["email"]))  
     	{
     		$err_email="Email Should not be Start With Numeric";
			$hasError = true;
     	}

		elseif(strpos($_POST["email"],'@') && strpos($_POST["email"],'.'))
		{
			$email=$_POST["email"];
		}

		elseif(!strpos($_POST["email"],'@') && !strpos($_POST["email"],'.'))
		{
             $err_email="First use @ and then .(dot)";
			 $hasError = true;
		}


		elseif(strpos($_POST["email"],'.'))
		{
			if(strpos($_POST["email"],'@'))
			{
                $err_email="First use @ and then .(dot)";
		        $hasError = true;
			}

			elseif(strpos($_POST["email"],'.'))
			{
				$err_email="First use @ and then .(dot)";
		        $hasError = true;
			}

			else
			{
				$err_email="First use @ and then .(dot)";
		        $hasError = true;
			}
		}

		elseif(strpos($_POST["email"],'@'))
		{
            if(!strpos($_POST["email"],'.'))
			{
                $err_email="First use @ and then .(dot)";
		        $hasError = true;
			}
		}


		if(empty($_POST["number"]))   //Phone Number validation
     	{
			$err_phone="Number Recuired";
			$hasError = true;
		}

        elseif(!is_numeric($_POST["number"]))
        {
            $err_phone="Number Has to be Numeric";
			$hasError = true;
        }

        else
        {
        	$number=$_POST["number"];
        }

		if(empty($_POST["address"]))    // Client Address Validation
     	{
			$err_addr="Address Required";
			$hasError = true;
		}

		else
		{
			$addr=$_POST["address"];
		}

		if(!isset($_POST["Gender"]))   //Gender Validation
		{
			$err_gender="Gender Required";
			$hasError = true;
		}
		else
		{
			$gender = $_POST["Gender"];
		}

		if (!isset($_POST["Day"]) && !isset($_POST["Month"]) && !isset($_POST["Year"]))  //Date, Month & Year Validation
		{
			$err= "Day, Month & Year Required";
			$hasError = true;
		}

		else if(isset($_POST["Day"]) && isset($_POST["Month"]) && isset($_POST["Year"]))
		{
			$day = $_POST["Day"];
			$month = $_POST["Month"];
			$year = $_POST["Year"];
		}

		elseif (!isset($_POST["Day"])) 
		{
			if(isset($_POST["Month"]) && isset($_POST["Year"]))
			{
				$err= "Day Required";
			    $hasError = true;
			    $month = $_POST["Month"];
			    $year = $_POST["Year"];
			}

			elseif(isset($_POST["Month"]))
			{
                $err= "Day & Year Required";
			    $hasError = true;
			    $month = $_POST["Month"];
			}

			elseif(isset($_POST["Year"]))
			{
                $err= "Day & Month Required";
			    $hasError = true;
			    $year = $_POST["Year"];
			}
		}

		elseif (!isset($_POST["Month"])) 
		{
			if(isset($_POST["Day"]) && isset($_POST["Year"]))
			{
				$err= "Month Required";
			    $hasError = true;
			    $day = $_POST["Day"];
			    $year = $_POST["Year"];
			}

			elseif(isset($_POST["Day"]))
			{
                $err= "Month & Year Required";
			    $hasError = true;
			    $day = $_POST["Day"];
			}

			elseif(isset($_POST["Year"]))
			{
                $err= "Day & Month Required";
			    $hasError = true;
			    $year = $_POST["Year"];
			}
		}

		elseif (!isset($_POST["Year"])) 
		{
			if(isset($_POST["Day"]) && isset($_POST["Month"]))
			{
				$err= "Year Required";
			    $hasError = true;
			    $day = $_POST["Day"];
			    $month = $_POST["Month"];
			}

			elseif(isset($_POST["Day"]))
			{
                $err= "Month & Year Required";
			    $hasError = true;
			    $day = $_POST["Day"];
			}

			elseif(isset($_POST["Month"]))
			{
                $err= "Day & Year Required";
			    $hasError = true;
			    $month = $_POST["Month"];
			}
		}

		if(empty($_POST["address2"]))    // Hire Address Validation
     	{
			$err_addr2="Address Required";
			$hasError = true;
		}

		else
		{
			$addr2=$_POST["address2"];
		}
if(empty($_POST["city"]) && empty($_POST["state"]))      //City & State Validation
     	{
			$err_region="City & State Required";
			$hasError = true;
		}

		elseif(is_numeric($_POST["city"]) || is_numeric($_POST["state"]))  
     	{
     		$err_region="City & State Should not be Start With Numeric";
			$hasError = true;
     	}

		elseif (!empty($_POST["city"])) 
		{
			if(!empty($_POST["state"]))
			{
				$city=$_POST["city"];
				$state=$_POST["state"];
			}

			else if(empty($_POST["state"]))
			{
				$err_region="State Required";
			    $hasError = true;
			    $city=$_POST["city"];
			}
		}

		elseif (!empty($_POST["state"])) 
		{
			if(empty($_POST["city"]))
			{
				$err_region="City Recuired";
			    $hasError = true;
			    $state=$_POST["state"];
			}
		}

		if(empty($_POST["zip"]))       // Zip Validation
     	{
			$err_zip="Zip/Postal Required";
			$hasError = true;
		}

		elseif(!is_numeric($_POST["zip"])) 
		{
			$err_zip="Zip/Postal Has to be Numeric";
			$hasError = true;
		}

		else
		{
			$zip=$_POST["zip"];
		}

		if(!isset($_POST["Payment"]))   //Payment Validation
		{
			$err_payment="Payment Required";
			$hasError = true;
		}
		else
		{
			$payment = $_POST["Payment"];
		}
     }
 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Event Photographer Booking Form</title>
    <script type="text/javascript">

    	     var hasError = false;
             function get(id)
             {
             	return document.getElementById(id);
             }

    	     function validate()
    	     {
    	     	refresh();
    	     	if(get("fname").value == "")
    	     	{
    	     		hasError = true;
    	     		get("err_name").innerHTML="**First Name Required";
    	     	}

    	     	if(get("lname").value == "")
    	     	{
    	     		hasError = true;
    	     		get("err_name").innerHTML="**Last Name Required";
    	     	}

    	     	if(get("fname").value == "" && get("lname").value == "")
    	     	{
    	     		hasError = true;
    	     		get("err_name").innerHTML="**First & Last Name Required";
    	     	}

    	     	if(get("email").value == "")
    	     	{
    	     		hasError = true;
    	     		get("err_email").innerHTML="**Email Required";
    	     	}

                //var atThe = get("email").value.indexOf('@');
                //var dot = get("email").value.indexOf('.');

                /*if(get("email").value.indexOf('.') > get("email").value.indexOf('@'))
                {
                    hasError = true;
                    get("err_email").innerHTML="**Invalid ('@') & ('.') Position";
                }*/

                if(get("number").value == "")
                {
                    hasError = true;
                    get("err_phone").innerHTML="**Phone Number Required";
                }

                if(isNaN(get("number").value))
                {
                    hasError = true;
                    get("err_phone").innerHTML="**Phone Number Should be Integer Value";
                }

                if(get("address").value == "")
                {
                    hasError = true;
                    get("err_addr").innerHTML="**Address Required";
                }

                if(!get("male").checked && !get("female").checked)
                {
                    hasError = true;
                    get("err_gender").innerHTML="**Gender Required";
                }

                if(get("Day").selectedIndex == 0 && get("Month").selectedIndex == 0 && get("Year").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Day, Month & Year Required";
                }

                if(get("Day").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Day Required";
                }

                if( get("Month").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Month Required";
                }

                if(get("Year").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Year Required";
                }

                if(get("Day").selectedIndex == 0 && get("Month").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Day & Month Required";
                }

                if(get("Day").selectedIndex == 0 && get("Year").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Day & Year Required";
                }

                if(get("Month").selectedIndex == 0 && get("Year").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Month & Year Required";
                }

                if(get("address2").value == "")
                {
                    hasError = true;
                    get("err_addr2").innerHTML="**Address Required";
                }

                if(get("city").value == "")
                {
                    hasError = true;
                    get("err_region").innerHTML="**City Required";
                }

                if(get("state").value == "")
                {
                    hasError = true;
                    get("err_region").innerHTML="**State Required";
                }

                if(get("city").value == "" && get("state").value == "")
                {
                    hasError = true;
                    get("err_region").innerHTML="**City & State Required";
                }

                if(get("zip").value == "")
                {
                    hasError = true;
                    get("err_zip").innerHTML="**Postal/Zip Code Required";
                }

                if(isNaN(get("zip").value))
                {
                    hasError = true;
                    get("err_zip").innerHTML="**Postal/Zip Code Should be Integer Value";
                }

                if(!validatePayment())
                {
                    hasError = true;
                    get("err_payment").innerHTML="**Payment Option Required";
                }
    	     	
    	     	return !hasError;
    	     }

             function validatePayment()
             {
                var n = document.querySelector('input[name="Payment"]:checked');
                if(n== null)
                {
                    return false;
                }
                return true;
             }

    	     function refresh()
    	     {
    	     	hasError = false;
                get("err_name").innerHTML="";
                get("err_email").innerHTML="";
                get("err_phone").innerHTML="";
                get("err_addr").innerHTML="";
                get("err_gender").innerHTML="";
                get("err").innerHTML="";
                get("err_addr2").innerHTML="";
                get("err_region").innerHTML="";
                get("err_zip").innerHTML="";
                get("err_payment").innerHTML="";
    	     }
    </script>
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
    	     	if(get("fname").value == "")
    	     	{
    	     		hasError = true;
    	     		get("err_name").innerHTML="**First Name Required";
    	     	}

    	     	if(get("lname").value == "")
    	     	{
    	     		hasError = true;
    	     		get("err_name").innerHTML="**Last Name Required";
    	     	}

    	     	if(get("fname").value == "" && get("lname").value == "")
    	     	{
    	     		hasError = true;
    	     		get("err_name").innerHTML="**First & Last Name Required";
    	     	}

    	     	if(get("email").value == "")
    	     	{
    	     		hasError = true;
    	     		get("err_email").innerHTML="**Email Required";
    	     	}

                //var atThe = get("email").value.indexOf('@');
                //var dot = get("email").value.indexOf('.');

                /*if(get("email").value.indexOf('.') > get("email").value.indexOf('@'))
                {
                    hasError = true;
                    get("err_email").innerHTML="**Invalid ('@') & ('.') Position";
                }*/

                if(get("number").value == "")
                {
                    hasError = true;
                    get("err_phone").innerHTML="**Phone Number Required";
                }

                if(isNaN(get("number").value))
                {
                    hasError = true;
                    get("err_phone").innerHTML="**Phone Number Should be Integer Value";
                }

                if(get("address").value == "")
                {
                    hasError = true;
                    get("err_addr").innerHTML="**Address Required";
                }

                if(!get("male").checked && !get("female").checked)
                {
                    hasError = true;
                    get("err_gender").innerHTML="**Gender Required";
                }

                if(get("Day").selectedIndex == 0 && get("Month").selectedIndex == 0 && get("Year").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Day, Month & Year Required";
                }

                if(get("Day").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Day Required";
                }

                if( get("Month").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Month Required";
                }

                if(get("Year").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Year Required";
                }

                if(get("Day").selectedIndex == 0 && get("Month").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Day & Month Required";
                }

                if(get("Day").selectedIndex == 0 && get("Year").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Day & Year Required";
                }

                if(get("Month").selectedIndex == 0 && get("Year").selectedIndex == 0)
                {
                    hasError = true;
                    get("err").innerHTML="**Month & Year Required";
                }

                if(get("address2").value == "")
                {
                    hasError = true;
                    get("err_addr2").innerHTML="**Address Required";
                }

                if(get("city").value == "")
                {
                    hasError = true;
                    get("err_region").innerHTML="**City Required";
                }

                if(get("state").value == "")
                {
                    hasError = true;
                    get("err_region").innerHTML="**State Required";
                }

                if(get("city").value == "" && get("state").value == "")
                {
                    hasError = true;
                    get("err_region").innerHTML="**City & State Required";
                }

                if(get("zip").value == "")
                {
                    hasError = true;
                    get("err_zip").innerHTML="**Postal/Zip Code Required";
                }

                if(isNaN(get("zip").value))
                {
                    hasError = true;
                    get("err_zip").innerHTML="**Postal/Zip Code Should be Integer Value";
                }

                if(!validatePayment())
                {
                    hasError = true;
                    get("err_payment").innerHTML="**Payment Option Required";
                }
    	     	
    	     	return !hasError;
    	     }

             function validatePayment()
             {
                var n = document.querySelector('input[name="Payment"]:checked');
                if(n== null)
                {
                    return false;
                }
                return true;
             }

    	     function refresh()
    	     {
    	     	hasError = false;
                get("err_name").innerHTML="";
                get("err_email").innerHTML="";
                get("err_phone").innerHTML="";
                get("err_addr").innerHTML="";
                get("err_gender").innerHTML="";
                get("err").innerHTML="";
                get("err_addr2").innerHTML="";
                get("err_region").innerHTML="";
                get("err_zip").innerHTML="";
                get("err_payment").innerHTML="";
    	     }
    </script>
</head>
<body>
      <h1>Adventure Photographer Booking Form</h1><br>
      <form method="Post" action="" onsubmit="return validate()">
            <table>
                   <tr>
                       <td>
                           <b>Client Name *</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <input type="text" id="fname" name="fname" placeholder="First Name" size="15" value="<?php echo $fname;?>">-
                           <input type="text" id="lname" name="lname" placeholder="Last Name" size="10" value="<?php echo $lname;?>">
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
                           <input type="text" id="email" placeholder="Email" size="31" name="email" value="<?php echo $email;?>">
                       </td>

                       <td>
                       	   <span id="err_email">
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
      	    	   	   	   <input type="text" id="number" name="number" size="23" placeholder="Number" value="<?php echo $number;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <span id="err_phone">
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
                           <textarea id="address" cols="33" name="address"><?php echo $addr;?></textarea>
                       </td>

                       <td>
                       	   <span id="err_addr">
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
                           <input type="radio" id="male" <?php if($gender == "Male") echo "checked";?> name="Gender" value="Male">Male &nbsp;&nbsp;
                           <input type="radio" id="female" <?php if($gender == "Female") echo "checked";?> name="Gender" value="Female">Female 
                       </td>

                       <td>
                       	   <span id="err_gender">
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
                            <select name="Day" id="Day">
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

      	    	   	   	   <select name="Month" id="Month">
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

      	    	   	   	   <select name="Year" id="Year">
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
                       	   <span id="err">
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
                            <textarea cols="33" id="address2" placeholder="Address" name="address2"><?php echo $addr2;?></textarea>
                       </td>

                       <td>
                       	   <span id="err_addr2">
                       	   	     <?php echo $err_addr2;?>
                       	   </span>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <span>
                                 <input type="text" id="city" size="15" placeholder="City" name="city"  value="<?php echo $city;?>">- 
                                 <input type="text" id="state" size="10" placeholder="State" name="state" value="<?php echo $state;?>">
                           </span>
                       </td>

                       <td>
      	    	   	   	   <span id="err_region">
      	    	   	   	   	     <?php echo $err_region;?>
      	    	   	   	   </span>
      	    	   	   </td>
                   </tr>

                   <tr>
                   	   <td>
                   	   	   <input type="text" id="zip" name="zip" placeholder="Postal/Zip Code" value="<?php echo $zip;?>">
                   	   </td>

                   	   <td>
      	    	   	   	   <span id="err_zip">
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
      	    	   	   	   <span id="err_payment">
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