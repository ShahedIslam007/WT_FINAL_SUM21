<?php
     include 'models/db_config.php';    
     
	 $name="";
     $err_name="";

     $email="";
     $err_email=""; 
     $pemail="";
	 $err_pemail="";
	 
	 $gender="";
     $err_gender="";
	 
	 
	 $pass="";
     $err_pass="";
	 $cpass="";
     $err_cpass="";

     $services=[];
     $err_services="";

     $add="";
	 $err_add="";
	 
	 $type="";
	 $err_type="";
	 
	 $code="";
	 $err_code="";
	
	 $Ttype="";
	 $err_Ttype="";
	 
	 $tn="";
	 $err_tn="";
	 
	 $date="";
	 $err_date="";
	 
	 $Pby="";
	 $err_Pby="";
	 
	 $Rby="";
	 $err_Rby="";
	 
	 $balance="";
	 $err_balance="";
	 
	 
     $err_db="";
     $hasError = false;
	 
	

      function Service($service){
				global $services;
				foreach($services as $s){
					if($s == $service)
					{
					 return true;
				    }
				}
				return false;
			}

     if(isset($_POST["Submit"]))
     {
		 
		 //Name  Validation
				
                 if(empty($_POST["name"])){
               $err_name="Name required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["name"]) && !empty($_POST["name"]))
               {
               	if(strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 8)
               	{
                $name=$_POST["name"];
                }

                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 8)
               	{
                $err_name="Space required";
			        $hasError = true;
                }

                elseif(strpos($_POST["name"]," ") && strlen($_POST["name"]) < 8)
               	{
                $err_name="Name must contain at least 8 characters";
			        $hasError = true;
                }
                
                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) < 8)
                {
                	$err_name="Name must contain at least 8 characters with space";
			        $hasError = true;
                }
               
			   }
			   
				elseif(is_numeric($_POST["name"]))
				{
                    $err_name="Number is not allowed";
			        $hasError = true; 
				}
		      
			  
			  //Email  Validation

                 
            if(empty($_POST["email"])){
                  
                $err_email="Email Required ";
                 $hasError = true;
                 }
                
               else if(strpos($_POST["email"],"@"))
               {
                 if(strpos($_POST["email"],"."))
                 {
                  $email=$_POST["email"];
                }
                else{
                     $err_email="Not accepted";
                     $hasError = true;
                }
               }
              
                else if(strpos($_POST["email"],"."))
               {
                 if(strpos($_POST["email"],"."))
                 {
                   $err_email="use .(dot) after @";
                   $hasError = true;
                 }
                 
               }
               
               else{
                   $err_email="Invalid email";  
                   $hasError = true;
                }
				
				
				
				
             //Gender Validation
            
            if(!isset($_POST["gender"])){
                $err_gender="Gender Required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"]; 
                
            }  
			
			
			  
			  //Password Validation
			  
			  
     	
        if(empty($_POST["password"]))   
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])<=8 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}

		
       //Confirm password validation
	   
	   
		if(empty($_POST["confirm_password"]))    
     	{
			$err_cpass="Confirm Password Required";
			$hasError = true;
		}

		elseif ($_POST["password"]!=$_POST["confirm_password"])  
	    {
			$err_cpass="Password does not Matched";
			$hasError = true;
		}

		else
		{
			$pass=$_POST["password"];
			$cpass=$_POST["confirm_password"];
		}

         //Check Box Validation

         if(!isset($_POST["services"]))   
		{
			$err_services="   ";
			$hasError = true;
		}
		else
		{
			$services = $_POST["services"];
		}
		
		//Address Validation
			  
	    if(empty($_POST["Address"]))    
     	{
			$err_add="Address Required";
			$hasError = true;
		}

		else
		{
			$add=$_POST["Address"];
		}
		
		
		

			if(!$hasError){
		    $fileType = strtolower(pathinfo(basename($_FILES["v_image"]["name"]),PATHINFO_EXTENSION));
		    $file = "Gallery/Gallery_Images/".uniqid().".$fileType";
		    move_uploaded_file($_FILES["v_image"]["tmp_name"],$file);
			$rs = insertUser($name,$email,$gender,$add,$file,$cpass);
			if($rs === true){
				header("Location: User_login.php");
			}
			$err_db = "invalid";
			
		    }

	    }
		
		//........................................UserLogin...............................................
		
		
		else if(isset($_POST["login"]))
        {
		  
			   

	    if(empty($_POST["email"]))      //Email validation
     	{
			$err_email="Email Required";
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

		elseif(!strpos($_POST["email"],'@'))
		{
			if(strpos($_POST["email"],'.'))
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

		elseif (strpos($_POST["email"],'@') ) 
		{
			if (strpos($_POST["email"],'.')) 
			{
			    $email=$_POST["email"];
			}

			elseif (!strpos($_POST["email"],'.') || strpos($_POST["email"],'@'))
			{
				$err_email="First use @ and then .(dot)";
			    $hasError = true;
			}
			
		}
		
		if(empty($_POST["password"]))   //Password validation
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])>=8 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}
		elseif (strlen($_POST["password"])< 8 && !empty($_POST["password"]))  
	    {
			$err_pass="Password must contain at least 8 characters";
			$hasError = true;
		}
		if(!$hasError){
			
			$rs = authenticateUser($email);
			
               if($rs)
               {
                    session_start();
                    $_SESSION["v_profile"] = $rs;
				    setcookie("loggedUser",$email,time()+120);
				
					header("Location: UserDashboard.php");
				}
					
			$err_db = "Username password invalid";
		}
			
	}		
		
		
	//....................Payment..............................................................
	
	
	
     
      else if(isset($_POST["transfer"]))
      {
      
          
	    if(empty($_POST["email"]))      //Email validation
     	{
			$err_email="Email Required";
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

		elseif(!strpos($_POST["email"],'@'))
		{
			if(strpos($_POST["email"],'.'))
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

		elseif (strpos($_POST["email"],'@') ) 
		{
			if (strpos($_POST["email"],'.')) 
			{
			    $email=$_POST["email"];
			}

			elseif (!strpos($_POST["email"],'.') || strpos($_POST["email"],'@'))
			{
				$err_email="First use @ and then .(dot)";
			    $hasError = true;
			}
			
		}
		
		
		
	    if(empty($_POST["email"]))      //Email validation
     	{
			$err_email="Email Required";
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

		elseif(!strpos($_POST["email"],'@'))
		{
			if(strpos($_POST["email"],'.'))
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

		elseif (strpos($_POST["email"],'@') ) 
		{
			if (strpos($_POST["email"],'.')) 
			{
			    $email=$_POST["email"];
			}

			elseif (!strpos($_POST["email"],'.') || strpos($_POST["email"],'@'))
			{
				$err_email="First use @ and then .(dot)";
			    $hasError = true;
			}
			
		}
		
		
		
           if(empty($_POST["transaction"]))   
         {
            $err_Ttype="Transaction type required";
            $hasError = true;
        }

 

        elseif (strlen($_POST["transaction"])>=6 && !empty($_POST["transaction"]))  
        {
            $Ttype=$_POST["transaction"];
        }
        
       

       if(empty($_POST["transaction_no"]))    
         {
            $err_tn="Transaction number required";
            $hasError = true;
        }

 

         elseif(is_numeric($_POST["transaction_no"]) && !empty($_POST["transaction_no"]))
         {
            $tn=$_POST["transaction_no"];
         }
         elseif(!is_numeric($_POST["transaction_no"]))
         {
            $err_tn="Invalid transaction number";
            $hasError = true;
         }
        
         
          
        if(empty($_POST["date"]))   
        {
            $err_date="Date required";
            $hasError = true;
        }

        else  
        {
            $date=$_POST["date"];
        }
    

       if(is_numeric($_POST["balance"]) && !empty($_POST["balance"]))
        {
            $balance=$_POST["balance"];
        }
         elseif(!is_numeric($_POST["balance"]))
         {
            $err_balance="Invalid";
            $hasError = true;
         }
		 
		 
		 if(!$hasError){
			
			$rs = authenticatePayment($email);
			
               if($rs)
               {
                    session_start();
                    $_SESSION["u_profile"] = $rs;
				
				
					header("Location: Payment.php");
				}
					
			$err_db = "invalid";
		}
        
         /* if(!$hasError){
            $rs = transferamount($Ttype,$tn,$date,$Pby,$Rby,$balance);
            if($rs === true){
                header("Location: Transaction.php");
                
            }
            $err_db = "Database error";
            }
        */          
          
      }
     

	 
	 
	 
       // ...................................Booking Photographer........................................

       

        else if(isset($_POST["Booking"])){
            
            
          //Name  Validation
                
               if(empty($_POST["name"])){
               $err_name="Name required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["name"]) && !empty($_POST["name"]))
               {
                   if(strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 6)
                   {
                $name=$_POST["name"];
                }

 

                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 6)
                   {
                $err_name="Space required";
                    $hasError = true;
                }

 

                elseif(strpos($_POST["name"]," ") && strlen($_POST["name"]) < 6)
                   {
                $err_name="Name must contain at least 6 characters";
                    $hasError = true;
                }
                
                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) < 6)
                {
                    $err_name="Name must contain at least 6 characters with space";
                    $hasError = true;
                }
               
               }
               
                elseif(is_numeric($_POST["name"]))
                {
                    $err_name="Number is not allowed";
                    $hasError = true; 
                }
              
              
              //Email  Validation

 

                 
               if(empty($_POST["email"])){
                  
                $err_email="Email Required ";
                 $hasError = true;
                 }
                
               else if(strpos($_POST["email"],"@"))
               {
                 if(strpos($_POST["email"],"."))
                 {
                  $email=$_POST["email"];
                }
                else{
                     $err_email="Not accepted";
                     $hasError = true;
                }
               }
              
                else if(strpos($_POST["email"],"."))
               {
                 if(strpos($_POST["email"],"."))
                 {
                   $err_email="use .(dot) after @";
                   $hasError = true;
                 }
                 
               }
               
               else{
                   $err_email="Invalid email";  
                   $hasError = true;
                }
                
           //Type Validation
			  
	    if(empty($_POST["type"]))    
     	{
			$err_type="Type Required";
			$hasError = true;
		}

		else
		{
			$type=$_POST["type"];
		}
		


			 
              //Email  Validation

 

                 
               if(empty($_POST["pemail"])){
                  
                $err_pemail="Email Required ";
                 $hasError = true;
                 }
                
               else if(strpos($_POST["pemail"],"@"))
               {
                 if(strpos($_POST["pemail"],"."))
                 {
                  $pemail=$_POST["pemail"];
                }
                else{
                     $err_pemail="Not accepted";
                     $hasError = true;
                }
               }
              
                else if(strpos($_POST["pemail"],"."))
               {
                 if(strpos($_POST["pemail"],"."))
                 {
                   $err_pemail="use .(dot) after @";
                   $hasError = true;
                 }
                 
               }
               
               else{
                   $err_pemail="Invalid email";  
                   $hasError = true;
                }
                
           
            
            /*if(!$hasError){
            $rs =  insertBookingform($name,$email,$date,$pname,$pemail);
            if($rs === true){
                header("Location: UserDashboard.php");
                
            }
            $err_db = "invalid";
            }
            
            }*/
            
            if (!$hasError) 
            {
                $rs=AuthenticateBooking($email);
                if($rs)
                {
                    session_start();
                    $_SESSION["p_booking"] = $rs;

                    header("Location: UserDashboard.php");
				}

                 
                $err_db = "invalid";
               }
           }






	   
             

		//...................End............................


		function insertUser($name,$email,$gender,$add,$file,$cpass){
		$query  = "insert into user_signup values (NULL,'$name','$email','$gender','$add','$file','$cpass')";
		return execute($query);	
		}
		
		function authenticateUser($email){
		
          $query= "select * from user_signup where Email='$email'";
          return $rs= get($query);
     
		}
			
		
		
		//............................................................................................
		
		
		function getviewPglist(){
		    $query = "SELECT * FROM  p_registration";
			$rs = get($query);
			return $rs;
		}
		
		function getMsgBox(){
		    $query = "SELECT * FROM  messagebox";
			$rs = get($query);
			return $rs;
		}
		
		//...........................................................................................
		
		
		
		function getTransaction(){
		    $query = "SELECT * FROM  messagebox";
			$rs = get($query);
			return $rs;
		}
		
		
		
		//.....................................................................................
		
		function insertBookingform($name,$pemail,$type,$email){
		$query  = "insert into booking values (NULL,'$name','$pemail','$type,'$email')";
		return execute($query);	
		}
		
		function AuthenticateBooking($email)
        {
          $query= "select * from booking where Pemail='$email'";
          return $rs= get($query);
        }
		
		
		
		
		
						
 ?>