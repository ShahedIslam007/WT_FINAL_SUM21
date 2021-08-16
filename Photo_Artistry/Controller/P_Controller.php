<?php
     include 'models/db_config.php';    
     
	 $name="";
     $err_name="";

     $email="";
     $err_email=""; 

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
	 
	 $pgtype="";
     $err_pgtype="";
	 
	 $amount="";
	 $err_amount="";
	 
	 $msg="";
	 $err_msg="";
	 
     $err_db="";
     $hasError = false;
	 
	 $pgtype = array("Wedding_photographer","Event_photographer","Fashion_photographer","Film_photographer","Adventure_photographer");


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
     //..........................Photographer Signup...........................
	 
	 
     if(isset($_POST["SignUp"]))
     {
		 
		 //Name  Validation
				
               if(empty($_POST["name"])){
               $err_name="Name required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["name"]) && !empty($_POST["name"]))
               {
               	if(strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 3)
               	{
                $name=$_POST["name"];
                }

                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 3)
               	{
                $err_name="Space required";
			        $hasError = true;
                }

                elseif(strpos($_POST["name"]," ") && strlen($_POST["name"]) < 3)
               	{
                $err_name="Name must contain at least 3 characters";
			        $hasError = true;
                }
                
                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) < 3)
                {
                	$err_name="Name must contain at least 3 characters with space";
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
			$rs = insertPhotographer($name,$email,$gender,$add,$cpass);
			if($rs === true){
				header("Location: P_Reg.php");
			}
			$err_db = "invalid";
			
		    }

	    }
		
		
		
		
		//....................Photographer Login......................................
		
		
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
			
			$rs = authenticatePhotographer($email);
			
               if($rs)
               {
                    session_start();
                    $_SESSION["s_profile"] = $rs;
				    setcookie("loggedUser",$email,time()+1200);
				
					header("Location: Dashboard.php");
				}
					
			$err_db = "Username password invalid";
		}
			
	}		
		
	 // Display Payment....................
	   
	   
		 
	// .......................................Contact with user.................................................................
	
	
	
	     else if(isset($_POST["Send"]))
        {
		 
		 //Name  Validation
				
               if(empty($_POST["name"])){
               $err_name="Name required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["name"]) && !empty($_POST["name"]))
               {
               	if(strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 3)
               	{
                $name=$_POST["name"];
                }

                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 3)
               	{
                $err_name="Space required";
			        $hasError = true;
                }

                elseif(strpos($_POST["name"]," ") && strlen($_POST["name"]) < 3)
               	{
                $err_name="Name must contain at least 3 characters";
			        $hasError = true;
                }
                
                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) < 3)
                {
                	$err_name="Name must contain at least 3 characters with space";
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
			
       //Msg Validation
			  
	    if(empty($_POST["Message"]))    
     	{
			$err_msg="Message Required";
			$hasError = true;
		}

		else
		{
			$add=$_POST["Message"];
		}			
	
	           if(!$hasError){
			    $rs = insertMsg($name,$email,$msg);
			    if($rs === true){
				header("Location: Dashboard.php");
			   }
			    $err_db = "invalid";
			
      		    }
 
	     }
     
	    
		//Manage Own Profile............................
	
	
	
	    else if(isset($_POST["Update"]))
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
				
				
				//Email validation
				
	           if(empty($_POST["email"]))      
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
			  
		//Gender Validation
            
            if(!isset($_POST["gender"])){
                $err_gender="Gender Required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"]; 
                
            }   	
           
		//Photographer Type validation
			
			if(empty($_POST["Ptype"])){
            $err_Ptype="Photographer Type Required";
            $hasError=true;
            }
            else{
            $Ptype=$_POST["Ptype"];
            }
		

        //Password validation		
		
		if(empty($_POST["password"]))   
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

		

		if(!$hasError){
			$fileType = strtolower(pathinfo(basename($_FILES["u_image"]["name"]),PATHINFO_EXTENSION));
		    $file = "Gallery/Gallery_Images/".uniqid().".$fileType";
		    move_uploaded_file($_FILES["u_image"]["tmp_name"],$file);
			$rs = updatePhotographer($name,$email,$gender,$Ptype,$file,$pass,$_POST["id"]);
			if($rs === true){
				
				header("Location: HomePage.php");
			}
			$err_db = "$rs";
			
		    }
		}
		
		
	 
	 
     //.......................End................................
	 
	 
        function insertPhotographer($name,$email,$gender,$add,$cpass){
		$query  = "insert into p_signup values (NULL,'$name','$email','$gender','$add','$cpass')";
		return execute($query);	
		}
		
		function authenticatePhotographer($email){
		
          $query= "select * from p_registration where Email='$email'";
          return $rs= get($query);
     
		}
			
		

    //Payment..............................................
	
		
		
		
		
	//Contact with user........................................................
	
		function getContactlist(){
		    $query = "SELECT * FROM  user_signup";
			$rs = get($query);
			return $rs;
		}
		
		
		
		function getContact($id){
		$query = "SELECT * FROM user_signup where id=$id";
		$rs = get($query);
		
	 	return $rs[0]; //to pass only 1 instance
	    }
		
		
		function insertMsg($name,$email,$msg){
		$query  = "insert into messagebox values (NULL,'$name','$email','$msg')";
		return execute($query);	
		}
		
		//...............................................................................
		
		
		/*function getProfile(){
			$currentUser = $_SESSION["email"];
            $query  = "SELECT * FROM p_registration WHERE Email='$currentUser'";
			$rs = get($query);
			return $rs;
		}
		*/
		


        
		//Manage own Profile..........................
		
		function getUser($id){
		$query = "SELECT * FROM  p_registration where id=$id";
		$rs = get($query);
		
	 	return $rs[0]; //to pass only 1 instance
	    }
		
		function updatePhotographer($name,$email,$gender,$Ptype,$file,$cpass,$id){
		      $query ="Update p_registration set name='$name',email='$email',gender='$gender',Ptype='$Ptype',Image='$file',password='$cpass' where id=$id";
	
     	   return execute($query);	
		}
		

		
?>






             		
		
