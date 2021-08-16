<?php
          include 'controllers/TutorController.php';
		  $email=$_GET["email"];
		  $tutor=checkTutorEmail($email);
		  //echo "$tutor";
		  if($tutor){
		    echo "INVALID";
		  }
		else echo "VALID";    
?>

