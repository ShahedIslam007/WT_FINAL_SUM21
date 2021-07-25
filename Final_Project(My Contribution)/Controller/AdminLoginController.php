<?php  
     include 'Model/db_config.php';
     $email="";
     $err_email="";
	 $pass="";
     $err_pass="";
     $err_db="";
     $pass="";
     $err_pass="";
	 $cpass="";
     $err_cpass="";

     $hasError = false;


/*----------------------------Login-----------------------------------*/

     if (isset($_POST["login"]))
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

		if (!$hasError) 
		{
			$rs=AuthenticateData($email, $pass);
			if($rs===true)
			{
				header("Location: Start.php");
			}

			$err_db="Username Or Password Invalid";
		}
     }

     function AuthenticateData($email, $pass)
     {
     	$query= "select * from admin_login where Email='$email' and Password='$pass'";
     	$rs= get($query);
     	if(count($rs)>0)
     	{
     		return true;
     	}

     	return false;
     }

/*-------------------------------Reset Password-------------------------------------------*/

    if (isset($_POST["reset"]))
    {
    	if(empty($_POST["password"]))   
     	{
			$err_pass="New Password Required";
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
			$err_cpass="Confirm Password does not Matched";
			$hasError = true;
		}

		else
		{
			$pass=$_POST["password"];
			$cpass=$_POST["confirm_password"];
		}

		if (!$hasError)
		{
			$rs=updatePassword("$cpass",$_POST["id"]);
			
               if($rs===true)
               {
                    header("Location: Admin_login.php");
               }

               $err_db= $rs;
		}
    }


     function idPassword($id)
     {
          $query= "select * from admin_login where id= $id";
          $rs= get($query);
          return $rs[0];
     }

     function updatePassword($cpass,$id)
     {
          $query = "update admin_login set Password='$cpass' where id=$id";
          return execute($query);
     }
?>