<?php
     include 'models/db_config.php';    
     
	 $name="";   //Variable
     $err_name="";

     $email="";
     $err_email=""; 

	 $gender="";
     $err_gender="";
	 
      
     $pcode="";
     $err_pcode="";
	 
	 $num="";
     $err_num="";
	
	 $pass="";
     $err_pass="";
	 $cpass="";
     $err_cpass="";

     $services=[];
     $err_services="";

     $add="";
     $err_add="";
	 $name="";
     $err_name="";  

     $experience="";
     $err_experience="";
     
     $quality="";
     $err_quality="";

     $communication="";
     $err_communication="";

     $shoot="";
     $err_shoot="";

    $message="";
     $err_message="";

     $date="";
     $err_date="";
	 
	 $dis="";
     $err_dis="";
	 
	 $pname="";
	 $err_pname="";
	 
     $err_db="";
     $hasError = false;
	 
	 $Address = array("Dhaka","Chittagong","Rajshahi","Khulna");

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
//*****************************************************Sign Up**********************************************************
     if(isset($_POST["sign_up"]))
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
		
		
        //Address
			
			if(!isset($_POST["Address"])){
				$err_add="Address Required";
				$hasError = true;
			}
			else{
				$add=$_POST["Address"]; 
				
            } 


			if(!$hasError){
			$rs = insertUser($name,$email,$gender,$add,$cpass);
			if($rs === true){
				header("Location: User_Registration.php");
			}
			$err_db = "Database error";
			
		    }

     }
	 
	 
	 
	 //***********************************************************register**********************************************************
	 
	 else if(isset($_POST["register"]))
        {
			
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
				
				
				
				
				//Gender Validation
           
            if(!isset($_POST["gender"])){
                $err_gender="Gender required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"];
               
            }
				
				
				
				
				//Address
           
            if(!isset($_POST["Address"])){
                $err_add="Address required";
                $hasError = true;
            }
                else{
                $add=$_POST["Address"];
               
            }
			
			
			
			

            //Postal Code Validation

 

       if(empty($_POST["pcode"]))    
         {
            $err_pcode="Postal code required";
            $hasError = true;
        }

 

       elseif(is_numeric($_POST["pcode"]) && !empty($_POST["pcode"]))
        {
            $pcode=$_POST["pcode"];
        }
         elseif(!is_numeric($_POST["pcode"]))
         {
             $err_pcode="Invalid";
            $hasError = true;
         }
		



           //Password Validation

             if(empty($_POST["password"]))   
         {
            $err_pass="Password Required";
            $hasError = true;
        }

        elseif (strlen($_POST["password"])>=8 && !empty($_POST["password"]))  
        {
            $pass=$_POST["password"];
        }
			
	
	
	      // Number
        
             if(empty($_POST["num"])){
                $err_num="Phone Number Required";
                $hasError = true;
            }

  
                elseif(!is_numeric($_POST["num"]) && !empty($_POST["num"]))
                {
                $err_num=" Phone Number Required";
                $hasError = true;
                }

 

                elseif(is_numeric($_POST["num"]))
            {
                $num=$_POST["num"]; 
                
            }    
            


         $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
        $file = "Storage/Images/".uniqid().".$fileType";
        move_uploaded_file($_FILES["image"]["tmp_name"],$file);

 

            if(!$hasError){
            $rs = insertRUser($name,$email,$add,$pcode,$num,$gender,$file,$pass);
            if($rs === true){
                header("Location: User_Dashboard.php");
                
            }
            $err_db = "Hello Nazia";
            }
			
			
			
		}
	 
	  else if(isset($_POST["manage_profile"]))
        {
			
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
				
				
				
				
				//Gender Validation
           
            if(!isset($_POST["gender"])){
                $err_gender="Gender required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"];
               
            }
				
				
				
				
				//Address
           
            if(!isset($_POST["Address"])){
                $err_add="Address required";
                $hasError = true;
            }
                else{
                $add=$_POST["Address"];
               
            }
			
			
			
			

            //Postal Code Validation

 

       if(empty($_POST["pcode"]))    
         {
            $err_pcode="Postal code required";
            $hasError = true;
        }

 

       elseif(is_numeric($_POST["pcode"]) && !empty($_POST["pcode"]))
        {
            $pcode=$_POST["pcode"];
        }
         elseif(!is_numeric($_POST["pcode"]))
         {
             $err_pcode="Invalid";
            $hasError = true;
         }
		



           //Password Validation

             if(empty($_POST["password"]))   
         {
            $err_pass="Password Required";
            $hasError = true;
        }

        elseif (strlen($_POST["password"])>=8 && !empty($_POST["password"]))  
        {
            $pass=$_POST["password"];
        }
			
	
	
	      // Number
        
             if(empty($_POST["num"])){
                $err_num="Phone Number Required";
                $hasError = true;
            }

  
                elseif(!is_numeric($_POST["num"]) && !empty($_POST["num"]))
                {
                $err_num=" Phone Number Required";
                $hasError = true;
                }

 

                elseif(is_numeric($_POST["num"]))
            {
                $num=$_POST["num"]; 
                
            }    
            


         $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
        $file = "Storage/Images/".uniqid().".$fileType";
        move_uploaded_file($_FILES["image"]["tmp_name"],$file);

 

            if(!$hasError){
            $rs = insertRUser($name,$email,$add,$pcode,$num,$gender,$file,$pass);
            if($rs === true){
                header("Location: User_Dashboard.php");
                
            }
            $err_db = "Hello Nazia";
            }
			
			
			
		}
	 
	 
	 
	 //***********************************************************Log in**********************************************************
	  
	 
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
          $_SESSION["profile"] = $rs;
		  setcookie("loggedUser",$email,time()+70);


           header("Location: User_Dashboard.php");
          }

         $err_db = "Username password invalid";
          }

        }
		
		
	
		 
		 
	    
	 
	 //***********************************************************Rating**********************************************************
	  
	  else if(isset($_POST["user_submit"]))
        {
			
			
			


//****************************Name  Validation*********************************************************
				
               
                
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



              

          //**********************Question validation***************
      
      if(!isset($_POST["experience"])){
        $err_experience="Answer Required";
        $hasError = true;
      }
        else{
        $experience=$_POST["experience"]; 
        
            }  
//**************************************quality**************************************

       if(!isset($_POST["quality"])){
        $err_quality="Answer Required";
        $hasError = true;
      }
        else{
        $quality=$_POST["quality"]; 
        
            }    
//************************************communication********************************************

         if(!isset($_POST["communication"])){
        $err_communication="Answer Required";
        $hasError = true;
      }
        else{
        $communication=$_POST["communication"]; 
        
            }    
//*****************************************shoot******************************************

           if(!isset($_POST["shoot"])){
        $err_shoot="Answer Required";
        $hasError = true;
      }
        else{
        $shoot=$_POST["shoot"]; 
        
            }      


         //********************************massage*******************

          if(empty($_POST["message"]))
            {
				$err_message ="Message Required";
				$hasError = true;
            }
            else
            {
				$message = $_POST["message"];
            }
			
			
			
            if(!$hasError){
            $rs = insertRatingValues($name,$experience,$quality,$communication,$shoot,$message);
            if($rs === true){
                header("Location: User_Dashboard.php");
                
            }
            $err_db = "Hello Nazia";
            }
			
			
		}
	//*******************************contact********************************************
	
	else if(isset($_POST["user_contact"]))
        {
		
    
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
				
			//Message Validation
				
				 if(empty($_POST["message"]))
                {
                $err_message ="Message Required";
                $hasError = true;
                }
                else
                {
                $message = $_POST["message"];
                }
				
		
            if(!$hasError){
            $rs = insertcontact($name,$email,$message);
            if($rs === true){
                header("Location: User_Dashboard.php");
                
            }
            $err_db = "Hello Nazia";
            }

     }
else if(isset($_POST["User_event"]))
        {
				
			//Name Validation
				
				 if(empty($_POST["name"]))
                {
                $err_name ="Event Required";
                $hasError = true;
                }
                else
                {
                $name = $_POST["name"];
                }
				
				
					
			//Date Validation
				
				 if(empty($_POST["date"]))
                {
                $err_date ="Date Required";
                $hasError = true;
                }
                else
                {
                $date = $_POST["date"];
                }
				
				
					
			//Discount Validation
				
				 if(empty($_POST["dis"]))
                {
                $err_dis ="Discount Required";
                $hasError = true;
                }
                else
                {
                $dis = $_POST["dis"];
                }
				
				
				
					
			//Number Validation
				
				 if(empty($_POST["num"]))
                {
                $err_num ="Number Required";
                $hasError = true;
                }
                else
                {
                $num = $_POST["num"];
                }
				
			
			
			
            if(!$hasError){
            $rs = insertEPdetails($name,$num,$date,$is);
            if($rs === true){
                header("Location: User_Dashboard.php");
                
            }
            $err_db = "Hello Nazia";
            }
		}
		
	//***************************************Booking*****************************************
	
		else if(isset($_POST["User_Booking_request"])){
			
			
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
				
			//Message Validation
				
				 if(empty($_POST["message"]))
                {
                $err_message ="Message Required";
                $hasError = true;
                }
                else
                {
                $message = $_POST["message"];
                }
			
			

            //*****************Number Validation*********************
            
            
             if(empty($_POST["num"])){
                $err_num="Phone Number Required";
                $hasError = true;
            }

 

                elseif(!is_numeric($_POST["num"]) && !empty($_POST["num"]))
                {
                $err_num=" Phone Number Required";
                $hasError = true;
                }

 

                elseif(is_numeric($_POST["num"]))
            {
                $num=$_POST["num"]; 
                
            }    

           //date
           
            if(empty($_POST["date"])){
            $err_date="Date Required";
            $hasError=true;
            }
        else{
            $date=$_POST["date"];
            }


				
			//Photographer name
				
				 if(empty($_POST["pname"]))
                {
                $err_pname ="Name Required";
                $hasError = true;
                }
                else
                {
                $pname = $_POST["pname"];
                }
			
			
			
            if(!$hasError){
            $rs =  insertBookingform($name,$email,$num,$date,$pname,$message);
            if($rs === true){
                header("Location: User_Dashboard.php");
                
            }
            $err_db = "Hello Nazia";
            }
			
		}
		
		//*************************************Update***************************************
		
		 else if(isset($_POST["user_update"])){
         
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
                
                //Address
            
            if(empty($_POST["address"])){
            $err_add="Address Required";
            $hasError=true;
            }
            else{
            $add=$_POST["address"];
            }
 
                
                //Postal Code Validation

 

       if(empty($_POST["num"]))    
         {
            $err_num="Number required";
            $hasError = true;
        }

 

       elseif(is_numeric($_POST["num"]) && !empty($_POST["num"]))
        {
            $num=$_POST["num"];
        }
         elseif(!is_numeric($_POST["num"]))
         {
             $err_pcode="Invalid";
            $hasError = true;
         }



 
         $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
        $file = "storage/product_images/".uniqid().".$fileType";
        move_uploaded_file($_FILES["image"]["tmp_name"],$file);

 
         
        
            if(!$hasError){
            $rs = updateUser($name,$email,$add,$num,$file,$_POST["id"]);
            if($rs === true){
                header("Location: User_Dashboard.php");
                
            }
            $err_db = "Database Error";
            }
          
                     
     }
     
			
	    
	  
        //------------------------------------------------------Query-----------------------------------------------------------

        
        function insertBookingform($name,$email,$num,$date,$pname,$message){                          
		$query  = "insert into booking_photographer values (NULL,'$name','$email','$num','$date','$pname','$message')";
		return execute($query);	
		}
		
	
        function insertUser($name,$email,$gender,$add,$cpass){                           //User signup
		$query  = "insert into usersignup values (NULL,'$name','$email','$gender','$add','$cpass')";
		return execute($query);	
		}
		
	
	   
	   function authenticateUser($email){//For login

       $query= "select * from userregistration where Email='$email'";
       return $rs= get($query);

       }
	   
	   function insertEPdetails($name,$num,$date,$dis){                           //User signup
		$query  = "insert into event values (NULL,'$name','$num','$date','$dis')";
		return execute($query);	
		}
		
	   
	    function manage_profile($name,$email,$add,$pcode,$num,$gender,$file){
		$query  = "insert into usersmanageprofile values (NULL,'$name','$email','$add','$pcode','$num','$gender','$file')";
		return execute($query);	
		}
		function insertRatingValues($name,$experience,$quality,$communication,$shoot,$massage){
		$query  = "insert into user_rating values (NULL,'$name','$experience','$quality','$communication','$shoot','$massage')";
		return execute($query);	
		
		}
	   
	   
	   
        function updateUser($name,$email,$add,$num,$file,$id){
        $query = "update userregistration set name= '$name',email='$email',address='$add',number='$num',img='$file' where id = $id";
        return execute($query);
        }       
           
		function getUser($id){                  
        $query = "select * from userregistration where id=$id";
        $rs = get($query);
        return $rs[0];                                //To pass only one instance
        }
		   
	    function insertRUser($name,$email,$add,$pcode,$num,$gender,$file,$pass){        //User registration
        $query  = "insert into userregistration values (NULL,'$name','$email','$add',$pcode,$num,'$gender','$file','$pass')";
        //echo $query;
        return execute($query); 
		
        }
		
		function insertcontact($name,$email,$message){                           //User signup
		$query  = "insert into usercontact values (NULL,'$name','$email','$message')";
		return execute($query);	
		}
		
		
		 
		 //********************check***************
		 
		
		
        function checkUserEmail($email){                      //Check*******
        $query ="select name from  User_Signup where email='$email'";
        $rs = get($query);
        if(count($rs)>0){
            return true;
        }
        else return false;
       
        }
		
	

		
		    function search($key)               //Search--------------
        {
            $query ="select id,name,date,dis,num from event where name like '%$key%'";
            $rs = get($query);
            return $rs;
        }
?>	


	
