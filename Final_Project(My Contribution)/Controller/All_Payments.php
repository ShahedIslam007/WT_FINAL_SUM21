<?php  
    include 'Model/db_config.php';

    $c_name="";
    $err_c_name="";
    $paid="";
    $err_paid="";
    $p_name="";
    $err_p_name="";
    $categories="";
    $err_categories="";
    $l_name="";
    $err_l_name="";
    $t_name="";
    $err_t_name="";
    $t_paid="";
    $err_t_paid="";

    $hasError = false;

    $Categories = array("Bkash","Rocket","Nagad","Upay");

/*************************************Insert Photographers Payment*************************************/

if(isset($_POST["p_paid"]))
{
	      if(empty($_POST["c_name"]))
          {
               $err_c_name="Customer Name Required";
               $hasError = true;
          }

          else
          {
               $c_name=$_POST["c_name"];
          }

          if(empty($_POST["paid"]))
          {
               $err_paid="Photographer Payment Amount Required";
               $hasError = true;
          }

          else
          {
               $paid=$_POST["paid"];
          }

          if(empty($_POST["p_name"]))
          {
               $err_p_name="Photographer Name Required";
               $hasError = true;
          }

          else
          {
               $p_name=$_POST["p_name"];
          }

          if(!isset($_POST["Category"]))
          {
               $err_categories="Transition Required";
               $hasError = true;
          }

          else
          {
               $categories=$_POST["Category"];
          }

          if(!$hasError)
          {          
               $rs= insertPhotographer("$c_name","$paid","$p_name","$categories");
               
               if($rs===true)
               {
                    header("Location: AllPhotographers_Payment.php");
               }

               $err_db= $rs;

          }
}

/*************************************Update Photographers Payment*************************************/

if(isset($_POST["edit"]))
{
	      if(empty($_POST["c_name"]))
          {
               $err_c_name="Customer Name Required";
               $hasError = true;
          }

          else
          {
               $c_name=$_POST["c_name"];
          }

          if(empty($_POST["paid"]))
          {
               $err_paid="Photographer Payment Amount Required";
               $hasError = true;
          }

          else
          {
               $paid=$_POST["paid"];
          }

          if(empty($_POST["p_name"]))
          {
               $err_p_name="Photographer Name Required";
               $hasError = true;
          }

          else
          {
               $p_name=$_POST["p_name"];
          }

          $categories=$_POST["Category"];

          if(!$hasError)
          {
               $rs=updatePhotographer("$c_name","$paid","$p_name","$categories",$_POST["id"]);
               if($rs===true)
               {
                    header("Location: AllPhotographers_Payment.php");
               }

               $err_db= "Dublicate Data";
          }
}

/*************************************Delete Photographers Payment*************************************/

if(isset($_POST["delete"]))
{
     if(!$hasError)
          {
               $rs=deletePhotographer($_POST["id"]);
               var_dump($rs);
               if($rs===true)
               {
                    header("Location: AllPhotographers_Payment.php");
               }

               $err_db= $rs;
          }
}

function deletePhotographer($id)
     {
          $query= "DELETE from p_payment where id= $id";
          return execute($query);
     }

function insertPhotographer($c_name,$paid,$p_name,$Category)
     {
          $query="INSERT INTO p_payment VALUES(NULL,'$c_name','$paid','$p_name','$Category')";
          return execute($query);
     }

function allPhotographers()
     {
     	$query= "select * from p_payment";
     	return $rs= get($query);
     }

function getPhotographers($id)
     {
          $query= "select * from p_payment where id= $id";
          $rs= get($query);
          return $rs[0];
     }

function updatePhotographer($c_name,$paid,$p_name,$Category,$id)
     {
          $query = "update p_payment set c_name='$c_name', paid='$paid', p_name='$p_name',via='$Category' where id=$id";
          return execute($query);
     }



/*************************************Insert Tutors Payment*************************************/

if(isset($_POST["tl_paid"]))
{
          if(empty($_POST["l_name"]))
          {
               $err_l_name="Learner Name Required";
               $hasError = true;
          }

          else
          {
               $l_name=$_POST["l_name"];
          }

          if(empty($_POST["t_paid"]))
          {
               $err_t_paid="Tutor Payment Amount Required";
               $hasError = true;
          }

          else
          {
               $t_paid=$_POST["t_paid"];
          }

          if(empty($_POST["t_name"]))
          {
               $err_t_name="Tutor Name Required";
               $hasError = true;
          }

          else
          {
               $t_name=$_POST["t_name"];
          }

          if(!isset($_POST["Category"]))
          {
               $err_categories="Transition Required";
               $hasError = true;
          }

          else
          {
               $categories=$_POST["Category"];
          }

          if(!$hasError)
          {          
               $rs= insertTutor("$l_name","$t_paid","$t_name","$categories");
               
               if($rs===true)
               {
                    header("Location: AllTutors_Payment.php");
               }

               $err_db= $rs;

          }
}

/*************************************Update Photographers Payment*************************************/

if(isset($_POST["tl_edit"]))
{
          if(empty($_POST["l_name"]))
          {
               $err_l_name="Learner Name Required";
               $hasError = true;
          }

          else
          {
               $l_name=$_POST["l_name"];
          }

          if(empty($_POST["t_paid"]))
          {
               $err_t_paid="Tutor Payment Amount Required";
               $hasError = true;
          }

          else
          {
               $t_paid=$_POST["t_paid"];
          }

          if(empty($_POST["t_name"]))
          {
               $err_t_name="Tutor Name Required";
               $hasError = true;
          }

          else
          {
               $t_name=$_POST["t_name"];
          }

          $categories=$_POST["Category"];

          if(!$hasError)
          {
               $rs=updateTutor("$l_name","$t_paid","$t_name","$categories",$_POST["id"]);
               if($rs===true)
               {
                    header("Location: AllTutors_Payment.php");
               }

               $err_db= "Dublicate Data";
          }
}

/*************************************Delete Photographers Payment*************************************/

if(isset($_POST["tl_delete"]))
{
     if(!$hasError)
          {
               $rs=deleteTutor($_POST["id"]);
               var_dump($rs);
               if($rs===true)
               {
                    header("Location: AllTutors_Payment.php");
               }

               $err_db= $rs;
          }
}

function deleteTutor($id)
     {
          $query= "DELETE from t_payment where id= $id";
          return execute($query);
     }

function allTutors()
     {
          $query= "select * from t_payment";
          return $rs= get($query);
     } 

function insertTutor($l_name,$t_paid,$t_name,$Category)
     {
          $query="INSERT INTO t_payment VALUES(NULL,'$l_name','$t_paid','$t_name','$Category')";
          return execute($query);
     }  

function getTutors($id)
     {
          $query= "select * from t_payment where id= $id";
          $rs= get($query);
          return $rs[0];
     }  

function updateTutor($l_name,$t_paid,$t_name,$Category,$id)
     {
          $query = "update t_payment set l_name='$l_name', paid='$t_paid', t_name='$t_name',via='$Category' where id=$id";
          return execute($query);
     }

?>