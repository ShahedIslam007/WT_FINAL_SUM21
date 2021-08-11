<?php  
     include 'Model/db_config.php';
     
     $categories="";
     $err_categories="";

     $hasError = false;

     $Categories = array("Wedding Photography","Event Photography","Adventure Photography","Film Photography","Fashion Photography");

if(isset($_POST["upload"]))
{
	if(!isset($_POST["Category"]))
          {
               $err_categories="Tution Topic Required";
               $hasError = true;
          }

          else
          {
               $categories=$_POST["Category"];
          }
    if(!$hasError)
    {
    	if($categories==="Wedding Photography")
    	{
    		   $file_name= $_FILES['file'] ['name'];
               $file_temp_loc= $_FILES['file'] ['tmp_name'];
               $file_store= "Upload/".$file_name;

               move_uploaded_file($file_temp_loc, $file_store);  
          
               $rs= insertWedding("$file_store");
               
               if($rs===true)
               {
                    header("Location: Start.php");
               }

               $err_db= $rs;
    	}

    	elseif($categories==="Event Photography")
    	{
    		   $file_name= $_FILES['file'] ['name'];
               $file_temp_loc= $_FILES['file'] ['tmp_name'];
               $file_store= "Upload/".$file_name;

               move_uploaded_file($file_temp_loc, $file_store);  
          
               $rs= insertEvent("$file_store");
               
               if($rs===true)
               {
                    header("Location: Start.php");
               }

               $err_db= $rs;
    	}

    	elseif($categories==="Adventure Photography")
    	{
    		   $file_name= $_FILES['file'] ['name'];
               $file_temp_loc= $_FILES['file'] ['tmp_name'];
               $file_store= "Upload/".$file_name;

               move_uploaded_file($file_temp_loc, $file_store);  
          
               $rs= insertAdventure("$file_store");
               
               if($rs===true)
               {
                    header("Location: Start.php");
               }

               $err_db= $rs;
    	}

    	elseif($categories==="Film Photography")
    	{
    		   $file_name= $_FILES['file'] ['name'];
               $file_temp_loc= $_FILES['file'] ['tmp_name'];
               $file_store= "Upload/".$file_name;

               move_uploaded_file($file_temp_loc, $file_store);  
          
               $rs= insertFilm("$file_store");
               
               if($rs===true)
               {
                    header("Location: Start.php");
               }

               $err_db= $rs;
    	}

    	elseif($categories==="Fashion Photography")
    	{
    		   $file_name= $_FILES['file'] ['name'];
               $file_temp_loc= $_FILES['file'] ['tmp_name'];
               $file_store= "Upload/".$file_name;

               move_uploaded_file($file_temp_loc, $file_store);  
          
               $rs= insertFashion("$file_store");
               
               if($rs===true)
               {
                    header("Location: Start.php");
               }

               $err_db= $rs;
    	}
    }
}

function insertWedding($file)
{
	$query="INSERT INTO wedding VALUES(NULL,'$file')";
    return execute($query);
}

function insertEvent($file)
{
	$query="INSERT INTO event VALUES(NULL,'$file')";
    return execute($query);
}

function insertAdventure($file)
{
	$query="INSERT INTO adventure VALUES(NULL,'$file')";
    return execute($query);
}

function insertFilm($file)
{
	$query="INSERT INTO film VALUES(NULL,'$file')";
    return execute($query);
}

function insertFashion($file)
{
	$query="INSERT INTO fashion VALUES(NULL,'$file')";
    return execute($query);
}

function Wedding()
{
	$query= "select * from wedding";
    return $rs= get($query);
}

function Fashion()
{
	$query= "select * from fashion";
    return $rs= get($query);
}

function Adventure()
{
	$query= "select * from adventure";
    return $rs= get($query);
}

function Event()
{
	$query= "select * from event";
    return $rs= get($query);
}

function Film()
{
	$query= "select * from film";
    return $rs= get($query);
}


?>

