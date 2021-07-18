<?php  
     include 'Model/db_config.php';

     $name="";
     $err_name="";
     $birth="";
     $err_birth="";
     $credit="";
     $err_credit="";
     $cgpa="";
     $err_cgpa="";
     $err_db="";

     $hasError = false;

     if(isset($_POST["Submit"]))
     {
     	if(empty($_POST["name"]))
     	{
     		$err_name="Name Required";
            $hasError = true;
     	}

     	else
     	{
     		$name=$_POST["name"];
     	}

     	if(empty($_POST["birth"]))
     	{
     		$err_birth="Birth Required";
            $hasError = true;
     	}

     	else
     	{
     		$birth=$_POST["birth"];
     	}

     	if(empty($_POST["credit"]))
     	{
     		$err_credit="Credit Required";
            $hasError = true;
     	}

     	else
     	{
     		$credit=$_POST["credit"];
     	}

     	if(empty($_POST["cgpa"]))
     	{
     		$err_cgpa="CGPA Required";
            $hasError = true;
     	}

     	else
     	{
     		$cgpa=$_POST["cgpa"];
     	}

     	if(!$hasError)
     	{
     		$rs= insertStudent("$name","$birth","$credit","$cgpa",5);
     		
     		if($rs===true)
     		{
     			header("Location: AllStudents.php");
     		}

               $err_db= $rs;
     	}
     }

     function insertStudent($name,$DOB,$Credit,$CGPA,$Dept_id)
     {
     	$query="INSERT INTO student VALUES(NULL,'$name','$DOB','$Credit','$CGPA','$Dept_id')";
     	return execute($query);
     }

     function allStudents()
     {
     }
?>