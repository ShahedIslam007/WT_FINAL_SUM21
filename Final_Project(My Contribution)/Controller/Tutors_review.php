<?php  
     include 'Model/db_config.php';

     $name="";
     $err_name="";
     $t_review="";
     $err_t_review="";
     $review="";
     $err_review="";
     $ratting="";
     $err_ratting="";

     $hasError = false;

     $Ratting = array("*","* *","* * *","* * * *","* * * * *");

/*************************************Update Tutors Review & Ratting************************************/

if(isset($_POST["tr"]))
{
     if(empty($_POST["name"]))
          {
               $err_name="Reviewer Name Required";
               $hasError = true;
          }

          else
          {
               $name=$_POST["name"];
          }

          if(empty($_POST["t_review"]))
          {
               $err_t_review="Tutor Name Required";
               $hasError = true;
          }

          else
          {
               $t_review=$_POST["t_review"];
          }

          if(empty($_POST["review"]))
          {
               $err_review="Tutor Review Required";
               $hasError = true;
          }

          else
          {
               $review=$_POST["review"];
          }

          $ratting=$_POST["Ratting"];

          if(!$hasError)
          {
               $rs=updateTutorReview("$name","$t_review","$review","$ratting",$_POST["id"]);
               if($rs===true)
               {
                    header("Location: Ratting.php");
               }

               $err_db= "Dublicate Data";
          }
}

/*************************************Delete Photographers Review & Ratting************************************/

if(isset($_POST["tt"]))
{
     if(!$hasError)
          {
               $rs=deleteTutorReview($_POST["id"]);

               if($rs===true)
               {
                    header("Location: Ratting.php");
               }

               $err_db= $rs;
          }
}

function deleteTutorReview($id)
     {
          $query= "DELETE from tutors_rr where id= $id";
          return execute($query);
     }

function updateTutorReview($name,$t_review,$review,$ratting,$id)
     {
          $query = "update tutors_rr set Name='$name', ReviewTo='$t_review', Review='$review',Ratting='$ratting' where id=$id";
          return execute($query);
     }

function allTutorsReview()
     {
          $query= "select * from tutors_rr";
          return $rs= get($query);
     }

function getTutorsReview($id)
     {
          $query= "select * from tutors_rr where id= $id";
          $rs= get($query);
          return $rs[0];
     } 

?>