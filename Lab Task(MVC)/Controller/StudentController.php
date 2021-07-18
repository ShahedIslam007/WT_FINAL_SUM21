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
     		$rs= insertStudent("$name","$birth","$credit","$cgpa",$_POST["Dept_id"]);
     		
     		if($rs===true)
     		{
     			header("Location: AllStudents.php");
     		}

               $err_db= $rs;
     	}
     }

     if(isset($_POST["Delete"]))
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

          //Database

          if(!$hasError)
          {
               $rs=deleteStudent($_POST["id"]);
               if($rs===true)
               {
                    header("Location: AllStudents.php");
               }

               $err_db= $rs;
          }
     }

     if(isset($_POST["Edit"]))
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

          //Database

          if(!$hasError)
          {
               $rs=updateStudent("$name","$birth","$credit","$cgpa",$_POST["id"]);
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

     function getAllDepartment()
     {
     	$query = "select * from department";
        $rs = get($query);
        return $rs;
     }

     function allStudents()
     {
     	$query= "SELECT s.* , d.Name as Department from student s, department d WHERE d.id= s.Dept_id";
     	$rs= get($query);
     	return $rs;
     }

     function idStudent($id)
     {
          $query= "select * from student where id= $id";
          $rs= get($query);
          return $rs[0];
     }

     function deleteStudent($id)
     {
          $query= "DELETE from student where id= $id";
          return execute($query);
     }

     function updateStudent($name,$DOB,$Credit,$CGPA,$id)
     {
          $query = "update student set name='$name', dob='$DOB', credit='$Credit', cgpa='$CGPA' where id=$id";
          return execute($query);
     }
?>