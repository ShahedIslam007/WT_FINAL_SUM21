<?php 
          include 'Learner_header.php';
          include 'controllers/LearnerController.php';
		  
		   if(!isset($_COOKIE['loggedLearner']))
          {
        header("Location: Learner_Login.php");
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
  <h4 align="center">Welcome        <?php echo $_COOKIE["loggedLearner"]; ?> </h4>
      
</body>
</html>

     	      <table class="table table-striped">
	
	</table>
	
</div>
		
		<?php include 'Learner_footer.php';?>

