<?php
     include 'models/db_config.php';   

	 
     $name="";      //variable
     $err_name="";

     $email="";
     $err_email=""; 

	 $gender="";
     $err_gender="";
	 
	 $pcode="";
     $err_pcode="";
	 
	 $pass="";
     $err_pass="";
	 $cpass="";
     $err_cpass="";

     $services=[];
     $err_services="";
	 
     $add="";
     $err_add="";
	 
	 $num="";
     $err_num="";
	 
	 $image="";
     $bld="";
     $err_bld="";
	 
	 
	 //Payment
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
	 
	 //Rating
	 
	 $budget="";
     $err_budget="";

     $behavior="";
     $err_behavior="";
	 
	 $Satisfied="";
     $err_Satisfied="";

     $Star="";
     $err_Star="";
	 
	 $purpose="";
     $err_purpose="";

     $feedback="";
     $err_feedback="";
	 
	 $err_db="";
     $hasError = false;
	 
	 
	 $Address = array("Dhaka","Chittagong","Rajshahi","Khulna","Sylhet","Barisal","Mymensingh","Rangpur");
     $Blood = array("A+","A-","B+","B-","O+","O-","AB+","AB-");

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
	 
	 
	 

   
			//*******************************SignUp******************************************
			
			
			
			
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

		elseif (strlen($_POST["password"])<=6 && !empty($_POST["password"]))  
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
		
 

			if(!$hasError){
			$rs = insertUser($name,$email,$gender,$add,$pcode,$cpass);
			if($rs === true){
				header("Location: Learner_Registration.php");
			}
			$err_db = "Database Error";
			
		    }

     }
	 //*******************************registration******************************************
	 
	  elseif(isset($_POST["register"]))
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
                $err_name="Name must contain at least 8 characters";
			        $hasError = true;
                }
                
                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) < 6)
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
			
			
			
			//Address
			
			if(!isset($_POST["Address"])){
				$err_add="Address Required";
				$hasError = true;
			}
			else{
				$add=$_POST["Address"]; 
				
            } 
			
			
			 //Blood Group
			
			if(!isset($_POST["Blood"])){
				$err_bld="Blood Group Required";
				$hasError = true;
			}
			else{
				$bld=$_POST["Blood"]; 
				
            } 
			
				
             //Gender Validation
            
            if(!isset($_POST["gender"])){
                $err_gender="Gender Required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"]; 
                
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

		elseif (strlen($_POST["password"])>=6 && !empty($_POST["password"]))  
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

       
        $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
		$file = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["image"]["tmp_name"],$file);

			if(!$hasError){
			$rs = insertLearner($name,$email,$add,$pcode,$num,$gender,$bld,$file,$cpass);
			if($rs === true){
				header("Location: L_Dashboard.php");
				
			}
			$err_db = "Database Error";
			}

     }
	 
	 
	 
	 
	 //*******************************Add******************************************
			
			
			
			
     elseif(isset($_POST["Add"]))
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
            
             
			    if(empty($_POST["gender"]))
				{
			    $err_gender="Gender Required";
                $hasError = true;
                }
				elseif(!is_numeric($_POST["gender"]) && !empty($_POST["gender"])){
                $gender=$_POST["gender"]; 
                
                }  
				elseif(is_numeric($_POST["gender"]))
				{
                    $err_gender="Number is not allowed";
			        $hasError = true; 
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
			  
			  
			  
			 //Blood Group
			
			if(!isset($_POST["Blood"])){
				$err_bld="Blood Group Required";
				$hasError = true;
			}
			else{
				$bld=$_POST["Blood"]; 
				
            } 
			  
			  
			  //Password Validation
			  
			  
     	
      if(empty($_POST["password"]))   
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])>=6 && !empty($_POST["password"]))  
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
		
        //Address
			
			if(empty($_POST["address"])){
			$err_add="Address Required";
			$hasError=true;
		    }
		else{
			$add=$_POST["address"];
		    }
 
 
        $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
		$file = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["image"]["tmp_name"],$file);

			if(!$hasError){
			$rs = insertLearner($name,$email,$add,$pcode,$num,$gender,$bld,$file,$cpass);
			if($rs === true){
				header("Location: Add_Learner.php");
				
			}
			$err_db = "Database Error";
			}
          
			

     }
	 
	//*******************************Edit******************************************
	 
	 else if(isset($_POST["edit"])){
		 
		 
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
		 
		 
		 $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
		$file = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["image"]["tmp_name"],$file);

			if(!$hasError){
			$rs = updateLearners($name,$email,$add,$pcode,$file,$_POST["id"]);
			if($rs === true){
				header("Location: All_Learners.php");
				
			}
			$err_db = "Database Error";
			}
          
					 
	 }
	 
	 
	 //****************Delete****************************************
	 
	 
	 
	 else if(isset($_POST["delete"]))
	 {
	
		
			  
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
				
				
		
             


		

			if(!$hasError){
		
			$rs = deleteLearner($_POST["id"]);
			if($rs === true){
				header("Location: All_Learners.php");
				
			}
			$err_db = "Database error";
			}

     }
	 
	 
	 
	 
	 
	 
	 
	  else if(isset($_POST["L_update"])){
		 
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
		 
		 
		 $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
		$file = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["image"]["tmp_name"],$file);

			if(!$hasError){
			$rs = updateLearners($name,$email,$add,$pcode,$file,$_POST["id"]);
			if($rs === true){
				header("Location:  L_Manage_Own_Profile.php");
				
			}
			$err_db = "Database Error";
			}
          
					 
	 }
	 
	 
	 
	 
	 //************************************RATING****************************************
	 //**********************************************************************************
	 //**********************************************************************************
	 
	 
	 elseif(isset($_POST["r_submit"]))
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
				
				//**************************************************
			
			if(!isset($_POST["budget"])){
				$err_budget="Answer required";
				$hasError = true;
			}
				else{
				$budget=$_POST["budget"]; 
				
            }    



		//**************************************************
			
			if(!isset($_POST["behavior"])){
				$err_behavior="Answer required";
				$hasError = true;
			}
				else{
				$behavior=$_POST["behavior"]; 
				
            } 



            //**************************************************
			
			if(!isset($_POST["Satisfied"])){
				$err_Satisfied="Answer required";
				$hasError = true;
			}
				else{
				$Satisfied=$_POST["Satisfied"]; 
				
            }    



		//**************************************************
			
			if(!isset($_POST["Star"])){
				$err_Star="Answer required";
				$hasError = true;
			}
				else{
				$Star=$_POST["Star"]; 
				
            } 



         //***************************************************

          if(empty($_POST["purpose"]))
            {
				$err_purpose ="Message Required";
				$hasError = true;
            }
            else
            {
				$purpose = $_POST["purpose"];
            }


			
		

         //***************************************************

          if(empty($_POST["feedback"]))
            {
				$err_feedback ="Feedback Required";
				$hasError = true;
            }
            else
            {
				$feedback = $_POST["feedback"];
            }
			
			
			 if(!$hasError){
			$rs = insertTrating($name,$budget,$behavior,$Satisfied,$Star,$purpose,$feedback);
			if($rs === true){
				header("Location: L_Dashboard.php");
				
			}
			$err_db = "Database error";
			}
		  
		  
	  }
				
				
		  
		  
	  
	 
elseif(isset($_POST["transfer"]))
	  {
		 
		
		//------------------------------------------------------------
		  
		   if(empty($_POST["transaction"]))   
     	{
			$err_Ttype="Transaction type required";
			$hasError = true;
		}

		elseif (strlen($_POST["transaction"])>=6 && !empty($_POST["transaction"]))  
	    {
			$Ttype=$_POST["transaction"];
		}
		
		
		//------------------------------------------------------------
		

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
		
		 //------------------------------------------------------------
		  
		   if(empty($_POST["date"]))   
     	{
			$err_date="Date required";
			$hasError = true;
		}

		else  
	    {
			$date=$_POST["date"];
		}
		
		//------------------------------------------------------------
		
	
		
		   if(empty($_POST["payment_by"]))   
     	{
			$err_Pby="..............required";
			$hasError = true;
		}

		elseif (strlen($_POST["payment_by"])>=6 && !empty($_POST["payment_by"]))  
	    {
			$Pby=$_POST["payment_by"];
		}
		
		
		//------------------------------------------------------------
	
		
		
		   if(empty($_POST["received_by"]))   
     	{
			$err_Rby="..............required";
			$hasError = true;
		}

		elseif (strlen($_POST["received_by"])>=6 && !empty($_POST["received_by"]))  
	    {
			$Rby=$_POST["received_by"];
		}
		
		
		//------------------------------------------------------------
		
		if(empty($_POST["balance"]))    
     	{
			$err_balance="Balance required";
			$hasError = true;
		}

       elseif(is_numeric($_POST["balance"]) && !empty($_POST["balance"]))
		{
			$balance=$_POST["balance"];
		}
         elseif(!is_numeric($_POST["balance"]))
		 {
			$err_balance="Invalid";
			$hasError = true;
		 }
		
		  if(!$hasError){
			$rs = transferamount($Ttype,$tn,$date,$Pby,$Rby,$balance);
			if($rs === true){
				header("Location: Transactions.php");
				
			}
			$err_db = "Database error";
			}
		  
		  
	  }
	 //*******************************login******************************************
		
	 
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

		elseif (strlen($_POST["password"])>=6 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}
		elseif (strlen($_POST["password"])< 6 && !empty($_POST["password"]))  
	    {
			$err_pass="Password must contain at least 8 characters";
			$hasError = true;
		}
		
		if(!$hasError){
           
            $rs = authenticateLearner($email);
           
               if($rs)
               {
                    session_start();
                    $_SESSION["learner_profile"] = $rs;
               setcookie("loggedLearner",$email,time()+150);
                    header("Location: L_Dashboard.php");
                }
                   
            $err_db = "Email password invalid";
        }
		
		
	}
		 
		 
	    
	 
	 
//........................Sign Up End................................

  
	
        function insertUser($name,$email,$gender,$add,$pcode,$cpass){       //signup
		$query  = "insert into learner values (NULL,'$name','$email','$gender','$add','$pcode','$cpass')";
		return execute($query);	
		}
		
		
		
		
		function insertLearner($name,$email,$add,$pcode,$num,$gender,$bld,$file,$cpass){        //registration
		$query  = "insert into learner_registration values (NULL,'$name','$email','$add',$pcode,$num,'$gender','$bld','$file','$cpass')";
		//echo $query;
		return execute($query);	
		}
		
		
		
		
		function authenticateLearner($email){      //login***********************
       
          $query= "select * from learner_registration where email='$email'";
          return $rs= get($query);
    
        }
		
		
		
		
		function getLearner($id){                   
		$query = "select * from learner_registration where id=$id";
		$rs = get($query);
		return $rs[0];                   //To pass only one instance
	    }
		
	
	
	
	    function getAllLearner(){                   //show in all learner page
		$query = "select * from learner_registration";
		$rs = get($query);
		return $rs;
	    }
		
		
		
		
		
		function updateLearners($name,$email,$add,$pcode,$file,$id){       //edit learner
		$query = "update learner_registration set name= '$name',email='$email',address='$add',postal_code='$pcode',img='$file' where id = $id";
	    return execute($query);
	    }	
	 
		
		
		
		
		 function deleteLearner($id)         //learner    delete
        {
          $query= "delete from learner_registration where id= $id";
          return execute($query);
		 
        }
		
		
		
		
		function transferamount($Ttype,$tn,$date,$Pby,$Rby,$balance)    //transaction
		{
		$query = "insert into payment values (NULL,'$Ttype',$tn,'$date','$Pby','$Rby',$balance)";
		return execute($query);
			
		}
			
			
			
		function getTransaction(){                   //show payment information
		$query ="select * from payment";
		$rs = get($query);
		return $rs;
	    }
		
		
		
		
		function insertTrating($name,$budget,$behavior,$Satisfied,$Star,$purpose,$feedback){
		$query  = "insert into tutor_rating values (NULL,'$name','$budget','$behavior','$Satisfied','$Star','$purpose','$feedback')";
		//echo $query;
		return execute($query);	
		}
		
		
		
		function search($key)               //Search--------------
		{
			$query ="select id,name,email,gender,address,img from learner_registration where name like '%$key%'";
			$rs = get($query);
		    return $rs;
		}
		
		
?>