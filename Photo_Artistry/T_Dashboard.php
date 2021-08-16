<?php 
          include 'Tutor_header.php';
          include 'controllers/TutorController.php';
           
		   if(!isset($_COOKIE['loggedTutor']))
          {
        header("Location: Tutor_Login.php");
              }
?>
<html>
      <body>
            <form method="Post"action=""style="
   background: rgb(0,0,0,0.4);;
   width: 40%;
   margin: 150px auto;
  padding: 20px 0;
   border-radius: 15px;
    box-shadow: 5px 5px 8px gray;
          ">
  <h4 align="center">WELCOME             <?php echo $_COOKIE["loggedTutor"]; ?> </h4>
      </body>
</html>

	 
	      <table class="table table-striped">
	
	</table>
	
</div>



