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