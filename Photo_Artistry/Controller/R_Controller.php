<?php
     
     include 'models/db_config.php';    
    
	 $name="";
     $err_name="";

     $email="";
     $err_email="";
	 
	 $gender="";
     $err_gender="";
	 
	 $Ptype="";
     $err_Ptype="";
	 
	 $pass="";
     $err_pass="";
	 
	 $cpass="";
     $err_cpass="";
	 
	 $err_db="";
     $hasError = false;
	
	
	       if(isset($_POST["Register"]))
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
			$rs = insertPhotographer($name,$email,$gender,$Ptype,$file,$cpass);
			if($rs === true){
				
				
				header("Location: P_Login.php");
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
			
			if(empty($_POST[Ptype])){
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
				
				header("Location: Viewlist.php");
			}
			$err_db = "$rs";
			
		    }
		}

		//........................ End................................
		
		
        function insertPhotographer($name,$email,$gender,$Ptype,$file,$cpass){
		$query  = "insert into p_registration values (NULL,'$name','$email','$gender','$Ptype','$file','$cpass')";
	
     	return execute($query);	
		}
		
		
		
		function getviewlist(){
		    $query = "SELECT * FROM  p_registration";
			$rs = get($query);
			return $rs;
		}
		
		
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
		
		//Search--------------
		function Search($key)               
        {
            $query ="select Id,Name,Email,Gender,Ptype,Image from p_registration where name like '%$key%'";
            $rs = get($query);
            return $rs;
        }
		
		
			
?>