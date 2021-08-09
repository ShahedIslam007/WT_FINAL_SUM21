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

     $hasError = false;

     $Categories = array("Wedding Photography","Event Photography","Adventure Photography","Film Photography","Fashion Photography");

/*************************Update Tutor************************************/
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

               $rs=updateTutor("$name","$phone","$Addr","$file_store","$categories",$_POST["id"]);
               if($rs===true)
               {
                    header("Location: Admin_Tutor_CRUD.php");
               }

               $err_db= "Dublicate Data";
          }
     }

/*************************************Insert Tutor*************************************/

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
               $err_categories="Tution Topic Required";
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
          
               $rs= insertTutor("$name","$phone","$Addr","$file_store","$categories");
               
               if($rs===true)
               {
                    header("Location: Admin_Tutor_CRUD.php");
               }

               $err_db= $rs;

          }
     }

/***********************************Delete Tutor********************************/

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
               $rs=deleteTutor($_POST["id"]);
               var_dump($rs);
               if($rs===true)
               {
                    header("Location: Admin_Tutor_CRUD.php");
               }

               $err_db= $rs;
          }
     }

     function allTutors()
     {
     	$query= "select * from tutors";
     	return $rs= get($query);
     }

     function getTutors($id)
     {
          $query= "select * from tutors where id= $id";
          $rs= get($query);
          return $rs[0];
     }

     function updateTutor($name,$phone,$Addr,$image,$Category,$id)
     {
          $query = "update tutors set name='$name', phone='$phone', address='$Addr',img='$image',Category='$Category' where id=$id";
          return execute($query);
     }

     function insertTutor($name,$phone,$Addr,$img,$Category)
     {
          $query="INSERT INTO tutors VALUES(NULL,'$name','$phone','$Addr','$img','$Category')";
          return execute($query);
     }

     function deleteTutor($id)
     {
          $query= "DELETE from tutors where id= $id";
          return execute($query);
     }
?>