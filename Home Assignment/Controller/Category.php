<?php  
     include 'Model/db_config.php';

     $name="";
     $err_name="";
     $err_db="";

     $hasError = false;

     if(isset($_POST["Submit"]))
     {
     	if(empty($_POST["text"]))
     	{
     		$err_name="Name Required";
            $hasError = true;
     	}

     	else
     	{
     		$name=$_POST["text"];
     	}

     	//Database

     	if(!$hasError)
     	{
     		$rs= insertCatagory("$name");
     		
     		if($rs===true)
     		{
     			header("Location: AllCatagories.php");
     		}

               $err_db= $rs;

     	}
     }

     
     function insertCatagory($name)
     {
     	$query="INSERT INTO catagory VALUES(NULL,'$name')";
     	return execute($query);
     }

     function allCatagories()
     {
     	$query= "select * from catagory";
     	return $rs= get($query);
     }

?>