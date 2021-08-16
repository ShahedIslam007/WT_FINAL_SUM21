<?php
     include 'models/db_config.php';    
     $name="";
     $err_name="";
	 
     $message="";
     $err_message="";

     $err_db="";
     $hasError = false;

     

     if(isset($_POST["lc_send"]))
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
			$rs = insertLcontact($name,$message); //value ......function call .....
			if($rs === true){
				header("Location: text.php");
			}
			$err_db = "Database Error";
			
		    }
		

	 }
	 
	 
	 
	 if(isset($_POST["tc_send"]))
     {
     	       //**********************NAME Validation**************************
				
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
		      
			  
			 
				//************************Message Validation*****************************
				
				
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
			$rs = insertTcontact($name,$message); //value ......function call .....
			if($rs === true){
				header("Location: text.php");
			}
			$err_db = "Database Error";
			
		    }
		

	 }
	
	 
	     function insertTcontact($name,$message){           //Tutor signup
		$query  = "insert into tutor_contact values (NULL,'$name','$message')";
		//echo $query;
		return execute($query);	
		}
	 
	 
	      function insertLcontact($name,$message){           //Tutor signup
		$query  = "insert into Learner_contact values (NULL,'$name','$message')";
		//echo $query;
		return execute($query);	
		}
		
	    function get_learnerm(){                   
		$query = "select * from learner_contact";
		$rs = get($query);
		return $rs;                   //To pass only one instance
	    }
		
		function get_tutorm(){                   
		$query = "select * from tutor_contact";
		$rs = get($query);
		return $rs;                   //To pass only one instance
	    }
	 
	        function search($key)               //Search--------------
		    {
			$query ="select id,name,email,gender,address,img from learner_registration where name like '%$key%'";
			$rs = get($query);
		    return $rs;
		    }
	 
	 
	 
    ?>
