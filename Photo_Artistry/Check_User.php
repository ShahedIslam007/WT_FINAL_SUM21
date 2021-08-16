

<?php
          include 'controllers/UserController.php';
          $email=$_GET["email"];
          $User=checkUserEmail($email);
         if($User){
            echo "INVALID";
          }
        else echo "VALID";   
?>