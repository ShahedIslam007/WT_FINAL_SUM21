<?php  
     include 'Model/db_config.php';

     $name="";
     $err_name="";
     $phone="";
     $err_phone="";
     $Addr="";
     $err_Addr="";
     $err_db="";
     $categories="";
     $err_categories="";
     $district="";
     $err_district="";

     $hasError = false;

     $Categories = array("Wedding Photographer","Event Photographer","Adventure Photographer","Film Photographer","Fashion Photographer");

/*************************Update Photographer************************************/
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

          if(empty($_POST["phone"]))
          {
               $err_phone="Phone Required";
               $hasError = true;
          }

          else
          {
               $phone=$_POST["phone"];
          }

          if(empty($_POST["addr"]))
          {
               $err_Addr="Address Required";
               $hasError = true;
          }

          else
          {  
               $Addr=$_POST["addr"];
          }

               $categories=$_POST["Category"];

          //Database

          if(!$hasError)
          {
               $file_name= $_FILES['file'] ['name'];
               $file_temp_loc= $_FILES['file'] ['tmp_name'];
               $file_store= "Upload/".$file_name;

               move_uploaded_file($file_temp_loc, $file_store); 

               $rs=updatePhotographer("$name","$phone","$Addr","$file_store","$categories",$_POST["id"]);
               if($rs===true)
               {
                    header("Location: Admin_Photographer_CRUD.php");
               }

               $err_db= "Dublicate Data";
          }
     }

/*************************************Insert Photographer*************************************/

if(isset($_POST["Insert"]))
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

          if(empty($_POST["phone"]))
          {
               $err_phone="Phone Required";
               $hasError = true;
          }

          else
          {
               $phone=$_POST["phone"];
          }

          if(empty($_POST["addr"]))
          {
               $err_Addr="Address Required";
               $hasError = true;
          }

          else
          {  
               $Addr=$_POST["addr"];
          }

          if(!isset($_POST["Category"]))
          {
               $err_categories="Category Required";
               $hasError = true;
          }

          else
          {
               $categories=$_POST["Category"];
          }

          //Database

          if(!$hasError)
          {
               $file_name= $_FILES['file'] ['name'];
               $file_temp_loc= $_FILES['file'] ['tmp_name'];
               $file_store= "Upload/".$file_name;

               move_uploaded_file($file_temp_loc, $file_store);  
          
               $rs= insertPhotographer("$name","$phone","$Addr","$file_store","$categories");
               
               if($rs===true)
               {
                    header("Location: Admin_Photographer_CRUD.php");
               }

               $err_db= $rs;

          }
     }

/***********************************Delete Photographer********************************/

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

          if(empty($_POST["phone"]))
          {
               $err_phone="Phone Required";
               $hasError = true;
          }

          else
          {
               $phone=$_POST["phone"];
          }

          if(empty($_POST["addr"]))
          {
               $err_Addr="Address Required";
               $hasError = true;
          }

          else
          {  
               $Addr=$_POST["addr"];
          }


               $categories=$_POST["Category"];


          //Database

          if(!$hasError)
          {
               $rs=deletePhotographer($_POST["id"]);
               var_dump($rs);
               if($rs===true)
               {
                    header("Location: Admin_Photographer_CRUD.php");
               }

               $err_db= $rs;
          }
     }

/***********************************Sort Photographer********************************/

if(isset($_POST["Submit"]))
{
     if(empty($_POST["district"]))
     {
          $err_district="District Required";
          $hasError = true;
     }

     else
     {
          $district=$_POST["district"];
     }

     if (!$hasError) 
          {
               $rs=AuthenticateData($district);
               if($rs)
               {
                    session_start();
                    $_SESSION["s_result"] = $rs;
                    header("Location: Photographer_District_Sort.php");
               }

               else
               {
                    header("Location: District_Error.php");
               }
          }
}

     function AuthenticateData($district)
     {
          $query= "select * from photographers where Address='$district'";
          return $rs= get($query);
     }

     function allPhotographers()
     {
     	$query= "select * from photographers";
     	return $rs= get($query);
     }

     function getPhotographers($id)
     {
          $query= "select * from photographers where id= $id";
          $rs= get($query);
          return $rs[0];
     }

     function updatePhotographer($name,$phone,$Addr,$image,$Category,$id)
     {
          $query = "update photographers set name='$name', phone='$phone', address='$Addr',img='$image',Category='$Category' where id=$id";
          return execute($query);
     }

     function insertPhotographer($name,$phone,$Addr,$img,$Category)
     {
          $query="INSERT INTO photographers VALUES(NULL,'$name','$phone','$Addr','$img','$Category')";
          return execute($query);
     }

     function deletePhotographer($id)
     {
          $query= "DELETE from photographers where id= $id";
          return execute($query);
     }
?>