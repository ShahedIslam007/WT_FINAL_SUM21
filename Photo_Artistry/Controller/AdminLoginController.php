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
     $n_admin="";
     $err_n_admin="";
     $n_pass="";
     $err_n_pass="";

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
			if($rs)
			{
				session_start();
                    $_SESSION["data"] = $rs;
                    setcookie("loggedUser",$email,time()+2);
				header("Location: AdminDashboard.php");

			}

			$err_db="Password Invalid !!<br>";
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

		else if(empty($_POST["email"]))      //Email validation
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
			$rs=updatePassword($cpass,$email);
			
               if($rs===true)
               {
                    header("Location: Admin_login.php?msg=reset_success");
               }

               $err_db= $rs;
		}
    }

/*-------------------------------Add New Admin-------------------------------------------*/
    
    if (isset($_POST["admin"]))
    {
    	   if(empty($_POST["n_admin"])) 
    	   {
    	   	$err_n_admin="Email Recuired";
    	   	$hasError = true;
    	   }

    	   else
    	   {
    	   	$n_admin=$_POST["n_admin"];
    	   }

    	   if(empty($_POST["n_pass"])) 
    	   {
    	   	$err_n_pass="Password Recuired";
    	   	$hasError = true;
    	   }

    	   else
    	   {
    	   	$n_pass=$_POST["n_pass"];
    	   }

    	   if(!$hasError)
          {          
               $rs= insertAdmin("$n_admin","$n_pass");
               
               if($rs===true)
               {
                    header("Location: AdminDashboard.php");
               }

               $err_db= $rs;

          }
    }


     function insertAdmin($n_admin,$n_pass)
     {
          $query="INSERT INTO admin_login VALUES(NULL,'$n_admin','$n_pass')";
          return execute($query);
     }

     function idPassword($id)
     {
          $query= "select * from admin_login where id= $id";
          $rs= get($query);
          return $rs[0];
     }

     function updatePassword($cpass,$email)
     {
          $query = "update admin_login set Password='$cpass' where Email='$email'";
          return execute($query);
     }

     function getAll()
     {
		$query = "select * from admin_login";
		$rs = get($query);
		return $rs;
	}

	function checkEmail($email)
	{
		$query = "select email from admin_login where Email='$email'";
		$rs = get($query);
		if(count($rs)>0)
		{
			return true;
		}

		else
		{
			return false;
		}
	}

?>