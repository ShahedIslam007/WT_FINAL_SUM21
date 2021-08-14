<?php  
     include 'Controller/AdminLoginController.php';

     $email= $_GET["email"];
     $user= checkEmail($email);

     if($user)
     {
          echo "Valid";
     }

     else
     {
          echo "Invalid";
     }
?>

