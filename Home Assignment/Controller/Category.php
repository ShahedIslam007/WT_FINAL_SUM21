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

          //Database

          if(!$hasError)
          {
               $rs=updateCatagory("$name",$_POST["id"]);
               if($rs===true)
               {
                    header("Location: AllCatagories.php");
               }

               $err_db= $rs;
          }
     }

     //Delete Catagory

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
               $rs=deleteCatagory($_POST["id"]);
               var_dump($rs);
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

     function idCatagory($id)
     {
          $query= "select * from catagory where id= $id";
          $rs= get($query);
          return $rs[0];
     }

     function deleteCatagory($id)
     {
          $query= "DELETE from catagory where id= $id";
          return execute($query);
     }

     function updateCatagory($name,$id)
     {
          $query = "update catagory set name='$name' where id=$id";
          return execute($query);
     }

?>